<?php

namespace App\Http\Controllers;

class UploadController extends BaseController {
	
	public function getIndex() {
		$data['files'] = scandir( public_path() . '/files' );
		return View::make( 'upload.index', $data );
	}
	
	public function postUpload() {
		Input::file('file')->move( public_path() . '/files/', Input::file('file')->getClientOriginalName() );
		return Redirect::action( 'UploadController@getIndex' );		
	}
	
	public function getUpload() {
		return View::make( 'upload.upload' );		
	}

}
