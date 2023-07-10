  <?php $page = array( 
    'title' => 'Editor Edit : ' . $filename,
    'breadcrumb' => '<a href="/">home</a> &gt; editor &gt; edit',
    'sideblocks' => array( 'editor._block_view' ),
    'css' => 'editor-edit',
    'js' => 'editor-edit',
); 
?>

@extends( 'templates.default' )
@section( 'content' )
   
   
{{ HTML::script('js/ckeditor/ckeditor.js') }}
   
{{ Form::open( array( 'url' => 'editor/edit' )) }}

	{{ Form::hidden( 'filename', $filename ) }}
    
    {{ Form::label( 'body', 'Body' ) }}
    {{ Form::textarea( 'body', $body, array(
		'id'      => 'body',
		'rows'    => 30,
	)); }}
    
    {{ Form::submit('Submit') }}

{{ Form::close() }}

<script>CKEDITOR.replace('body', {
	filebrowserBrowseUrl: '/ckfinder/ckfinder.html?type=Files'
    filebrowserImageBrowseUrl: '/ckfinder/ckfinder.html?type=File'
});</script>

@stop
