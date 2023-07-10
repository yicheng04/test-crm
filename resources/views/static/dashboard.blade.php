<?php 
  $page['sideblocks'] = array( 'static._block-dashboard' );
?>

@extends( 'templates.default' )
@section( 'content' )
	@if ( file_exists( app_path() . '/views/static/_' . $content . '.blade.php' ))
		@include( 'static._' . $content )
	@else
		@include( 'static._default' )
	@endif
@stop

