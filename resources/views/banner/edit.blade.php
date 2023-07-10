<?php 
    $page['title'] = 'Banner - Edit';
    $page['css'] = 'dashboard';
?>

@extends( 'templates.default' )
@section( 'content' )

{{-- Errors and Messages --}}
@include( 'errors._list' )
@if( Session::has( 'message' ))
    <div class="message">{{ Session::get( 'message' ) }}</div>
@endif

{!! Form::model( $banner, [ 'method' => 'PATCH', 'route' => [ 'banner.update', $banner->id ], 'files' => true]) !!}

    @include( 'banner._edit' )
    
{!! Form::close() !!}

@stop