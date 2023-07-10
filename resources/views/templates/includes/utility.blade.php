<div class="utility-nav" role="navigation" aria-label="utility navigation">
	@if ( Auth::check() )
		@if ( Auth::user()->role == 'admin' )
			{!! \App\Menu::where( 'slug', '=', 'utility-admin' )->first()->body !!}
		@else
			{!! \App\Menu::where( 'slug', '=', 'utility-user' )->first()->body !!}
		@endif
	@else
		{!! \App\Menu::where( 'slug', '=', 'utility-guest' )->first()->body !!}
	@endif
</div>
