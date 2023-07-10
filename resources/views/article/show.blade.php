<?php
    $page['title'] = 'Article - ' . $title;
    $page['css'] = 'dashboard';
?>

@extends( 'templates.default' )
@section( 'content' )

<div class="article">
    @if ( isset( $image ) && strlen( $image ) > 0 )
        <div class="article-image"><img alt="" src="/data/articles/img/{{ $image }}"></div>
    @endif
    <p class='article-body'>{!! $body !!}</p>
</div>

@if ( Auth::check() && Auth::user()->role == 'admin' )
    <p><a href='/articles/{{ $id }}/edit'>edit</a></p>

    {!! Form::open(['route' => ['articles.destroy', $id], 'method' => 'delete']) !!}
		<button type="submit" style="background-color: red;">Delete</button>
	{!! Form::close() !!}
@endif

@stop