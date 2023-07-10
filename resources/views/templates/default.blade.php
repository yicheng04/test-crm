<!DOCTYPE html>
<html lang="en-US">
<head>
	@include( 'templates.includes.head' )
	<script src="//use.typekit.net/bod4wdj.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
</head>
	
<body>
<a class="skip-main" href="#main">Skip to main content</a>
<div id="page" class="page-<?php echo ( isset($module) > 0 ? $module : 'home' ); ?>">  
  <div id="utility" class="clearfix">
    <div id="utility-inner" class="wrap">
      @include( "templates.includes.utility" )
    </div>
  </div>
  
  <header id="header" class="clearfix" role="banner">
  	<div id="header-inner" class="wrap">
  		@include( "templates.includes.header" )
  		<div id="mobile-header">
        <a id="responsive-menu-button" href="#sidr-main">Menu</a>
      </div>
  	</div>
  </header>
  
  <nav id="navigation" class="clearfix">
    <div id="navigation-inner" class="wrap" role="navigation" aria-label="main navigation">
      @include( "templates.includes.menu" )
  	</div>
  </nav>

  <div id="hero">
    <div id="hero-inner">
      @include( "templates.includes.hero" )
    </div>
  </div>

  <div id="main" class="clearfix" tabindex="-1" role="main">
  	<div id="main-inner" class="wrap">
  		@if ( isset( $page['sideblocks'] ))
  			<div id="sidebar" role="complementary">
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
    					<div id="breadcrumb">{!! $page['breadcrumb'] !!}</div>
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
  
  <footer id="footer" class='clearfix'>
  	<div id="footer-inner" class="wrap">
  		@include( "templates.includes.footer" )
  	</div>
  </footer>

</div>
<?php
	if ( isset( $page['js'] ) && file_exists( 'js/pages/' . $page['js'] . '.js' )) {
		echo '<script>';
		include 'js/pages/' . $page['js'] . '.js';
		echo '</script>';
	}
?>
</body>
</html>
