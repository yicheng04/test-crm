<?php 
    $page['title'] = 'Menus';
    $page['sideblocks'] = [ 'dashboard._sidebar' ];
    $page['css'] = 'dashboard';
?>

@extends( 'templates.default' )
@section( 'content' )

<div class='menus'>
    <table>
        <tr>
            <th>Title</th>
            <th>Slug</th>
        </tr>
        @foreach ( $menus AS $menu )
            <tr>
                <td class="title"><a href="/menus/{{ $menu->id }}">{{ $menu->title }}</a></td>
                <td class="slug"><a href="/menus/{{ $menu->id }}">{{ $menu->slug }}</a></td>
            </tr>
        @endforeach
    </table>
</div>

@stop
