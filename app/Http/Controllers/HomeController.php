<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accidents;
<<<<<<< HEAD
use App\Homes;
=======
use App\Vans;
use App\Cars;

>>>>>>> 130176e6fec02bcafa1af506d775ca2b8dd69513
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
<<<<<<< HEAD
        $homes = Homes::count();
        return view('dashboard',['cars'=>array(),'vans'=>array(),'homes'=>$homes,'business'=>array(),'accidents' =>  $accidents]);
=======
        $cars = Cars::count();
        $vans = Vans::count();
        return view('dashboard',['cars'=>$cars,'vans'=>$vans,'homes'=>array(),'business'=>array(),'accidents' =>  $accidents]);
>>>>>>> 130176e6fec02bcafa1af506d775ca2b8dd69513
    }
}
