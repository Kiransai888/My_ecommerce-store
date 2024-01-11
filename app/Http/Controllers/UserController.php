<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
     function login(Request $req){
        $user=User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password)){
            return "username name or password not matched";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
        
    }
    // public function store(Request $request){
    //     $request->validate([
    //         'name' => 'required',
    //         'email'=>'required|email',
    //         'password' => 'required|min:8|max:255'
    //     ], [
    //         'name.required' => 'Username field cannot be empty.',
    //         'password.required' => 'Password field cannot be empty.',
    //         'password.min' => 
    //           'Password must contain at least 8 characters or more.',
    //         'password.max' => 
    //                       'Password must not exceed 255 characters.',
    //         'email.required'=>   'email field cannot be empty.',
    //         'email.email'=>'this is not valid email'           
    //     ]);
    //     $request = User::create([
    //         'name' => $request->input('name'),
    //         'email' => $request->input('email'),
    //         'password' => $request->input('password'),
    //         'user_id' => auth()->user()->id
    //     ]);
    //     return  redirect('/login');
    // }

    function register(Request $req){
        
          $user = new User;
          $user->name=$req->name;
          $user->email=$req->email;
          $user->password=Hash::make($req->password);
          $user->save();
         return  redirect('/login');
    }
}
