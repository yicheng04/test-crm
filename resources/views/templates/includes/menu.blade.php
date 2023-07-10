@if ( isset( Auth::user()->role ))
	@if ( Auth::user()->role == 'admin' )
		{!! \App\Menu::where( 'slug', '=', 'main-admin' )->first()->body !!}
	@else
		{!! \App\Menu::where( 'slug', '=', 'main-user' )->first()->body !!}
	@endif
@else
	{!! \App\Menu::where( 'slug', '=', 'main-guest' )->first()->body !!}
@endif
