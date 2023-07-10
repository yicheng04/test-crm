<?php

namespace App\Http\Controllers;

class StaticController extends BaseController {
	
	public function getPage( $item='' ) {
		$data['content'] = $item;
		$page['title'] = ucwords( str_replace( '-', ' ', $item ));
		$page['breadcrumb'] = '<a href="/">home</a> ' . ' >  ' . $item;
		$page['css'] = $item;
		$page['js'] = $item;
		$data['page'] = $page;
		return \View::make( 'static._' . $item, $data );
	}

}
