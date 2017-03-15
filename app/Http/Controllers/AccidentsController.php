<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accidents;
use App\accidents_passengers;
use App\accidents_witnesses;
use Session;

class AccidentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accidents = Accidents::all();
        return view('accidents.index' , ['accidents' => $accidents]);
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
        $accident = new Accidents;
        $accident->fill($request->all());
        $accident->save();

            if ($request->input('witnesses_details') == 'Yes') {

              for($i = 1; $i < 4 ; $i++){
                $witnesses = new accidents_witnesses;
                $witnesses->id_management_accidents = $accident->id_accidents_management;
                $witnesses->witness_name = $request->input('witness_name_'.$i);
                $witnesses->witness_address = $request->input('witness_address_'.$i);
                $witnesses->witness_contact_number = $request->input('witness_contact_number_'.$i);
                $witnesses->save();

              }//fin for
            }//fin if witnesses is YES

            if ($request->input('passengers_injury') == 'Yes') {
                
                for($i = 1; $i < 4 ; $i++)
                {
                    $passengers = new accidents_passengers;
                    $passengers->id_accidents_injury = $accident->id_accidents_management;
                    $passengers->passenger_name = $request->input('passenger_name_'.$i);
                    $passengers->passenger_address = $request->input('passenger_address_'.$i);
                    $passengers->passenger_contact_number = $request->input('passenger_contact_number_'.$i);
                    $passengers->save();

                }//fin for passengers injury
            }//fin if passenger is YE
            return redirect("/accident-quote")->with(['message' => 'It has been submitted correctly']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $accidents = Accidents::findOrFail($id);
        //$accidents_witnesses = accidents_witnesses::findOrFail($id);
        dd($accidents->accidents_witnesses()->where('id_management_accidents','=',$id));

        

        return view('accidents.show' , ['accidents' => $accidents]);
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
