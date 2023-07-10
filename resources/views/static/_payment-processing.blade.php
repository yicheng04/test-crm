<?php $page['title'] = 'Payment'; ?>
<?php $page['css'] = 'lessons'; ?>

@extends( 'templates.default' )
@section( 'content' )
<div>
  <h2>Shopping Cart</h2>
  <div>Item 1 - $50.00</div>
</div>
<hr>
<div class="event-filter">
  <form>
    <div class="form-element-row">
        <label>Select your Method of Payment</label>
        <input type="radio" name="length" value="Visa"> Visa<br />
        <input type="radio" name="length" value="Mastercard"> Mastercard<br />
        <input type="radio" name="length" value="American Express"> American Express
      </div>
       <div class="form-element-row">
      <label>Name on Card:</label>
      <input type="text">
    </div>
     <div class="form-element-row">
      <label>Card Number:</label>
      <input type="text">
    </div>
    <div class="form-element-row" style="float: left; margin-right: 0.5%; width: 45%">
    <label>Expiration Date:</label>
      <select>
        <option selected="selected">01-January</option>
        <option>02-Feburary</option>
        <option>03-March</option>
        <option>04-April</option>
        <option>05-May</option>
        <option>06-June</option>
        <option>07-July</option>
        <option>08-August</option>
        <option>09-September</option>
        <option>10-October</option>
        <option>11-November</option>
        <option>12-December</option>
      </select>
    </div>
    <div class="form-element-row" style="float: left; margin-right: 0.5%; width: 45%">
    <label>.</label>
      <select>
        <option selected="selected">2015</option>
        <option>2016</option>
        <option>2017</option>
        <option>2018</option>
        <option>2019</option>
        <option>2020</option>
      </select>
    </div>
    <div class="clearfix"></div>
    <div class="form-element-row">
      <label>Security Code:</label>
      <input type="text">
    </div>
    <div class="form-element-row">
      <label>Address:</label>
      <input type="text">
    </div>

     <div class="form-element-row" style="float: left; margin-right: 0.5%; width: 45%">
      <label>City:</label>
      <input type="text">
    </div>
    <div class="form-element-row" style="float: left; margin-right: 1%; width: 45%">
      <label>State:</label>
      <input type="text">
    </div>
    <div class="clearfix"></div>
    <div class="form-element-row">
     <label>Zipcode</label> <input type="text">
    </div>
    <a class="btn" href="/static/thank-you">Submit</a>   
  </form>
</div>

@stop