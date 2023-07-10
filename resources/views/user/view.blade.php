<?php $page['title'] = 'View Profile'; ?>
<?php $page['css'] = 'user-view'; ?>

<?php $page['sideblocks'] = array(
	'user._block_edit_actions',
); ?>
<?php $page['css'] = 'dashboard'; ?>

@extends( 'templates.default' )
@section( 'content' )

<p><a class='button small' href="/users">Return to User List</a></p>

	<p>First Name: {{ $first_name }}</p>
  <p>Last Name: {{ $last_name }}</p>
  <p>Email: {{ $email }}</p>
  <p>Role: {{ $role }}</p>




@stop
