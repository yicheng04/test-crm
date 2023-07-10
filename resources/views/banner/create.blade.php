<?php 
    $page['title'] = 'Banner - Create';
    $page['css'] = 'dashboard';
?>

@extends( 'templates.default' )
@section( 'content' )

{{-- Errors and Messages --}}
@include( 'errors._list' )
@if( Session::has( 'message' ))
    <div class="message">{{ Session::get( 'message' ) }}</div>
@endif

{!! Form::model( new App\Banner, ['route' => [ 'banner.store' ], 'class'=>'', 'files' => true ]) !!}

    @include( 'banner._edit' )
    
{!! Form::close() !!}

@stop