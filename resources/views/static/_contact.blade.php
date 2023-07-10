<?php $page['css'] = 'about-stages'; ?>
@extends( 'templates.default' )
@section( 'content' )

<form>
  <div class="field-wrapper field-first-name">
    <label>First Name:</label>
    <input type="text" placeholder="First Name" title="First Name" />
  </div>
  <div class="field-wrapper field-last-name">
    <label>Last Name:</label>
    <input type="text" placeholder="Last Name" title="Last Name" />
  </div>
  <div class="field-wrapper field-email">
    <label>Email:</label>
    <input type="email" placeholder="Email" title="Email" />
  </div>
  <div class="field-wrapper field-comments">
    <label>Questions/Comments:</label>
    <textarea title="Questions or Comments" rows="6" /></textarea>
  </div>
  <div class="field-wrapper field-submit">
    <input type="submit" title="Submit" value="Submit" />
  </div>
</form>
@stop