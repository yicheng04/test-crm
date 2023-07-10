<?php

if(Session::has('message')) {
    echo "<h3>" . Session::get('message') . "</h3><br/><br/>";
    Session::forget('message');
}

?>

Please complete the form below and someone will get back to you within 48 business hours.
<br/><br/>

<div class="form-container">
<form method="POST" action="/contact">
<div class="form">
    First Name
    <input type="text" name="first_name">

    Last Name
    <input type="text" name="last_name">

    Email
    <input type="email" name="email" required="required">

    Comment
    <textarea name="comment" required="required"></textarea>
    <input type="submit" value="Submit">
</div>
</form>
</div>