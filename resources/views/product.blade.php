@extends('master')
@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
<h3>Carousel example Indicators</h3> 
<!-- <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
     @foreach ($products as $item)   
  <div class="item {{$item['id'] == 1 ? 'active' : ' ' }}">
      <img class="slider-img" src="{{$item['gallery']}}" alt="{{$item['name']}}">
      <div class="carousel-caption slider-text">
        <h3>{{$item['name']}}</h3>
        <p>{{$item['description']}}</p>
      </div>
  </div>
 @endforeach
</div>

  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> -->

  <div class="trending-wrapper">
  <h3>Trending Products</h3>
  @foreach($products as $item)
  <div class="trending-item">
    <a href="detail/{{$item['id']}}">
    <img class="trending-image" src="{{$item['gallery']}}" alt="{{$item['name']}}">
    <div class="">
      <h3>{{$item['name']}}</h3>
    </div>
    </a>
  </div>
  @endforeach
</div>
</div>
</div>
@endsection