<?php
    $pos = strpos( $filename, '-' );
	if ( $pos && substr( $filename, 0, $pos ) == $menu ) {
	    $page['title'] = ucwords( str_replace( '-', ' ', substr( $filename, $pos+1 )));
	} else {
	    $page['title'] = ucwords( str_replace( '-', ' ', $filename ));
	}
	if ( $menu == $filename ) {
	    $page['breadcrumb'] = '<a href="/">home</a> &gt; ' . $filename;
	} else {
	    $page['breadcrumb'] = '<a href="/">home</a> &gt; ' . $menu . ' > ' . $filename;	    
	}
	if ( $menu == $filename ) {
	} elseif ( file_exists( app_path() . '/views/editor/templates/_block_' . $menu . '.blade.php' )) {
	    $page['sideblocks'] = array( 'editor.templates._block_' . $menu );
	} else {
	    $page['sideblocks'] = array( 'editor.templates._block_default' );	    
	}
	if ( file_exists( public_path() . '/img/banners/banner-'. $menu . '.jpg' )) {
	    $page['banner'] = 'banner-' . $menu . '.jpg';	    
	} else {
	    $page['banner'] = 'banner-default.jpg';
	}
	$page['css'] = $filename;
	$page['js'] = $filename;
?>

@extends( 'templates.default' )

@section( 'content' )

    @include( 'editor.files._' . $filename )
    
    @if ( Auth::check() && Auth::user()->role == 'admin' )
        <p><a style='color:blue' href='/editor/edit/{{ $filename }}'>edit</a></p>
    @endif 

@stop

