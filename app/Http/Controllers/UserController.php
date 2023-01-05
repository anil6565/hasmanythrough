<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Post;
use App\Models\User;
class UserController extends Controller
{ 
    public function index(){
        $countries= Country::get();
        $users= User::get();
        $posts= Post::get();
        return view('manytomany',compact('countries','users','posts'));
    }

    public function create(){
        return view('user');
    }
    public function store(Request $request, Country $country){
    $countries =Country::create([
        'name'=>$request->name,
   ]);
   
    $users= User::create([
    'name'=>$request->name,
    'email'=>$request->email,
    'password'=>$request->password,
    'country_id'=> $countries->id 
   ]);

    
       $posts=Post::create([
       'name'=>$request->name,
       'user_id'=>$users->id
     ]);
     
     return redirect('/');
   
}
}
