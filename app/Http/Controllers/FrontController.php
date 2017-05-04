<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accidents;
use App\Business;
use App\Homes;
use App\Vans;
use App\Cars;

class FrontController extends Controller
{
    //

	public function index(){
		$accidents = Accidents::count();
    $cars = Cars::count();
    $vans = Vans::count();
    $homes = Homes::count();
    $business = Business::count();
    $accidents = Accidents::count();


		return view('front.index',['cars'=>$cars,'vans'=>$vans,'homes'=>$homes,'business'=>$business,'accidents' =>  $accidents]);
	}
}
