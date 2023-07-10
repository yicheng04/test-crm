<?php 	
	$page['title'] = 'Contact Requests';
	$page['css'] = 'dashboard'; 
	$page['sideblocks'] = [ 'dashboard._sidebar' ];
?>

@extends( 'templates.default' )
@section( 'content' )

@if(!empty($contacts) && count($contacts) > 0)
	<table class="contacts">
	    <tr>
	        <th>Contact Reason</th>
	        <th>Name</th>
	        <th>Created</th>
	        <th></th>
	    </tr>
	@foreach($contacts as $contact)
		<tr>
	        <td>{{ $contact->contact_reason->reason }} </td>
	        <td>{{ $contact->name }} </td>
	        <td>{{ $contact->created_at }} </td>
	        <td><a href="{{ action("ContactController@show", $contact->id) }}">View</a></td>
	    </tr>
	@endforeach
	</table>
@else
	<p>No contact requests to show</p>
@endif

@stop
