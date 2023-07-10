<?php $page = array(
    'title' => 'Editor - Index',
    'breadcrumb' => 'home > editor > index',
    'sideblocks' => array( 'editor._block_index' ),
    'css' => 'editor-index',
);

?>

@extends( 'templates.default' )
@section( 'content' )
	<table>
		@foreach ( $files AS $file )
			@if ( !in_array( $file, array( '.', '..', 'tmp' )))
				<?php
					$thepage = str_replace( '.php', '', str_replace( '_', '', $file ));
					$thepage = explode('-',$thepage,2);
				?>
			    <tr>
				    <td><a href="/editor/view/{{ str_replace( '.php', '', str_replace( '_', '', $file )) }}">{{ ucwords($thepage[0]) }} 
						@if( isset($thepage[1]) )
							{{ ucwords($thepage[1]) }}
						@endif
						</a></td>
				    <td><a href="/editor/view/{{ str_replace( '.php', '', str_replace( '_', '', $file )) }}">view</a></td>
				    <td><a href="/editor/edit/{{ str_replace( '.php', '', str_replace( '_', '', $file )) }}">edit</a></td>
				</tr>
			@endif
		@endforeach
	</table>
@stop
