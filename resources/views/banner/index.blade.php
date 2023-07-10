<?php 
    $page['title'] = 'Manage Hero Slider';
    $page['sideblocks'] = [ 'dashboard._sidebar' ];
    $page['css'] = 'dashboard';
?>

@extends( 'templates.default' )
@section( 'content' )

<div class="action-buttons">
    <a class="button small" href={{ route('banner.create') }}><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Create Banner</a>
</div>
<br />

@include('errors._list')
@if( Session::has( 'message' ))
    <div class="message">{{ Session::get( 'message' ) }}</div>
@endif

@if( !empty($banners) && count($banners) )



<table class="banners">
    <tr>
        <th>Title</th>
        <th>Background</th>
        <th>Overlay Img</th>
        <th>Overlay Text</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    @foreach( $banners as $banner )
        <tr>
            <td>{{ $banner->title }} </td>
            <td>
            @if( !empty($banner->background_image) )
                <img style="width: 100px;" src="/img/banners/{{ $banner->background_image }}">
            @else
                <span>None</span>
            @endif
            </td>
            <td>
            @if( !empty($banner->overlay_image) )
                <img style="width: 100px;" src="/img/banners/{{ $banner->overlay_image }}">
            @else
                <span>None</span>
            @endif
            </td>
            <td>{{ $banner->overlay_text }} </td>
            <td>{{ $banner->status->title }} </td>
            <td>
                <a href={{ route('banner.edit', $banner->id) }}>Edit</a>
            </td>
        </tr>
    @endforeach
</table>

<h4>Preview</h4>

<div class="flexslider">
    <ul class="slides">
        @foreach ( $banners AS $banner )
            @if( $banner->status->title == 'Active')
                <li>
                    <span class="bg-img"><img src="img/banners/{{ $banner->background_image }}" /></span>
                    <span class="testimonial">{{ $banner->overlay_text }}</span>
                    @if( !empty($banner->overlay_image) )
                        <span class="driver-img"><img src="/img/banners/{{ $banner->overlay_image }}"></span>
                    @endif
                    
                    <!--<p>
                        <a href={{ route('banner.edit', $banner->id) }}>Edit</a>
                    </p>-->
                </li>
            @endif
        @endforeach
    </ul>
</div>



@else

<p>There Hero Slider does not have any banners.</p>

@endif

@stop