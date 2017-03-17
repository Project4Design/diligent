<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Accidents;
use App\Business;
use App\Homes;
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
        $homes = Homes::count();
        $business = Business::count();
        $accidents = Accidents::count();
        $latest = DB::select("SELECT id AS id,'cars' AS link, 'Cars' AS type, title AS title, first_name AS name, sur_name AS surname,mobile AS phone, created_at AS created
                                FROM cars
                                GROUP BY id
                            UNION SELECT id_home_insurance AS id,'homes' AS link,'Homes' AS type, title AS title, first_name AS name, sur_name AS surname,contact_number AS phone,created_at AS created
                                FROM home_insurance
                                GROUP BY id_home_insurance
                            UNION SELECT id_insurance_bussiness AS id,'business' AS link, 'Business' AS type, title AS title, first_name AS name, sur_name AS surname,mobile_telephone, created_at AS created
                                FROM business
                                GROUP BY id_insurance_bussiness
                            UNION SELECT id_accidents_management AS id, 'accidents' AS link,'Accidents' AS type, title AS title,first_name AS name,sur_name AS surname,phone AS phone, created_at AS created
                                FROM accidents
                                GROUP BY id_accidents_management
                            ORDER BY created DESC");
        return view('dashboard',['cars'=>$cars,'vans'=>$vans,'homes'=>$homes,'business'=>$business,'accidents' =>  $accidents,'latest' => $latest]);
    }
}
