@extends('master')
@section('content')
<span ><h3 align="center">Register</h3></span>
<div class="container2">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="/register" method="POST">
                @csrf
                <div class="form-group">
                <label for="fname">Name</label><br>
                <input type="text" id="name" name="name" value="user name"><br><br>
                <label for="email">Email</label><br>
                <input type="email" id="email" name="email" value="kiran@gmail.com"><br><br>
                <label for="lname">password</label><br>
                <input type="password" id="password" name="password" value="kdj"><br><br>
                <input class="btn btn-primary" type="submit" value="Register">
                </div>
            </form> 

        </div>
       
    </div>
</div>
@endsection