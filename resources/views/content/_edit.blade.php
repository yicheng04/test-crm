{!! Form::label( 'title', 'Title' ) !!}
{!! Form::text( 'title' ) !!}

{!! Form::label( 'slug', 'Slug' ) !!}
{!! Form::text( 'slug' ) !!}

{!! Form::label( 'body', 'Body' ) !!}
{!! Form::textarea( 'body' ) !!}

{!! Form::label( 'image', 'Image' ) !!}
{{-- {!! Form::text( 'image' ) !!} --}}
{!! Form::file('image', null) !!}


{!! Form::submit( 'Submit', array('class'=>'btn btn-large btn-primary btn-block' )) !!}
