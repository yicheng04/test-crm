<?php $page['title'] = 'Users'; ?>
<?php $page['sideblocks'] = array(
	'user._block_index_actions',
); ?>
<?php $page['css'] = 'dashboard'; ?>

@extends( 'templates.default' )
@section( 'content' )

<p><a class='button small' href="/user/create">Create New User</a></p>

<table>
	@foreach ( $users AS $user )
		<tr>
			<td><a href="/user/view/{{ $user['id'] }}">{{ $user['first_name'] }}</a></td>
			<td><a href="/user/view/{{ $user['id'] }}">{{ $user['last_name'] }}</a></td>
			<td><a href="/user/view/{{ $user['id'] }}">{{ $user['email'] }}</a></td>
			<td><a class='button small' href="/user/edit/{{ $user['id'] }}">edit</a>
			<a class='button small' href="/user/view/{{ $user['id'] }}">view</a></td>
		</tr>
	@endforeach
</table>

@stop
