<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use \App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $data['products'] = Product::all();
        return view( 'product.index', $data );
    }

    public function create()
    {
        return view( 'product.create' );
    }

    public function store(Request $request)
    {
        $input = \Input::all();
	    $data = Product::create( $input );
        return view( 'product.show', $data );
    }

    public function show($id)
    {
        $data = Product::find( $id );
        return view( 'product.show', $data );
    }

    public function edit($id)
    {
        $data['product'] = Product::find( $id );
        return view( 'product.edit', $data );
    }

    public function update(Request $request, $id)
    {
		$input = \Input::except( array( 'submit', '_token', '_method' ));
        $record = Product::find( $id );
		foreach ( $input AS $key => $value ) {
			$record[$key] = $value;
		}
        $record->save();
        return view( 'product.show', $record );  
    }

    public function destroy($id)
    {
        //
    }
}
