@extends('master')
@section('content')

<div class="custom-product">
    
    <div class="col-sm-10">
      <div class="trending-wrapper">
        <h4>My orders for Products</h4>
       
          @foreach ($orders as $item)
          <div class="row searched-item cart-list-divider">
           <div class="col-sm-3">
            <a href="detail/{{$item->id}}">
                <img class="trending-image" src="{{$item->gallery}}">
                 
                </a>
           </div>
           <div class="col-sm-4">
                <div class="">
                  <h3>Name:{{$item->name}}</h3>
                  <h5>Delivery status:{{ $item->status }}</h5>
                  <h5>Address:{{ $item->address }}</h5>
                  <h5>Payment status: {{ $item->payment_status }}</h5>
                  <h5>Payment Method: {{ $item->payment_method }}</h5>
                </div>
           </div>
           <div class="col-sm-3">
            
           </div>
          </div>  
          @endforeach
        </div>
      </div>
    <h4><a href="/">Exit</a></h4>
</div>
@endsection