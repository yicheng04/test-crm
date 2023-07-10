<?php 
    $page['title'] = 'Manage Blocks';
    $page['sideblocks'] = [ 'dashboard._sidebar' ];
    $page['css'] = 'dashboard';
?>

@extends( 'templates.default' )
@section( 'content' )

@include('errors._list')
@if( Session::has( 'message' ))
    <div class="message">{{ Session::get( 'message' ) }}</div>
@endif

@if( !empty($blocks) && count($blocks) )

<table class="blocks">
    <tr>
        <th>Title</th>
        <th>Block Type</th>
        <th>Path</th>
        <th>Body Text</th>
        <th>Button Text</th>
        <th>Action</th>
    </tr>
    @foreach( $blocks as $block )
        <tr>
            <td>{{ $block->title}}</td>
            <td>{{ $block->type->title}}</td>
            <td><a href={{ url($block->path) }}>{{ $block->path}}</a></td>
            <td>{{ $block->text}}</td>
            <td>{{ $block->type->title == 'Main' ? 'N/A' : $block->button_text }}</td>
            <td>
                <a href={{ route('blocks.edit', $block) }}>Edit</a>
            </td>
        </tr>
    @endforeach
</table>

@else

<p>There are no blocks.</p>

@endif

@stop