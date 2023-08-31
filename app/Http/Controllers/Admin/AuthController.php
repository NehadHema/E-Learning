<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Auth\Events\Attempting;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
      $data['course_count']=Course::count();

        return view("admin.login");
    }

    public function do_login(Request $request){
        $data = $request->validate([
         "email"=>"required|email",
         "password"=>"required|string"
        ]);
        if(!auth()->guard('admin')->attempt(["email"=>$data['email'],
            "password"=>$data['password']
          ])){
            return back(); // login page
          }else{
            return view("admin.index");
          }
    }

    public function logout(){
      auth()->guard('admin')->logout();
      return view('admin.login');
    }
}
