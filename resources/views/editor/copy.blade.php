<?php $page['title'] = 'Editor - Copy'; ?>
<?php $page['breadcrumb'] = '<a href="/">home</a> &gt; editor &gt; copy'; ?>
<?php $page['css'] = 'editor-copy'; ?>
<?php $page['js'] = 'editor-copy'; ?>

@extends( 'templates.default' )
@section( 'content' )
   
{{ Form::open( array( 'url' => 'editor/copy' )) }}

	{{ Form::hidden( 'filename', $filename ) }}
    
    {{ Form::label( 'newfilename', 'New File Name' ) }}
    {{ Form::text( 'newfilename', $filename . '-copy' ) }}
	
    {{ Form::label( 'body', 'Body' ) }}
    {{ Form::textarea( 'body', $body, array(
		'id'      => 'body',
		'rows'    => 30,
	)); }}
    
    {{ Form::submit('Submit') }}

{{ Form::close() }}

@stop
