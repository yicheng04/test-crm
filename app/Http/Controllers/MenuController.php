<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use \App\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $data['menus'] = Menu::all();
        return view( 'menu.index', $data );
    }

    public function create()
    {
        return view( 'menu.create' );
    }

    public function store(Request $request)
    {
        $input = \Input::all();
	    $data = Menu::create( $input );
        return view( 'menu.show', $data );
    }

    public function show($id)
    {
        $data = Menu::find( $id );
        return view( 'menu.show', $data );
    }

    public function edit($id)
    {
        $data['menu'] = Menu::find( $id );
        return view( 'menu.edit', $data );
    }

    public function update(Request $request, $id)
    {
		$input = \Input::except( array( 'submit', '_token', '_method' ));
        $record = Menu::find( $id );
		foreach ( $input AS $key => $value ) {
			$record[$key] = $value;
		}
        $record->save();
        return view( 'menu.show', $record );  
    }

    public function destroy($id)
    {
        //
    }
}
