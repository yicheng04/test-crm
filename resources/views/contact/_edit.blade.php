{!! Form::label( 'name', 'Your name' ) !!}
{!! Form::text( 'name' ) !!}

{!! Form::label( 'email', 'Email' ) !!}
{!! Form::text( 'email' ) !!}

{!! Form::label( 'phone', 'Phone Number' ) !!}
{!! Form::text( 'phone' ) !!}

{!! Form::Label('reason', 'Reason for Contacting') !!}
{!! Form::select('reason', $contact_reasons, isset($contact->contact_reason->name)) !!}

{!! Form::label( 'comments', 'Comments' ) !!}
{!! Form::textarea( 'comments' ) !!}

<p><span style="color: red;">{!! $errors->first('captcha') !!}</span></p>
{!! Form::label( 'captcha', 'Verify the letters in the image below' ) !!}
{!! Captcha::img() !!}
<br />
{!! Form::text( 'captcha' ) !!}

{!! Form::submit( 'Submit', array('class'=>'btn btn-large btn-primary btn-block' )) !!}
