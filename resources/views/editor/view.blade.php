<?php
    $page['title'] = 'Editor View : ' . $filename;
    $page['breadcrumb'] = 'home > editor > view';  
    $page['sideblocks'] = array( 'editor._block_view' ); 
    $page['css'] = 'editor-view';
?>

@extends( 'templates.default' )

@section( 'content' )

	{{ $body }}
	        
@stop
