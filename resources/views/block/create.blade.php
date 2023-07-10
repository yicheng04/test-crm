<?php 
    $page['title'] = 'Block - Create';
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

{!! Form::model( new App\Block, ['route' => [ 'blocks.store' ], 'class'=>'']) !!}

    @include( 'block._edit' )
    
{!! Form::close() !!}

@stop