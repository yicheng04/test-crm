<?php $page['title'] = 'Setting - ' . $title; ?>
<?php $page['css'] = 'dashboard'; ?>

@extends( 'templates.default' )
@section( 'content' )

<div class="setting">
    <p class='body'>Slug: {!! $slug !!}</p>
    <p class='body'>Description: {!! $body !!}</p>
</div>

@if ( Auth::check() && Auth::user()->role == 'admin' )
    <p><a href='/settings/{{ $id }}/edit'>edit</a></p>
@endif

@stop