
<?php $page['css'] = 'user-index'; ?>

@extends( 'templates.default' )
@section( 'content' )

<img src="/img/car.png">

<div class="newsBlock">
	<h2 class="newsTitle">News Highlight: </h2>
</div>

<div class="clearfix"></div>


<div>
	<div id="quickLinks" class="block3s">
		<h3>Quick Links</h3>
		<ul id="landing-blocks">
			<li><a href="/user/dashboard">My Dashboard</a></li>
		</ul>
	</div>

	<div id="infoBlock" class="block3s">
		<h3>Find Help</h3>
		<h3>Search Block</h3>
	</div>

	<div id="support" class="block3s">
		<a href="/"><img src="/img/contact-support.jpg"></a>
		
	</div>

</div>

@stop



