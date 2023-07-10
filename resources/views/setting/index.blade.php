<?php 
    $page['title'] = 'Settings';
    $page['sideblocks'] = array( 'setting._block_index_sidebar');
    $page['css'] = 'dashboard';
?>

@extends( 'templates.default' )
@section( 'content' )

<p><a class='button small' href='/settings/create'>Create New Setting</a></p>
<div class='settings'>
    @foreach ( $settings AS $setting )
        <div class="setting">
            <div class="setting-title"><a href="/settings/{{ $setting->id }}">{{ $setting->title }}</a></div>
            <div class="setting-description">{{ $setting->body }}</div>
        </div>
    @endforeach
</div>

@stop
