@extends('master')
@section('content')
<span><h3 align='center'>Login</h3></span>
<div class="container1">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="login" method="POST">
                <div class="form-group">
                    @csrf  
                <label for="fname">Email</label><br>
                <input type="email" id="email" name="email" value="kiran@gmail.com"><br><br>
                <label for="lname">password</label><br>
                <input type="password" id="password" name="password" value="kdj"><br><br>
                <input class="btn btn-primary" type="submit" value="Submit">
                </div>
            </form> 
        </div>
    </div>
</div>
@endsection