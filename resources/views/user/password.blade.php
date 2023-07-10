<?php $page['title'] = 'Password Reset'; ?>
<?php $page['css'] = 'user-login'; ?>

@extends( 'templates.default' )
@section ( 'content' )

{{ Form::open(array('url'=>'/user/password', 'class'=>'form-signin')) }}

	{{ Form::text('email', null, array('class'=>'input-block-level', 'placeholder'=>'Email Address')) }}
	
{{ Form::close() }}

<div class="form-actions-block">
  <p><a class="btn" href="/user/password">Submit</a><br />
</div>
@stop 