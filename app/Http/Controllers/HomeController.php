<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accidents;
use App\Homes;
use App\Vans;
use App\Cars;
use App\Business;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accidents = Accidents::count();
        $homes = Homes::count();
        $cars = Cars::count();
        $vans = Vans::count();
        $business = Business::count();
        return view('dashboard',['cars'=>$cars,'vans'=>$vans,'homes'=> $homes,'business'=> $business,'accidents' =>  $accidents]);
    }
}
