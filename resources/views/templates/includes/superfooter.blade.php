@if ( isset( Auth::user()->role ))
	@if ( Auth::user()->role == 'admin' )
		{!! \App\Menu::where( 'slug', '=', 'superfooter-admin' )->first()->body !!}
	@else
		{!! \App\Menu::where( 'slug', '=', 'superfooter-user' )->first()->body !!}
	@endif
@else
	{!! \App\Menu::where( 'slug', '=', 'superfooter-guest' )->first()->body !!}
@endif
