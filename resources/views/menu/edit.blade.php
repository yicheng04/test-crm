<?php 
    $page['title'] = 'Menu - Edit';
    $page['sideblocks'] = [ 'dashboard._sidebar' ];
    $page['css'] = 'dashboard'; 
?>

@extends( 'templates.default' )
@section( 'content' )

{!! Form::model( $menu, [ 'method' => 'PATCH', 'route' => [ 'menus.update', $menu->id ]]) !!}

    @include( 'menu._edit' )
    
{!! Form::close() !!}

@stop
