<?php $page['title'] = $title; ?>
<?php $page['css'] = 'contents'; ?>

@extends( 'templates.default' )
@section( 'content' )

<div class="content">
    @if ( isset( $image ) && strlen( $image ) > 0 )
        <div class="content-image"><img src="/data/contents/img/{{ $image }}"></div>
    @endif
    <p class='content-body'>{!! $body !!}</p>
</div>

@if ( Auth::check() && Auth::user()->role = 'admin' )
    <p><a href='/contents/{{ $id }}/edit'>edit</a></p>
@endif

@stop