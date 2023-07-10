<?php
    $page['title'] = 'Article - Create';
    $page['sideblocks'] = [ 'dashboard._sidebar' ];
    $page['css'] = 'dashboard';
?>

@extends( 'templates.default' )
@section( 'content' )

{!! Form::model( new App\Article, ['route' => [ 'articles.store' ], 'class'=>'', 'files' => true ]) !!}

    @include( 'article._edit' )

{!! Form::close() !!}

<script type="text/javascript" src="/js/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('body', {
            filebrowserBrowseUrl: '/ckfinder/ckfinder.html?type=Files',
	    filebrowserImageBrowseUrl: '/ckfinder/ckfinder.html?type=Files',
});
</script>

@stop
