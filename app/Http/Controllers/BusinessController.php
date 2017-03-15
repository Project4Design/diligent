<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Business;
use App\Business_details;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $business = Business::all();
        return view('business.index' , ['business' => $business]);
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
        //
        $business = new Business;
        $business->fill($request->all());
        if($business->save()){
            $details = new Business_details;
            $details->business_id = $business->id_insurance_bussiness;
            $details->fill($request->all());

            if($details->save()){
                $with = [
                'flash_message' => 'Business quote submitted successfully!',
                'flash_class' => 'alert-success'
                ];
            }else{
                $with = [
                'flash_message' => 'Error with Details',
                'flash_class' => 'alert-danger'
                ];
            }
        }else{
            $with = [
            'flash_message' => 'An error has ocurred.',
            'flash_class' => 'alert-danger'
            ];
        }

        return redirect("/business-quote")->with($with);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
