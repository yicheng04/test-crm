<?php
    $page['title'] = 'Event - Create';
    $page['sideblocks'] = [ 'dashboard._sidebar' ];
    $page['css'] = 'dashboard';
?>

@extends( 'templates.default' )
@section( 'content' )

{!! Form::model( new App\Event, ['route' => [ 'events.store' ], 'class'=>'']) !!}

    @include( 'event._edit' )

{!! Form::close() !!}

<script type="text/javascript" src="/js/ckeditor/ckeditor.js"></script>

<script>
    CKEDITOR.replace('body', {});

    $("#datepicker_start").datepicker({
    	dateFormat: 'yy-mm-dd',
        onSelect: function(selected) {
          $("#datepicker_end").datepicker("option","minDate", selected)
        }
    });
    $("#datepicker_end").datepicker({
    	dateFormat: 'yy-mm-dd',
        onSelect: function(selected) {
          $("#datepicker_start").datepicker("option","maxDate", selected)
        }
    });
    $("#datepicker_start").attr( 'readOnly' , 'true' );
    $("#datepicker_end").attr( 'readOnly' , 'true' );

</script>

@stop
