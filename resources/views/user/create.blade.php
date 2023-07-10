<?php $page['title'] = 'Create Your Account'; ?>
<?php $page['sideblocks'] = array(
	'user._block_edit_actions',
); ?>
<?php $page['css'] = 'dashboard'; ?>

@extends( 'templates.default' )
@section ( 'content' )

<p><a class='button small' href="/users">Return to User List</a></p>

{!! Form::open(array('url'=>'/user/create', 'class'=>'form-signup')) !!}

	<ul>
		@foreach($errors->all() as $error)
			<li>{!! $error !!}</li>
		@endforeach
	</ul>

	{!! Form::label('first_name', 'First Name') !!}
	{!! Form::text('first_name', null, array('class'=>'input-block-level', 'placeholder'=>'First Name')) !!}

	{!! Form::label('last_name', 'Last Name') !!}
	{!! Form::text('last_name', null, array('class'=>'input-block-level', 'placeholder'=>'Last Name')) !!}

	{!! Form::label('email', 'Email') !!}
	{!! Form::text('email', null, array('class'=>'input-block-level', 'placeholder'=>'Email Address')) !!}

	{!! Form::label('password', 'Password') !!}
	{!! Form::password('password', array('class'=>'input-block-level', 'placeholder'=>'Password')) !!}

	{!! Form::label('password_confirmation', 'Confirm Password') !!}
	{!! Form::password('password_confirmation', array('class'=>'input-block-level', 'placeholder'=>'Confirm Password')) !!}

        {!! Form::hidden('role', 'user') !!}
	{!! Form::submit('Register', array('class'=>'btn btn-large btn-primary btn-block'))!!}

{!! Form::close() !!}


@stop
