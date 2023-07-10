<?php $page['title'] = 'Contact - ' . $contact->name; ?>
<?php $page['css'] = 'contact-show'; ?>

@extends( 'templates.default' )
@section( 'content' )

<div class="contact">
    <p class="contact-title">Name: {{ $contact->name }}</p>
    <p class='contact-body'>Reason: {!! $contact->contact_reason->reason !!}</p>
    <p class='contact-body'>Email: {!! $contact->email !!}</p>
    <p class='contact-body'>Phone: {!! $contact->phone !!}</p>
    <p class='contact-body'>Comments:: {!! $contact->comments !!}</p>
</div>

@if ( Auth::check() && Auth::user()->role == 'admin' )
    <p><a href='/contacts/{{ $contact->id }}/edit'>edit</a></p>
@endif

@stop