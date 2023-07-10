<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use \App\Article;
use \App\ArticleType;
use Auth;

class ArticleController extends Controller
{
    public function index()
    {
        $data['articles'] = Article::all();
        return view( 'article.index', $data );
    }

    public function summary()
    {
        $data['articles'] = Article::orderBy('created_at', 'desc')->get();
        return view( 'article.summary', $data );
    }

    public function create()
    {
        $data['types'] = ArticleType::lists('type', 'id');
        return view( 'article.create', $data );
    }

    public function store(Request $request)
    {
        $input = \Input::except(['image']);
        
        if( Auth::check() ) {
            $input['author'] = Auth::user()->id;
        }
        else {
            $input['author'] = 8;
        }
        
	      $data = Article::create( $input );
        $data->day=Carbon::now();
        $data->save();

        $file=$request->file('image');
        if (isset($file)){
          $imageName='articles-'. $data->id .'.'.$request->file('image')->getClientOriginalExtension();
          $destinationPath = base_path() . '/public/data/articles/img';
          $request->file('image')->move($destinationPath, $imageName);

          $data->image=$imageName;
        }
        //force sample image
        $data->image='';
        $data->save();
       
        return view( 'article.show', $data );
    }

    public function show($id)
    {
        $data = Article::find( $id );
        return view( 'article.show', $data );
    }

    public function edit($id)
    {
        $data['article'] = Article::find( $id );
        $data['types'] = ArticleType::lists('type', 'id');
        return view( 'article.edit', $data );
    }

    public function update(Request $request, $id)
    {
		$input = \Input::except( array( 'submit', '_token', '_method', 'image' ));
        
        if( Auth::check() ) {
            $input['author'] = Auth::user()->id;
        }
        else {
            $input['author'] = 8;
        }
        
        $record = Article::find( $id );
		foreach ( $input AS $key => $value ) {
			$record[$key] = $value;
		}

    $file=$request->file('image');
    if (isset($file)){
      $imageName='articles-'.$id.'.'.$request->file('image')->getClientOriginalExtension();
      $destinationPath = base_path() . '/public/data/articles/img';
      $request->file('image')->move($destinationPath, $imageName);

      $record['image']=$imageName;
      $record['day']=Carbon::now();
    }
        $record->save();
        return view( 'article.show', $record );
    }

    public function destroy($id)
    {
      $data= Article::find($id);
      $data->delete();

      return redirect()->route( 'articles.index' );
    }
}
