@extends('master')
@section('content')

<div class="custom-product">
    
    <div class="col-sm-10">
      <div class="trending-wrapper">
        <h4>Result for Products</h4>
        <a class="btn btn-success" href="/video">Order Now</a><br><br> 
          @foreach ($products as $item)
          <div class="row searched-item cart-list-divider">
           <div class="col-sm-3">
            <a href="detail/{{$item->id}}">
                <img class="trending-image" src="{{$item->gallery}}">
                 
                </a>
           </div>
           <div class="col-sm-4">
                <div class="">
                  <h3>{{$item->name}}</h3>
                  <h5>{{ $item->description }}</h5>
                </div>
           </div>
           <div class="col-sm-3">
            <div class="rem">
              <a href="/removecart/{{ $item->cart_id }}" class="btn btn-warning">Remove from Cart</a>
              <img src="giffe.webp" muted loop autoplay class="imga">
              
            </div>
           </div>
          </div>  
          @endforeach
          <button class="btn btn-success"><a href="/orderbill">Bill</a></button>
        </div>
      </div>
    <h4><a href="/">Exit</a></h4>
</div>
@endsection