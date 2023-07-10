<?php $page['title'] = 'Product - Edit'; ?>
<?php $page['css'] = 'product-edit'; ?>

@extends( 'templates.default' )
@section( 'content' )

{!! Form::model( $product, [ 'method' => 'PATCH', 'route' => [ 'products.update', $product->id ]]) !!}

    @include( 'product._edit' )
    
{!! Form::close() !!}

@stop
