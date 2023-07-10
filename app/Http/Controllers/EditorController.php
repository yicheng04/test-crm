<?php

namespace App\Http\Controllers;

class EditorController extends BaseController {
	
    public function getPage( $menu, $filename ) {
		$data['filename'] = $filename;
		$data['menu']= $menu;
		return View::make( 'editor.templates.' . $menu, $data );		
	}
	
	public function getIndex() {
		$data['files'] = scandir( app_path() . '/views/editor/files' );
		return View::make( 'editor.index', $data );
	}

	public function getSearch() {
		
		$dir = app_path() . '/views/editor/files';
		$data['files'] = File::files( $dir );
		$data['files'] = str_replace('/home/cgproto/public_html/audi/app/views/editor/files/','',$data['files']);
		$data['files'] = str_replace('.php','',$data['files']);
		$data['files'] = str_replace('_','',$data['files']);

		if( !Input::get('filter') ){
			$data['filter'] = '';
		}else{
			$data['filter'] = Input::get('filter');
			foreach($data['files'] as $file){
				$thefilename = explode('-', $file);				
				if($data['filter'] == $thefilename[0]){
					$data['files'] = $file;
				}
			}
		}		
		
		return View::make( 'editor.search', $data );
	}
	
	public function getView( $filename ) {
		$data['filename'] = $filename;
		$data['body']= Editor::get( $filename );
		return View::make( 'editor.view', $data );		
	}

	public function postEdit() {
		Editor::put( Input::get( 'filename' ), Input::get( 'body' ));
		return Redirect::action( 'EditorController@getView', Input::get( 'filename' ));		
	}
	
	public function getEdit( $filename ) {
		$data['filename'] = $filename;
		$data['body'] = Editor::get( $filename );
		return View::make( 'editor.edit', $data );		
	}
	
	public function postCopy() {
		Editor::put( Input::get( 'newfilename' ), Input::get( 'body' ));
		return Redirect::action( 'EditorController@getView', Input::get( 'newfilename' ));		
	}
	
	public function getCopy( $filename ) {
		$data['filename'] = $filename;
		$data['body'] = Editor::get( $filename );
		return View::make( 'editor.copy', $data );		
	}

}
