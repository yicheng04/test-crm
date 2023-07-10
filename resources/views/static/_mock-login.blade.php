<?php $page['title'] = 'Payment'; ?>
<?php $page['css'] = 'lessons'; ?>

@extends( 'templates.default' )
@section( 'content' )
<p>In order to proceed you must login.</p> 
<form>
    <div class="form-element-row">
      <input type="search" placeholder="Email">
    </div>
    <div class="form-element-row">
      <input type="search" placeholder="Password">
    </div>
    <div class="form-element-row">
      <input type="search" placeholder="Re-enter Password">
    </div>
    
    <a class="btn" href="/static/book-your-lesson">Submit</a>
    
</form>
@stop