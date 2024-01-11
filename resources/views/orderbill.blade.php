@extends('master')
@section('content')

<div class="custom-product">
    
    <div class="col-sm-10">
        <table class="tab">
           
            <tr>
              <td align="center">Amount</td>
              <td>$ {{ $total }}</td>
            </tr>
            <tr>
                <td  align="center">Tax</td>
                <td>$ 0.76</td>
              
              </tr>
            <tr>
              <td  align="center">Delivery</td>
              <td>$ 23</td>
            
            </tr>
            <tr>
                <td  align="center">Total amount</td>
                <td>$ {{ $total+23+0.76  }}</td>
              
              </tr>
          </table>
          <form action="/orderplace" method="GET">
            @csrf
            <div class="fib">
              Address:
            </div>
            <div class="address">
            <textarea  rows="3" cols="30" value="enter your address"  name="address"></textarea>
            </div>
            <br><br>
            <input type="radio" name="payment" value="cash"><span>Online payment</span><br><br>
            <input type="radio" name="payment" value="cash"><span>EMI payment</span><br><br>
            <input type="radio" name="payment" value="cash"><span> Payment on Delivery</span><br><br>
            <input type="submit" name="submit" class="btn btn-default" value="Order now">
          </form> 
      </div>
    <h4><a href="/">Exit</a></h4>
</div>
@endsection