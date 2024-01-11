<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-commerceproj</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
  <header>@include('layouts.header')</header>
    @yield('content')
  <footer>@include("layouts.footer")</footer>
    
</body>
<style>
    .custom-login{
        height: 500px;
        padding-top: 100px;

    }
    .img.slider{
        height: 400px !important
    }
    .trending-img{
        height: 100px;
    }
    .tredning-item{
        float: left;
        width: 20%;
    }
    .trending-wrapper{
        margin: 20px;
    }
    .detail-img{
        height: 200px;
    }
    .carousel-caption{
        background-color: #2d277aab;
        
        border-radius: 20px;
    }
    body {
        background-color: black;
    }
    .trending-image{
        height: 80px;
        width: auto;
    }
    .rem{
        padding-top: 12px;
    }
    .cart-list-divider{
        border-bottom: 2px solid gray;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }
    .tab{
        background-color: rgba(32, 27, 98, 0.93);
        color: white;
        border: 3px solid rgba(255, 194, 40, 0.414);
        height: 80%;
        width: 30%;
        align-content: center;
        padding-left: 30px;
        margin-left: 10px;
    }
    .address{
        margin-left: 8px;
        margin-top: 10px;
    }
    .fib{
        margin-top: 10px;
        margin-left: 4px;
    }
    .imga{
        height: 110px;
        width: 120px;
    }
    .navbar{
        background-image: url("https://img.pikbest.com/backgrounds/20190717/gif-purple-blue-neon-color-strip-dynamic-banner-background_2758296.jpg!bwr800");

    }
    .karr{
        background-color: #8000ff3b;
        color: white;
        border: 2px solid #d553e0;
        border-radius: 5px;
        height: 50px;
        width:70px;
        margin-left: 21px;
        margin-top: 7px;
    }
    .kaf{
        background-color: #8000ff3b;
        color: white;
        border: 2px solid #d553e0;
        height: 50px;
        width: 69px;
        padding: 13px;
        border-radius: 5px;
        margin-top: 7px;
    }
    .lamm{
        background-color: #8000ff3b;
        color: white;
        border: 2px solid #d553e0;
        border-radius: 5px;
        height: 50px;
        width:70px;
        margin-left: 8px;

    }
    .container1{
        background-color: #20042d;
        color: white;
        height: 222px;
        width: 300px;
        padding-right: 100px;
        padding-top: 23px;
        margin-top: 18px;
        border-radius: 60px;
        margin-left: 619px;
        
    }
    .container2{
        background-color: #20042d;
        color: white;
        height: 300px;
        width: 300px;
        padding-right: 100px;
        padding-top: 27px;
        align-content: center;
        border-radius: 60px;
        margin-left: 600px;

    }
    #email{
        background-color: #20042d;
    }
    #password{
        background-color: #20042d;
    }
    #name{
        background-color: #20042d;
    }
    
   
 </style>   
{{-- <script>
    $(document).ready(function() {
        $('button').click(function(){
            alert('all set')
        })
    })
    </script> --}}
</html>