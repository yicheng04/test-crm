<?php $page['title'] = 'Products'; ?>
<?php $page['css'] = 'product-index'; ?>

@extends( 'templates.default' )
@section( 'content' )

<div class='products'>
    @foreach ( $products AS $product )
        <div class="product">
            <div class="product-title"><a href="/products/{{ $product->id }}">{{ $product->title }}</a></div>
            <div class="product-price">{{ $product->price }}</div>
            <div class="product-description">{{ $product->body }}</div>
        </div>
    @endforeach
</div>

@stop
