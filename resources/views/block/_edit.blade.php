{!! Form::label( 'block_type_id', 'Block Type') !!}
{!! Form::select('block_type_id', App\BlockType::all()->lists('titleWithDescription', 'id'), null, ['disabled'] )!!}

{!! Form::label( 'title', 'Title') !!}
{!! Form::text( 'title' ) !!}

{!! Form::label( 'text', 'Body Text') !!}
{!! Form::text( 'text' ) !!}

{!! Form::label( 'path', 'URL Link') !!}
{!! Form::text( 'path', null, ['placeholder'=>\Request::root().'/'] ) !!}

<span id="button_input">
	{!! Form::label( 'button_text', 'Button Text') !!}
	{!! Form::text( 'button_text' ) !!}
</span> 

{!! Form::hidden( 'css' ) !!}
{!! Form::hidden( 'button_css' ) !!}
{!! Form::hidden( 'icon' ) !!}

{!! Form::submit( 'Submit', array('class'=>'btn btn-large btn-primary btn-block' )) !!}

<script>
	var $url_path_label = $('label[for="path"]');
	var $button_input = $('#button_input');

	$('#block_type_id').on('change', function() {
		switch($(this).val()) {
			case '1':
				$url_path_label.text('URL Link');
				$button_input.hide();
				break;
			case '2':
				$url_path_label.text('Button URL Link');
				$button_input.show();
				break;
			default:
				break;
		}
	}).trigger('change');

</script>