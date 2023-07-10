<?php $page['title'] = 'Update Document'; ?>
<?php $page['breadcrumb'] = '<a href="/">home</a> &gt; user &gt; edit'; ?>
<?php $page['sideblocks'] = array(
	'user._block_edit_actions',
); ?>
<?php $page['css'] = 'user-edit'; ?>

@extends( 'templates.default' )
@section( 'content' )

{!! Form::model( $user, array( 'route' => array( 'user.edit', $user->id ))) !!}
	
	{!! Form::hidden( 'id' ) !!}
    
	@include( 'user._edit' )

{!! Form::close() !!}   
 
@stop