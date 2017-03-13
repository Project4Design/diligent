<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cars;
use App\Cars_motors_accidents;
use App\Cars_motors_offences;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                //dd($request->input('qualifications_obtained'));
        /*if ($request->input('motor_accidents') == 'Yes') {
            $cars_accidents = new Cars_motors_accidents;
            $cars_accidents = $request->type;
            $cars_accidents = $request->date;
            $cars_accidents = $request->damage;
            $cars_accidents = $request->cost;
            $cars_accidents = $request->fault;
            $cars_accidents = $request->any_injuries;
            
        }*/
        //dd($request->input('first_name'));
        $cars = new Cars;
        $cars->fill($request->all());
        $cars->save();

        if ($request->input('motor_accidents') == 'Yes') {
            

            for($i = 1; $i < 5 ; $i++){
                $cars_accidents = new Cars_motors_accidents;
                $cars_accidents->id_cars = $cars->id;
                $cars_accidents->type = $request->input('type_'.$i);
                $cars_accidents->date = $request->input('date_'.$i);
                $cars_accidents->damage = $request->input('damage_'.$i);
                $cars_accidents->cost = $request->input('cost_'.$i);
                $cars_accidents->fault = $request->input('fault_'.$i);
                $cars_accidents->any_injuries = $request->input('any_injuries'.$i);
                $cars_accidents->save();

            }//fin for cars_accidents              
        }

          if ($request->input('motor_offences') == 'Yes') {
            
            
            for($i = 1; $i < 5 ; $i++){
                $cars_offences = new Cars_motors_offences;
                $cars_offences->id_cars_offences = $cars->id;
                $cars_offences->conviction_code = $request->input('conviction_code_'.$i);
                $cars_offences->date_conviction = $request->input('date_conviction_'.$i);
                $cars_offences->points = $request->input('points_'.$i);
                $cars_offences->fine_libras = $request->input('fine_libras_'.$i);
                $cars_offences->ban_month = $request->input('ban_month_'.$i);
                $cars_offences->save();

                echo $request->input('points_'.$i);
            }//fin for
            
        //return dd($request->type_{$i});
    }
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
