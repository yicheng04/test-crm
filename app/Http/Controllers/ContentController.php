<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use \App\Content;

class ContentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['content']]);
    }
    
    public function index()
    {
        $data['contents'] = Content::all();
        return view( 'content.index', $data );
    }

    public function create()
    {
        return view( 'content.create' );
    }

    public function store(Request $request)
    {
      $input = \Input::except(['image']);
      $data = Content::create( $input );
      //$data->day=Carbon::now();
      $data->save();

      $file=$request->file('image');
      if (isset($file)){
        $imageName='contents-'. $data->id .'.'.$request->file('image')->getClientOriginalExtension();
        $destinationPath = base_path() . '/public/data/contents/img';
        $request->file('image')->move($destinationPath, $imageName);

        $data->image=$imageName;
      }
      $data->save();
        return view( 'content.show', $data );
    }

    public function show($id)
    {
        try{
            $data = Content::findOrFail( $id );
            return view( 'content.show', $data );
        }
        catch( Exception $e) {
            abort(404);
        }
        
    }

    public function content( $slug )
    {
        try{
            $data = Content::where( 'slug', '=', $slug )->firstOrFail();
            return view( 'content.content', $data );
        }
        catch( Exception $e) {
            abort(404);
        }

    }

    public function edit($id)
    {
        $data['content'] = Content::find( $id );
        return view( 'content.edit', $data );
    }

    public function update(Request $request, $id)
    {
		$input = \Input::except( array( 'submit', '_token', '_method', 'image' ));
        $record = Content::find( $id );
		foreach ( $input AS $key => $value ) {
			$record[$key] = $value;
		}

    $file=$request->file('image');
    if (isset($file)){
    $imageName='contents-'.$id.'.'.$request->file('image')->getClientOriginalExtension();
    $destinationPath = base_path() . '/public/data/contents/img';
    $request->file('image')->move($destinationPath, $imageName);

    $record['image']=$imageName;
    }
        $record->save();
        return view( 'content.show', $record );
    }

    public function destroy($id)
    {
        $data= Content::find($id);
        $data->delete();
        $this->index();
    }
}
