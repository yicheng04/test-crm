<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use \App\Event;

class EventController extends Controller
{
    public function index()
    {
        $data['events'] = Event::all();
        return view( 'event.index', $data );
    }

    public function create()
    {
        return view( 'event.create' );
    }

    public function store(Request $request)
    {
        $input = \Input::except(['image']);
        $data = Event::create( $input );
        $data->save();
        return view( 'event.show', $data );
    }

    public function show($id)
    {
        $data = Event::find( $id );
        return view( 'event.show', $data );
    }

    public function edit($id)
    {
        $data['event'] = Event::find( $id );
        return view( 'event.edit', $data );
    }

    public function update(Request $request, $id)
    {
		$input = \Input::except( array( 'submit', '_token', '_method', 'image' ));
        $record = Event::find( $id );
		foreach ( $input AS $key => $value ) {
			$record[$key] = $value;
		}
        $record->save();
        return view( 'event.show', $record );
    }

    public function destroy($id)
    {
      $data= Article::find($id);
      $data->delete();
      $this->index();
    }
}
