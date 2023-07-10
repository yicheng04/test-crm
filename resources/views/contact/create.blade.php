<?php $page['title'] = 'Contact Admin'; ?>
<?php $page['css'] = 'contact-create'; ?>
<?php $page['js'] = 'contact'; ?>

@extends( 'templates.default' )
@section( 'content' )

{!! Form::model( new App\Contact, ['route' => [ 'contacts.store' ], 'class'=>'' ]) !!}

    @include( 'contact._edit' )
    
{!! Form::close() !!}

@stop