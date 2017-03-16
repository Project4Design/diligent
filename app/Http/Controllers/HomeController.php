<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accidents;
use App\Vans;
use App\Cars;

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
        $cars = Cars::count();
        $vans = Vans::count();
        return view('dashboard',['cars'=>$cars,'vans'=>$vans,'homes'=>array(),'business'=>array(),'accidents' =>  $accidents]);
    }
}
