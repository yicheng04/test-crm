<?php $page = array(
    'title' => 'Editor - Search',
    'breadcrumb' => 'home > editor > index',
    'sideblocks' => array( 'editor._block_index' ),
    'css' => 'editor-index',
);
	
?>

@extends( 'templates.default' )
@section( 'content' )

	{{ Form::open( array( 'url' => 'editor/search' )) }}
	
		{{ Form::label( 'search', 'Search' ) }}
		{{ Form::text( 'search', '', array('id' => 'search')); }}
		
		{{ Form::submit('Submit') }}

	{{ Form::close() }}	
	
	<p>Filtered by: {{ $filter }}</p>

	<table>
		@foreach ( $files AS $file )
			<tr>
				<td><a href="/editor/view/{{ str_replace( '.php', '', str_replace( '_', '', $file )) }}">{{ $file }}</a></td>
				<td><a href="/editor/view/{{ str_replace( '.php', '', str_replace( '_', '', $file )) }}">view</a></td>
				<td><a href="/editor/edit/{{ str_replace( '.php', '', str_replace( '_', '', $file )) }}">edit</a></td>
			</tr>
		@endforeach
	</table>
@stop
