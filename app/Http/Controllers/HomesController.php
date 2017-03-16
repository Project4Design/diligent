<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homes;
use App\Home_losses;

class HomesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homes = Homes::all();
        return view('homes.index' , ['homes' => $homes]);
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
        $homes = new Homes;
        $homes->fill($request->all());
        if($homes->save())
        {

            if ($request->input('property_losses_damage') == "Yes") 
            {

                $home_losses = new Home_losses;
                $home_losses->home_insurance_id = $homes->id_home_insurance;
                $home_losses->much_was_claim = $request->input('much_was_claim');
                $home_losses->type_claim = $request->input('type_claim');
                $home_losses->date_claim = $request->input('date_claim');
                $home_losses->claim_settled = $request->input('claim_settled');
                $home_losses->save();

                
                
            }//fin property == YES

            $with = [
            'flash_message' => 'Home quote submitted successfully!',
            'flash_class' => 'alert-success'
            ];

        }else{

            $with = [
            'flash_message' => 'An error has ocurred.',
            'flash_class' => 'alert-danger',
            'alert-important' => true
            ];
        }//fin save de home

        return redirect("/home-quote")->with($with);

            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $homes = Homes::findOrFail($id);
        $home_losses = Home_losses::where('home_insurance_id',$id)->get();
        return view('homes.show', ['homes' => $homes,'losses' => $home_losses]);

        
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
