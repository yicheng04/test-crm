<?php 
	$page['title'] = 'Set new password';
	$page['css'] = 'user-login'; 
?>

@extends( 'templates.default' )
@section ( 'content' )

@include('errors._list')

{!! Form::open(array('url'=>'/password/reset', 'class'=>'form-signin')) !!}
	{{ csrf_field() }}
	{!! Form::hidden('token', $token) !!}

	{!! Form::label('email', 'Email') !!}
	{!! Form::text('email', null, array('class'=>'input-block-level', 'placeholder'=>'Email Address')) !!}

	{!! Form::label('password', 'Password') !!}
	{!! Form::password('password', array('class'=>'input-block-level', 'placeholder'=>'Password')) !!}

	{!! Form::label('password_confirmation', 'Confirm Password') !!}
	{!! Form::password('password_confirmation', array('class'=>'input-block-level', 'placeholder'=>'Confirm Password')) !!}

	{!! Form::submit('Reset Password', array('class'=>'btn btn-large btn-primary btn-block'))!!}
{!! Form::close() !!}

@stop 