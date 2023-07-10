<html>
<head>
	@include( 'templates.includes.schedulehead' )
	<script src="//use.typekit.net/bod4wdj.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
</head>
	
<body>

<div id="page" class="page-<?php echo ( isset($module) > 0 ? $module : 'home' ); ?>">

<div id="utility" class="clearfix">
  <div id="utility-inner" class="wrap">
    @include( "templates.includes.utility" )
  </div>
</div>
	
<header id="header" class="clearfix">
	<div id="header-inner" class="wrap">
		@include( "templates.includes.header" )
		<nav id="navigation" class="clearfix">
      <div id="navigation-inner" class="wrap">
        @include( "templates.includes.menu" )
    	</div>
    </nav>
	</div>
</header>



@if ( isset( $files ))
	<div id="banner">
		<div id="banner-inner">
			<div class="owl-carousel">
			@foreach ( $files AS $file )
				<div class="slide-image"><img src="{{$file}}" /></div>
			@endforeach
		</div>
		</div>
	</div>
@endif

@if ( isset( $page['infoblocks'] ))
	<div class="infoblocks clearfix">
		<div class="infoblocks-inner wrap">
			@foreach ( $page['infoblocks'] AS $infoblock )
				@include( $infoblock )
			@endforeach
		</div>
	</div>
@endif
			
<div id="main" class="clearfix">
	<div id="main-inner" class="wrap">
		@if ( isset( $page['sideblocks'] ))
			<div id="sidebar">
				<div id="sidebar-inner">
					@foreach ( $page['sideblocks'] AS $sideblock )
						@include( $sideblock )	
					@endforeach
				</div>
			</div>
			<div id="content" class="sidebar clearfix">
		@else
			<div id="content" class='clearfix'>
		@endif
			<div id="content-header">
				@if ( isset( $page['breadcrumb'] ))
					<div id="breadcrumb">{{ $page['breadcrumb']; }}</div>
				@endif
					
				@if ( isset( $page['title'] ) && strlen( $page['title'] ) > 0 )
					<h1 class="title">{{ $page['title'] }}</h1>
				@endif

				@if ( isset( $_SESSION['highlighted'] ))
					echo '<div id="highlighted">' . $_SESSION['highlighted'] . '</div>';
					unset($_SESSION['highlighted']);
				@endif
					
				@if ( isset( $_REQUEST['highlighted'] ))
					echo '<div id="highlighted">' . $_REQUEST['highlighted'] . '</div>';
				@endif

				@if ( isset($_SESSION['message'])) {
					echo '<div id="messages">' . $_SESSION['message'] . '</div>';
					unset($_SESSION['message']);
				@endif

				@if ( isset($_REQUEST['message'])) {
					echo '<div id="messages">' . $_REQUEST['message'] . '</div>';
				@endif
			</div>	

			<div id="content-area" class='clearfix'>
				@section( 'content' )
					<p>Default content.</p>
				@show
			</div>				
		</div>		
	</div>
</div>

<footer id="superfooter" class='clearfix'>
	<div id="superfooter-inner" class="wrap">
		@include( "templates.includes.superfooter" )
	</div>
</footer>

<footer id="footer" class='clearfix'>
	<div id="footer-inner" class="wrap">
		@include( "templates.includes.footer" )
	</div>
</footer>

<script type="text/javascript">
$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
  	items: 1,
  	autoplay: true,
  	loop: true,
  	dots: true
  });
});
</script>

<?php
	if ( isset( $page['js'] ) && file_exists( 'js/pages/' . $page['js'] . '.js' )) {
		echo '<script>';
		include 'js/pages/' . $page['js'] . '.js';
		echo '</script>';
	}
?>
		
</body>
</html>
