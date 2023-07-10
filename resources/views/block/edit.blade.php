<?php 
    $page['title'] = 'Block - Edit';
    $page['sideblocks'] = [ 'dashboard._sidebar' ];
    $page['css'] = 'dashboard';
?>

@extends( 'templates.default' )
@section( 'content' )

{{-- Errors and Messages --}}
@include( 'errors._list' )
@if( Session::has( 'message' ))
    <div class="message">{{ Session::get( 'message' ) }}</div>
@endif

{!! Form::model( $block, [ 'method' => 'PATCH', 'route' => [ 'blocks.update', $block ] ]) !!}

    @include( 'block._edit' )
    
{!! Form::close() !!}

@stop