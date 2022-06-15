@extends('master')

@section('content')


<div class="container">
<div class="row">
    <div class="col-sm-4">
        <h2>Login Page</h2>
    <form action="login" method="post" >
      @csrf
  <div class="form-group">
    <label for="InputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="InputEmail1" placeholder="Enter email">
  
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="InputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>
    </div>
    </div>
</div>

@endsection