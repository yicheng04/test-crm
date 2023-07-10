<?php $page['title'] = 'Login'; ?>
<?php $page['css'] = 'user-login'; ?>

@extends( 'templates.default' )
@section ( 'content' )

@include('errors._list')

{!! Form::open(array('url'=>'/user/login', 'class'=>'form-signin')) !!}

	{!! Form::text('email', null, array('class'=>'input-block-level', 'placeholder'=>'Email Address')) !!}
	{!! Form::password('password', array('class'=>'input-block-level', 'placeholder'=>'Password')) !!}

	{!! Form::submit('Login', array('class'=>'btn btn-large btn-primary btn-block'))!!}

{!! Form::close() !!}

<div id='login-actions'><a class='button' href='/password/email'>Reset Password</a></div>

@stop
