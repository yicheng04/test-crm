<?php 
	$page['title'] = 'Password Reset';
	$page['css'] = 'user-login'; 
?>

@extends( 'templates.default' )
@section ( 'content' )

@include('errors._list')
@if (session('status'))
   <p class="alert alert-success">{{ session('status') }}</p>
@endif

{!! Form::open(array('url'=>'/password/email', 'class'=>'form-signin')) !!}
	{!! Form::text('email', null, array('class'=>'input-block-level', 'placeholder'=>'Email Address')) !!}
	{!! Form::submit('Submit', array('class'=>'btn btn-large btn-primary btn-block'))!!}
{!! Form::close() !!}

@stop 