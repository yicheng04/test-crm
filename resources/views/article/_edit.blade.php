{!! Form::label( 'title', 'Title' ) !!}
{!! Form::text( 'title' ) !!}

{!! Form::label( 'body', 'Description' ) !!}
{!! Form::textarea( 'body' ) !!}

{!! Form::label( 'image', 'Image' ) !!}
{{-- {!! Form::text( 'image' ) !!} --}}
{!! Form::file('image', null) !!}

{!! Form::label( 'type', 'Article Type' ) !!}
{!! Form::select('type', $types) !!}

{!! Form::submit( 'Submit', array('class'=>'btn btn-large btn-primary btn-block' )) !!}
