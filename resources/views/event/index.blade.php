<?php 
    $page['title'] = 'Events';
    $page['sideblocks'] = [ 'dashboard._sidebar' ];
    $page['css'] = 'dashboard';
?>

@extends( 'templates.default' )
@section( 'content' )

<p><a class='button small' href='/events/create'>Create New Event</a></p>

<div class='articles'>
    <table>
        <tr>
            <th>Created</th>
            <th>Title</th>
        </tr>
        @foreach ( $events AS $event )
            <tr>
                <td class="day"><a href="/events/{{ $event->id }}">{{ $event->created_at }}</a></td>
                <td class="title"><a href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
            </tr>
        @endforeach
    </table>
</div>

@stop
