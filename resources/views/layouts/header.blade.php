<?php  
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
$total=ProductController::cartItem();
}
?>

<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
      
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
       <div class="kaf"> 
        <div class="" >Brand</div>
       </div> 
      </div>
  
     
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="karr"><a href="/">Home</a></li>
          <li class="karr"><a href="/myorders">Orders</a></li>
          
        </ul>
        <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="lamm">Submit</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/cartlist" class="karr">cart({{ $total }})</a></li>
          @if (Session::has('user'))
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ Session::get('user')['name'] }}</a>
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/logout">Logout</a></li>
            </ul>
          </li>
          @else
          <li><a href="/login">Login</a></li>
          <li><a href="/register">Register</a></li>

          @endif

         
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>