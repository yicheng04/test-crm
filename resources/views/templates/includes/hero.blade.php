@if ( isset($page['banner']) && count($page['banner']) )
	<div class="flexslider">
	    <ul class="slides">
	        @foreach ( $page['banner'] AS $banner )
	          <li>
	              <span class="bg-img"><img src="img/banners/{{ $banner->background_image }}" /></span>
	              <span class="testimonial">{{ $banner->overlay_text }}</span>
	              @if( !empty($banner->overlay_image) )
	                <span class="driver-img"><img src="/img/banners/{{ $banner->overlay_image }}"></span>
	              @endif
	          </li>
	        @endforeach
	    </ul>
	</div>
@else
	<div class="driver-testimonial">
	  <div class="testimonial">Sleepless Software Solves Your Needs</div>
	  <div class="driver-img"><img src="/img/testimonial-driver1.png" /></div>
	</div>
@endif
