{!! Form::label( 'title', 'Title' ) !!}
{!! Form::text( 'title' ) !!}

{!! Form::label( 'body', 'Description' ) !!}
{!! Form::textarea( 'body' ) !!}

<br>

{!! Form::label( 'start_date', 'Event Start' ) !!}
{!! Form::text('start_date', null, array('id' => 'datepicker_start', 'placeholder' => 'yyyy-mm-dd')) !!}

{!! Form::label( 'end_date', 'Event End' ) !!}
{!! Form::text('end_date', null,  array('id' => 'datepicker_end', 'placeholder' => 'yyyy-mm-dd')) !!}

{!! Form::submit( 'Submit', array('class'=>'btn btn-large btn-primary btn-block' )) !!}