<?php 
    $page['title'] = 'Pages';
    $page['sideblocks'] = [ 'dashboard._sidebar' ];
    $page['css'] = 'dashboard'; 
?>

@extends( 'templates.default' )
@section( 'content' )

<p><a class='button small' href='contents/create'>Create New Page</a></p>

<div class='contents'>
    <table>
        <tr>
            <th>Title</th>
            <th>Slug</th>
        </tr>
        @foreach ( $contents AS $content )
            <tr>
                <td class="title"><a href="/contents/{{ $content->id }}">{{ $content->title }}</a></td>
                <td class="slug"><a href="/contents/{{ $content->id }}">{{ $content->slug }}</a></td>
            </tr>
        @endforeach
    </table>
</div>

@stop
