<?php $page['title'] = $title; ?>
<?php $page['css'] = 'product-show'; ?>

@extends( 'templates.default' )
@section( 'content' )

<div class="product">
    @if ( isset( $image ) && strlen( $image ) > 0 )
        <div class="product-image"><img src="/data/products/img/{{ $image }}"></div>
    @endif
    <div class="product-title">Price: {{ $price }}</div>
    <p class='product-body'>Description: {!! $body !!}</p>
</div>

@if ( Auth::check() && Auth::user()->role == 'admin' )
    <p><a href='/products/{{ $id }}/edit'>edit</a></p>
@endif

@stop