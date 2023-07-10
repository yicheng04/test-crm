<?php $page['title'] = 'Product - Create'; ?>
<?php $page['css'] = 'product-create'; ?>

@extends( 'templates.default' )
@section( 'content' )

{!! Form::model( new App\Product, ['route' => [ 'products.store' ], 'class'=>'' ]) !!}

    @include( 'product._edit' )
    
{!! Form::close() !!}

@stop