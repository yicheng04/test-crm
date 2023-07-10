<?php $page['title'] = 'Dashboard'; ?>
<?php $page['sideblocks'] = array( 'dashboard._sidebar' ); ?>
<?php $page['css'] = 'dashboard'; ?>

@extends( 'templates.default' )

@section( 'content' )

@if( Auth::user() && Auth::check() )
<h4>Welcome, {{Auth::user()->first_name}}!</h4>
@endif

<br />
<ul>
  @if (Auth::user()->role == 'admin')
    <li><a href='users'>Users</a></li>
  @endif
  <li><a href='menus'>Menus</a></li>
  <li><a href='articles'>Articles (News)</a></li>
  <li><a href='contents'>Contents</a></li>
</ul>

@stop
