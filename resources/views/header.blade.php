<?php
use App\Http\Controllers\ProductController;
$total =0;
if(Session::has('user'))

{
$total = ProductController::cartItem();
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">E-commerce</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/myorders">Oders</a>
      </li>
</ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    

    <ul class="nav navbar-nav navbar-right">
      <li>
        <a class="nav-link" href="/cartlist">Cart({{$total}})</a>
      </li>
      @if(Session::has('user'))
      <li class="dropdown">
        <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="/logout">Logout</a></li>
          
        </ul>
      </li>
      @else
     <li> <a class="nav-link" href="/login">Login</a></li>
     <li> <a class="nav-link" href="/register">Register</a></li>
     
     @endif
</ul>
  </div>
  </div>
</nav>