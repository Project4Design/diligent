<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accidents;
use App\Homes;
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
        return view('dashboard',['cars'=>array(),'vans'=>array(),'homes'=>$homes,'business'=>array(),'accidents' =>  $accidents]);
    }
}
