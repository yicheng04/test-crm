<?php
    $page['title'] = 'Event - ' . $title;
    $page['sideblocks'] = [ 'dashboard._sidebar' ];
    $page['css'] = 'dashboard';
?>

@extends( 'templates.default' )
@section( 'content' )

<div class="article">
    <p class='article-body'>{!! $body !!}</p>
    <p>Event start: {!! $start_date !!}</p>
    <p>Event end: {!! $end_date !!}</p>
</div>

@if ( Auth::check() && Auth::user()->role == 'admin' )
    <p><a href='/events/{{ $id }}/edit'>edit</a></p>
@endif

@stop