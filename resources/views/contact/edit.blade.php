<?php $page['title'] = 'Contact - Edit'; ?>
<?php $page['css'] = 'contact-edit'; ?>

@extends( 'templates.default' )
@section( 'content' )

{!! Form::model( $contact, [ 'method' => 'PATCH', 'route' => [ 'contacts.update', $contact->id ]]) !!}

    @include( 'contact._edit' )
    
{!! Form::close() !!}

@stop
