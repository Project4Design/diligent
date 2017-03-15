<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cars;
use App\Cars_motors_accidents;
use App\Cars_motors_offences;
use App\cars_additional_driver;

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
            if ($request->input('motor_accidents') == 'Yes') {
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

                    //echo $request->input('points_'.$i);
                }//fin for

            }// fin if offences

             if($request->input('additional_driver1') == "Yes")
             {
                $additional_driver = new cars_additional_driver;
                $additional_driver->id_cars_additional = $cars->id;
                $additional_driver->ca_title = $request->input('ca_title_1');
                $additional_driver->ca_first_name = $request->input('ca_first_name_1');
                $additional_driver->ca_middle_name = $request->input('ca_middle_name_1');
                $additional_driver->ca_sur_name = $request->input('ca_sur_name_1');
                $additional_driver->ca_relationship = $request->input('ca_relationship_1');
                $additional_driver->ca_birthdate = $request->input('ca_birthdate_1');
                $additional_driver->ca_marital_status = $request->input('ca_marital_status_1');
                $additional_driver->ca_employment_status = $request->input('ca_employment_status_1');
                $additional_driver->ca_employed_occupation = $request->input('ca_employed_occupation_1');
                $additional_driver->ca_employed_business = $request->input('ca_employed_business_1');
                $additional_driver->ca_type_license = $request->input('ca_type_license_1');
                $additional_driver->ca_period_license = $request->input('ca_period_license_1');
                $additional_driver->ca_date_provitional_license = $request->input('ca_date_provitional_license_1');
                $additional_driver->ca_license_enter = $request->input('ca_license_enter_1');
                $additional_driver->ca_license_number = $request->input('ca_license_number_1');
                $additional_driver->ca_dvla_medical = $request->input('ca_dvla_medical_1');
                $additional_driver->ca_born_uk = $request->input('ca_born_uk_1');
                $additional_driver->ca_uk_resident = $request->input('ca_uk_resident_1');
                $additional_driver->ca_other_vehicle = $request->input('ca_other_vehicle_1');
                $additional_driver->ca_non_motoring_convictions = $request->input('ca_non_motoring_convictions_1');
                $additional_driver->ca_motor_accidents = $request->input('ca_motor_accidents_1');
                $additional_driver->ca_motor_offences = $request->input('ca_motor_offences_1');
                $additional_driver->save();

                    if ($request->input('ca_motor_accidents_1') == "Yes")
                     {

                            for($i = 1; $i < 5 ; $i++){
                                $cars_accidents = new Cars_motors_accidents;
                                $cars_accidents->id_cars = $cars->id;
                                $cars_accidents->id_additional_driver = $additional_driver->id_cars_additional;
                                $cars_accidents->type = $request->input('type_'.$i.'_1');
                                $cars_accidents->date = $request->input('date_'.$i.'_1');
                                $cars_accidents->damage = $request->input('damage_'.$i.'_1');
                                $cars_accidents->cost = $request->input('cost_'.$i.'_1');
                                $cars_accidents->fault = $request->input('fault_'.$i.'_1');
                                $cars_accidents->any_injuries = $request->input('any_injuries_'.$i.'_1');
                                $cars_accidents->save();

                            }//fin for cars_accidents              
                        
                    }// fin if motor accidentes additional driver

                    if ($request->input('ca_motor_offences_1') == 'Yes')
                     {
                        for($i = 1; $i < 5 ; $i++){
                            $cars_offences = new Cars_motors_offences;
                            $cars_offences->id_cars_offences = $cars->id;
                            $cars_offences->id_additional_drive_offences = $additional_driver->id_cars_additional;
                            $cars_offences->conviction_code = $request->input('conviction_code_'.$i.'_1');
                            $cars_offences->date_conviction = $request->input('date_conviction_'.$i.'_1');
                            $cars_offences->points = $request->input('points_'.$i.'_1');
                            $cars_offences->fine_libras = $request->input('fine_libras_'.$i.'_1');
                            $cars_offences->ban_month = $request->input('ban_month_'.$i.'_1');
                            $cars_offences->save();

                       }//fin for
                    } //fin if motor offence yes

                    //Additional driver 2
                    if ($request->input('additional_driver2') == 'Yes') {

                        $additional_driver = new cars_additional_driver;
                        $additional_driver->id_cars_additional = $cars->id;
                        $additional_driver->ca_title = $request->input('ca_title_2');
                        $additional_driver->ca_first_name = $request->input('ca_first_name_2');
                        $additional_driver->ca_middle_name = $request->input('ca_middle_name_2');
                        $additional_driver->ca_sur_name = $request->input('ca_sur_name_2');
                        $additional_driver->ca_relationship = $request->input('ca_relationship_2');
                        $additional_driver->ca_birthdate = $request->input('ca_birthdate_2');
                        $additional_driver->ca_marital_status = $request->input('ca_marital_status_2');
                        $additional_driver->ca_employment_status = $request->input('ca_employment_status_2');
                        $additional_driver->ca_employed_occupation = $request->input('ca_employed_occupation_2');
                        $additional_driver->ca_employed_business = $request->input('ca_employed_business_2');
                        $additional_driver->ca_type_license = $request->input('ca_type_license_2');
                        $additional_driver->ca_period_license = $request->input('ca_period_license_2');
                        $additional_driver->ca_date_provitional_license = $request->input('ca_date_provitional_license_2');
                        $additional_driver->ca_license_enter = $request->input('ca_license_enter_2');
                        $additional_driver->ca_license_number = $request->input('ca_license_number_2');
                        $additional_driver->ca_dvla_medical = $request->input('ca_dvla_medical_2');
                        $additional_driver->ca_born_uk = $request->input('ca_born_uk_2');
                        $additional_driver->ca_uk_resident = $request->input('ca_uk_resident_2');
                        $additional_driver->ca_other_vehicle = $request->input('ca_other_vehicle_2');
                        $additional_driver->ca_non_motoring_convictions = $request->input('ca_non_motoring_convictions_2');
                        $additional_driver->ca_motor_accidents = $request->input('ca_motor_accidents_2');
                        $additional_driver->ca_motor_offences = $request->input('ca_motor_offences_2');
                        $additional_driver->save();

                            if ($request->input('ca_motor_accidents_2') == "Yes")
                             {

                                for($i = 1; $i < 5 ; $i++){
                                    $cars_accidents = new Cars_motors_accidents;
                                    $cars_accidents->id_cars = $cars->id;
                                    $cars_accidents->id_additional_driver = $additional_driver->id;
                                    $cars_accidents->type = $request->input('type_'.$i.'_2');
                                    $cars_accidents->date = $request->input('date_'.$i.'_2');
                                    $cars_accidents->damage = $request->input('damage_'.$i.'_2');
                                    $cars_accidents->cost = $request->input('cost_'.$i.'_2');
                                    $cars_accidents->fault = $request->input('fault_'.$i.'_2');
                                    $cars_accidents->any_injuries = $request->input('any_injuries_'.$i.'_2');
                                    $cars_accidents->save();

                            }//fin for cars_accidents              
                        
                         }// fin if motor accidentes additional driver

                         if ($request->input('ca_motor_offences_2') == 'Yes')
                         {
                            for($i = 1; $i < 5 ; $i++){
                                $cars_offences = new Cars_motors_offences;
                                $cars_offences->id_cars_offences = $cars->id;
                                $cars_offences->id_additional_drive_offences = $additional_driver->id_cars_additional;
                                $cars_offences->conviction_code = $request->input('conviction_code_'.$i.'_2');
                                $cars_offences->date_conviction = $request->input('date_conviction_'.$i.'_2');
                                $cars_offences->points = $request->input('points_'.$i.'_2');
                                $cars_offences->fine_libras = $request->input('fine_libras_'.$i.'_2');
                                $cars_offences->ban_month = $request->input('ban_month_'.$i.'_2');
                                $cars_offences->save();
                            }//fin for



                         } //fin if motor offence yes

                    }

            }//fin YES additional driver 1


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
        //dd($with);
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
        
        $car = Cars::findOrFail($id);
        return view("cars.show", ["car" => $car]);
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
