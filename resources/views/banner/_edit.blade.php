{!! Form::label( 'title', 'Title') !!}
{!! Form::text( 'title' ) !!}

{!! Form::label( 'background_image', 'Background Image') !!}
@if( !empty($banner->background_image) )
	<p>Current: <img style="width: 100px;" src="/img/banners/{{ $banner->background_image }}"></p>
	<p>{!! Form::checkbox( 'remove_background' ) !!} Remove </p>
@endif
{!! Form::file( 'background_image' ) !!}
<br />

{!! Form::label( 'overlay_image', 'Overlay Image') !!}
@if( !empty($banner->overlay_image) )
	<p>Current: <img style="width: 100px;" src="/img/banners/{{ $banner->overlay_image }}"></p>
	<p>{!! Form::checkbox( 'remove_overlay' ) !!} Remove </p>
@endif
{!! Form::file( 'overlay_image' ) !!}
<br />

{!! Form::label( 'overlay_text', 'Overlay Text') !!}
{!! Form::text( 'overlay_text' ) !!}

{!! Form::label( 'status_id', 'Status') !!}
{!! Form::select( 'status_id', \App\Status::lists('title', 'id') ) !!}

{!! Form::submit( 'Submit', array('class'=>'btn btn-large btn-primary btn-block' )) !!}