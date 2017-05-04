<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vans;
use App\Vans_motors_accidents;
use App\Vans_motors_fixed;
use App\Vans_additional_driver;

class VansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vans = Vans::all();
        return view('vans.index' , ['vans' => $vans]);
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
      $vans = new Vans;
      $vans->fill($request->all());
      if($vans->save()){
        if ($request->input('motor_accidents') == 'Yes') {
          for($i = 1; $i < 5 ; $i++){
            $vans_accidents = new vans_motors_accidents;
            $vans_accidents->vans_id = $vans->id_vans;
            $vans_accidents->type = $request->input('type_'.$i);
            $vans_accidents->date = $request->input('date_'.$i);
            $vans_accidents->damage = $request->input('damage_'.$i);
            $vans_accidents->cost = $request->input('cost_'.$i);
            $vans_accidents->fault = $request->input('fault_'.$i);
            $vans_accidents->any_injuries = $request->input('any_injuries_'.$i);
            $vans_accidents->save();
          }//fin for cars_accidents
        }//fin if motor accidents

	      if ($request->input('motor_offences') == 'Yes') {
	        for($i = 1; $i < 5 ; $i++){
            $vans_offences = new Vans_motors_fixed;
            $vans_offences->id_vans_fixed = $vans->id_vans;
            $vans_offences->conviction_code = $request->input('conviction_code_'.$i);
            $vans_offences->date_conviction = $request->input('date_conviction_'.$i);
            $vans_offences->points = $request->input('points_'.$i);
            $vans_offences->fine_libras = $request->input('fine_libras_'.$i);
            $vans_offences->ban_month = $request->input('ban_month_'.$i);
            $vans_offences->save();
	        }//fin for
	      }// fin if offences

	      for($j = 1; $j < 3; $j++){
	       	if($request->input('additional_driver'.$j) == "Yes"){
	          $additional_driver = new Vans_additional_driver;
	          $additional_driver->id_vans_add = $vans->id_vans;
	          $additional_driver->ca_title = $request->input('ca_title_'.$j);
	          $additional_driver->ca_first_name = $request->input('ca_first_name_'.$j);
	          $additional_driver->ca_middle_name = $request->input('ca_middle_name_'.$j);
	          $additional_driver->ca_sur_name = $request->input('ca_sur_name_'.$j);
	          $additional_driver->ca_relationship = $request->input('ca_relationship_'.$j);
	          $additional_driver->ca_birthdate = $request->input('ca_birthdate_'.$j);
	          $additional_driver->ca_marital_status = $request->input('ca_marital_status_'.$j);
	          $additional_driver->ca_employment_status = $request->input('ca_employment_status_'.$j);
	          $additional_driver->ca_employed_occupation = $request->input('ca_employed_occupation_'.$j);
	          $additional_driver->ca_employed_business = $request->input('ca_employed_business_'.$j);
	          $additional_driver->ca_type_license = $request->input('ca_type_license_'.$j);
	          $additional_driver->ca_period_license = $request->input('ca_period_license_'.$j);
	          $additional_driver->ca_date_provitional_license = $request->input('ca_date_provitional_license_'.$j);
	          $additional_driver->ca_license_enter = $request->input('ca_license_enter_'.$j);
	          $additional_driver->ca_license_number = $request->input('ca_license_number_'.$j);
	          $additional_driver->ca_dvla_medical = $request->input('ca_dvla_medical_'.$j);
	          $additional_driver->ca_born_uk = $request->input('ca_born_uk_'.$j);
	          $additional_driver->ca_uk_resident = $request->input('ca_uk_resident_'.$j);
	          $additional_driver->ca_other_vehicle = $request->input('ca_other_vehicle_'.$j);
	          $additional_driver->ca_non_motoring_convictions = $request->input('ca_non_motoring_convictions_'.$j);
	          $additional_driver->ca_motor_accidents = $request->input('ca_motor_accidents_'.$j);
	          $additional_driver->ca_motor_offences = $request->input('ca_motor_offences_'.$j);
	          $additional_driver->save();
	          
	          if($request->input('ca_motor_accidents_'.$j) == "Yes"){
	            for($i = 1; $i < 5 ; $i++){
	              $cars_accidents = new Vans_motors_accidents;
	              $cars_accidents->vans_id = $vans->id_vans;
	              $cars_accidents->id_additional_driver = $additional_driver->id_vans_additional;
	              $cars_accidents->type = $request->input('type_'.$i.'_'.$j);
	              $cars_accidents->date = $request->input('date_'.$i.'_'.$j);
	              $cars_accidents->damage = $request->input('damage_'.$i.'_'.$j);
	              $cars_accidents->cost = $request->input('cost_'.$i.'_'.$j);
	              $cars_accidents->fault = $request->input('fault_'.$i.'_'.$j);
	              $cars_accidents->any_injuries = $request->input('any_injuries_'.$i.'_'.$j);
	              $cars_accidents->save();
	            }//fin for cars_accidents              
	          }// fin if motor accidentes additional driver

	          if($request->input('ca_motor_offences_'.$j) == 'Yes'){
	            for($i = 1; $i < 5 ; $i++){
	              $cars_offences = new Vans_motors_fixed;
	              $cars_offences->id_vans_fixed = $vans->id_vans;
	              $cars_offences->id_additional_drive_fixed = $additional_driver->id_vans_additional;
	              $cars_offences->conviction_code = $request->input('conviction_code_'.$i.'_'.$j);
	              $cars_offences->date_conviction = $request->input('date_conviction_'.$i.'_'.$j);
	              $cars_offences->points = $request->input('points_'.$i.'_'.$j);
	              $cars_offences->fine_libras = $request->input('fine_libras_'.$i.'_'.$j);
	              $cars_offences->ban_month = $request->input('ban_month_'.$i.'_'.$j);
	              $cars_offences->save();
	            }//fin for
	          } //fin if motor offence yes
	        }//fin YES additional driver 1
	      }//For additional driver

        $with = [
	        'flash_message' => 'Vans quote submitted successfully!',
	        'flash_class' => 'alert-success',
	        'alert-important' => true
        ];

      }//Fin save PRINCIPAL VANS
      else{
        $with = [
	        'flash_message' => 'An error has ocurred.',
	        'flash_class' => 'alert-danger',
	        'alert-important' => true
        ];
      }
       dd($with);
      //return redirect("/van-quote")->with($with);
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
        $van = Vans::findOrFail($id);
        //Accidentes 
        if($van->motor_accidents === "Yes"){ $acc = Vans::find($id)->accidents->where('id_additional_driver',"=",NULL); }else{ $acc = NULL; }
        //Offences
        if($van->motor_offences === "Yes"){ $ofe = Vans::find($id)->offences->where('id_additional_drive_fixed',"=",NULL); }else{ $ofe = NULL; }
        if($van->additional_driver1 === "Yes"){
            $adt1 = Vans::find($id)->additional->get(0);
            if($adt1->ca_motor_accidents === "Yes"){
                $acc1 = Vans::find($id)->accidents->where('id_additional_driver',$adt1->id_vans_additional);
            }else{ $acc1 = NULL; }

            if($adt1->ca_motor_offences === "Yes"){
                $ofe1 = Vans::find($id)->offences->where('id_additional_drive_fixed',$adt1->id_vans_additional);
            }else{ $ofe1 = NULL; }

            if($van->additional_driver2 === "Yes"){
                $adt2 = Vans::find($id)->additional->get(1);
                if($adt2->ca_motor_accidents === "Yes"){
                    $acc2 = Vans::find($id)->accidents->where('id_additional_driver',$adt2->id_vans_additional);
                }else{ $acc2 = NULL; }
                if($adt2->ca_motor_offences === "Yes"){
                    $ofe2 = Vans::find($id)->offences->where('id_additional_drive_fixed',$adt2->id_vans_additional);
                }else{ $ofe2 = NULL; }
            }else{ $adt2 = NULL; $acc2 = NULL; $ofe2 = NULL; }
        }else{
            $adt1 = NULL;$acc1 = NULL;$ofe1 = NULL;
            $adt2 = NULL;$acc2 = NULL;$ofe2 = NULL;
        }
        $adt1 = (object) array('data'=>$adt1,'acc'=>$acc1,'ofe'=>$ofe1);
        $adt2 = (object) array('data'=>$adt2,'acc'=>$acc2,'ofe'=>$ofe2);
        //dd($ofe2);
        return view("vans.show", ["van"=>$van,"acc"=>$acc,"ofe"=>$ofe,"adt1"=>$adt1,"adt2"=>$adt2]);
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
