<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cars;
use App\Cars_motors_accidents;
use App\Cars_motors_offences;
use App\Cars_additional_driver;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Cars::all();
        return view('cars.index' , ['cars' => $cars]);
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
        $cars = new Cars;
        $cars->fill($request->all());

        if($cars->save()){
          if($request->input('motor_accidents') == 'Yes') {
            for($i = 1; $i < 5 ; $i++){
              $cars_accidents = new Cars_motors_accidents;
              $cars_accidents->id_cars = $cars->id;
              $cars_accidents->type = $request->input('type_'.$i);
              $cars_accidents->date = $request->input('date_'.$i);
              $cars_accidents->damage = $request->input('damage_'.$i);
              $cars_accidents->cost = $request->input('cost_'.$i);
              $cars_accidents->fault = $request->input('fault_'.$i);
              $cars_accidents->any_injuries = $request->input('any_injuries_'.$i);
              $cars_accidents->save();
            }//fin for cars_accidents
          }//fin if motor accidents

          if($request->input('motor_offences') == 'Yes'){
          	for($i = 1; $i < 5 ; $i++){
              $cars_offences = new Cars_motors_offences;
              $cars_offences->id_cars_offences = $cars->id;
              $cars_offences->conviction_code = $request->input('conviction_code_'.$i);
              $cars_offences->date_conviction = $request->input('date_conviction_'.$i);
              $cars_offences->points = $request->input('points_'.$i);
              $cars_offences->fine_libras = $request->input('fine_libras_'.$i);
              $cars_offences->ban_month = $request->input('ban_month_'.$i);
              $cars_offences->save();
            }//fin for
          }// fin if offences

          for($j = 1; $j < 3; $j++){
          	if($request->input('additional_driver'.$j) == "Yes"){
              $additional_driver = new Cars_additional_driver;
              $additional_driver->id_cars_additional     = $cars->id;
              $additional_driver->ca_title               = $request->input('ca_title_'.$j);
              $additional_driver->ca_first_name          = $request->input('ca_first_name_'.$j);
              $additional_driver->ca_middle_name         = $request->input('ca_middle_name_'.$j);
              $additional_driver->ca_sur_name            = $request->input('ca_sur_name_'.$j);
              $additional_driver->ca_relationship        = $request->input('ca_relationship_'.$j);
              $additional_driver->ca_birthdate           = $request->input('ca_birthdate_'.$j);
              $additional_driver->ca_marital_status      = $request->input('ca_marital_status_'.$j);
              $additional_driver->ca_employment_status   = $request->input('ca_employment_status_'.$j);
              $additional_driver->ca_employed_occupation = $request->input('ca_employed_occupation_'.$j);
              $additional_driver->ca_employed_business   = $request->input('ca_employed_business_'.$j);
              $additional_driver->ca_type_license        = $request->input('ca_type_license_'.$j);
              $additional_driver->ca_period_license      = $request->input('ca_period_license_'.$j);
              $additional_driver->ca_date_provitional_license = $request->input('ca_date_provitional_license_'.$j);
              $additional_driver->ca_license_enter       = $request->input('ca_license_enter_'.$j);
              $additional_driver->ca_license_number      = $request->input('ca_license_number_'.$j);
              $additional_driver->ca_dvla_medical        = $request->input('ca_dvla_medical_'.$j);
              $additional_driver->ca_born_uk             = $request->input('ca_born_uk_'.$j);
              $additional_driver->ca_uk_resident         = $request->input('ca_uk_resident_'.$j);
              $additional_driver->ca_other_vehicle       = $request->input('ca_other_vehicle_'.$j);
              $additional_driver->ca_non_motoring_convictions = $request->input('ca_non_motoring_convictions_'.$j);
              $additional_driver->ca_motor_accidents     = $request->input('ca_motor_accidents_'.$j);
              $additional_driver->ca_motor_offences      = $request->input('ca_motor_offences_'.$j);
              $additional_driver->save();

              if($request->input('ca_motor_accidents_'.$j) == "Yes"){
                for($i = 1; $i < 5 ; $i++){
                  $cars_accidents = new Cars_motors_accidents;
                  $cars_accidents->id_cars = $cars->id;
                  $cars_accidents->id_additional_driver = $additional_driver->id_cars_additional;
                  $cars_accidents->type = $request->input('type_'.$i.'_'.$j);
                  $cars_accidents->date  = $request->input('date_'.$i.'_'.$j);
                  $cars_accidents->damage = $request->input('damage_'.$i.'_'.$j);
                  $cars_accidents->cost = $request->input('cost_'.$i.'_'.$j);
                  $cars_accidents->fault = $request->input('fault_'.$i.'_'.$j);
                  $cars_accidents->any_injuries = $request->input('any_injuries_'.$i.'_'.$j);
                  var_dump($cars_accidents);
                  echo "-----------------------------------------------------------------------------------";
                  $cars_accidents->save();
                }//fin for cars_accidents        
              }// fin if motor accidentes additional driver

              if ($request->input('ca_motor_offences_'.$j) == 'Yes'){
                for($i = 1; $i < 5 ; $i++){
                  $cars_offences = new Cars_motors_offences;
                  $cars_offences->id_cars_offences = $cars->id;
                  $cars_offences->id_additional_drive_offences = $additional_driver->id_cars_additional;
                  $cars_offences->conviction_code = $request->input('conviction_code_'.$i.'_'.$j);
                  $cars_offences->date_conviction = $request->input('date_conviction_'.$i.'_'.$j);
                  $cars_offences->points = $request->input('points_'.$i.'_'.$j);
                  $cars_offences->fine_libras = $request->input('fine_libras_'.$i.'_'.$j);
                  $cars_offences->ban_month = $request->input('ban_month_'.$i.'_'.$j);
                  var_dump($cars_offences);
                  echo "-----------------------------------------------------------------------------------";
                  $cars_offences->save();
                }//fin for
              } //fin if motor offence yes

            }//fin YES additional driver
          }//For additional driver

          $with = [
          'flash_message' => 'Cars quote submitted successfully!',
          'flash_class' => 'alert-success'
          ];

        }//Fin save PRINCIPAL CARS
        else{
          $with = [
          'flash_message' => 'An error has ocurred.',
          'flash_class' => 'alert-danger',
          'alert-important' => true
          ];
        }
        dd($additional_driver);
        return redirect("/car-quote")->with($with);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        //$car = Cars::motor_accidents()->with('Cars')->findOrFail($id);
        //$car = Cars::where('id',$id)->with('accidents')->first(); =============|| FUNCIONA
        $car = Cars::findOrFail($id);
        //Accidentes 
        if($car->motor_accidents==="Yes"){ $acc = Cars::find($id)->accidents->where('id_additional_driver',"=",NULL); }else{ $acc = NULL; }
        //Offences
        if($car->motor_offences==="Yes"){ $ofe = Cars::find($id)->offences->where('id_additional_drive_offences',"=",NULL); }else{ $ofe = NULL; }
        if($car->additional_driver1==="Yes"){
            $adt1 = Cars::find($id)->additional->get(0);
            if($adt1->ca_motor_accidents==="Yes"){
                $acc1 = Cars::find($id)->accidents->where('id_additional_driver',$adt1->id_additional_driver);
            }else{ $acc1 = NULL; }

            if($adt1->ca_motor_offences==="Yes"){
                $ofe1 = Cars::find($id)->offences->where('id_additional_drive_offences',$adt1->id_additional_driver);
            }else{ $ofe1 = NULL; }

            if($car->additional_driver2==="Yes"){
                $adt2 = Cars::find($id)->additional->get(1);
                if($adt2->ca_motor_accidents==="Yes"){
                    $acc2 = Cars::find($id)->accidents->where('id_additional_driver',$adt2->id_additional_driver);
                }else{ $acc2 = NULL; }
                if($adt2->ca_motor_offences==="Yes"){
                    $ofe2 = Cars::find($id)->offences->where('id_additional_drive_offences',$adt2->id_additional_driver);
                }else{ $ofe2 = NULL; }
            }else{ $adt2 = NULL; $acc2 = NULL; $ofe2 = NULL; }
        }else{
            $adt1 = NULL;$acc1 = NULL;$ofe1 = NULL;
            $adt2 = NULL;$acc2 = NULL;$ofe2 = NULL;
        }
        $adt1 = (object) array('data'=>$adt1,'acc'=>$acc1,'ofe'=>$ofe1);
        $adt2 = (object) array('data'=>$adt2,'acc'=>$acc2,'ofe'=>$ofe2);
        //dd($ofe);
        return view("cars.show", ["car"=>$car,"acc"=>$acc,"ofe"=>$ofe,"adt1"=>$adt1,"adt2"=>$adt2]);
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
