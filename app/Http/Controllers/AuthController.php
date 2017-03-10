<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{


	public function index()
	 {
	 		return view('login');


	 }
    public function authenticate(Request $request)
    {
    	//attemp suelta un booleano
    	//dd($request->all());

    	$this->validate($request, [

    		'email' =>'required|email',
    		'password' => 'required|max:8',

    		]);

	        if (Auth::attempt($request->only(['email' , 'password'])))
	        {
	        	return redirect()->intended('dashboard');
	            
	        }else{

	        	return redirect()->route('index_show_login')->withErrors('An error has occurred, check your credentials');
	        }

    }

    public function logout()
    {
    	
    	 Auth::logout();

    	 return redirect()->route('login');

    }
}
