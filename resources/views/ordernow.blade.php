@extends('master')
@section('content')
<div class=" custom-product">
    
    <div class="col-sm-10">
    <table class="table">

  <tbody>
    <tr>
    
      <td>Amount</td>
      <td>रू {{$total}}</td>
    </tr>
    
    <tr>
      <td>Tax</td>
      <td>रू 0</td>
    </tr>
    <tr>
      <td>Delivery Charges</td>
      <td>रू 50</td>
    </tr>
    <tr>
    
      <td>Total Amount</td>
      <td>रू {{$total + 50}}</td>
    </tr>
  </tbody>
</table>

<form action="/action_page">
  <div class="form-group">
  <label>Address </label>
   <textarea placeholder="enter your delivery address" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label>Payment Method: </label><br>
    <input type="radio" name="payment"><span> Online payment</span><br><br>
    <input type="radio" name="payment"><span> Paymant on delivery</span><br><br>
 </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
    </div>
</div>
@endsection