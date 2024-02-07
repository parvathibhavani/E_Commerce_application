<?php

namespace App\Http\Controllers;
use App\Mail\SendEmailMailable;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Carbon\carbon;
use App\Jobs\SendEmailJob;


use App\Models\User;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;
class AuthController extends Controller
{
    public function show(){
        return view("advance");
    }
    public function login(Request $request){
       $validator= Validator::make($request->all(), [
             'name'=>['required'],
            'email'=> ['required','email'],
            'password'=> ['required']
       ]);

       if($validator->fails()){
           return $validator->errors();
       }

        if(Auth::attempt(request()->only(['email','password']), request()->filled('remember')))
        {
            return redirect('item-list');
        }
        return "wrong creds";
    }
    public function logout(){
        auth()->logout();

        return redirect('/');
    }
    public function adduser(){
        return view('register');
    }
    /*public function saveuser(Request $request){
        DB::table('users')->insert([
            'name'=> $request->name,
            'email'=>$request->email,
            'password'=>$request->password,

        ]);
        
   }*/

   
   public function saveuser(Request $request){
    $user=User::create([
        'name'=>$request['name'],
        'email'=>$request['email'],
        'password'=>$request['password']
    ]);
    
    $job=(new SendEmailJob($user))->delay(5);

    dispatch($job);
    return redirect('item-list');
   }

   

}


