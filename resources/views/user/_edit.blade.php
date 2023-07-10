{!! Form::label('first_name', 'First' ) !!}
{!! Form::text( 'first_name' ) !!}

{!! Form::label('last_name', 'Last Name' ) !!}
{!! Form::text( 'last_name' ) !!}

{!! Form::label('email', 'Email' ) !!}
{!! Form::text( 'email' ) !!}

{!! Form::label('role', 'Role') !!}
{!! Form::select('role', array('admin' => 'admin', 'user' => 'user'), $user->role) !!}

{!! Form::submit('Submit') !!}
