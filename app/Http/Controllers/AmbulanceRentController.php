<?php

namespace App\Http\Controllers;

use App\AmbulanceRent;
use App\AmbulanceService;
use Illuminate\Http\Request;
use Auth;

class AmbulanceRentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        $ambulanceRent = new AmbulanceRent;

        $rentNumber = 100+AmbulanceRent::count();
        $ambulanceRent->rent_id = $rentNumber;
        $ambulanceRent->ambulance_id = $request->ambulance_id;
        $ambulanceRent->user_id = Auth::id();
        $ambulanceRent->district = $request->district;
        $ambulanceRent->area = $request->area;
        $ambulanceRent->save();

        $ambulance = AmbulanceService::find($request->ambulance_id);
        $ambulance->is_reserved = 0;
        $ambulance->save();

        return redirect()->route('user_homepage');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AmbulanceRent  $ambulanceRent
     * @return \Illuminate\Http\Response
     */
    public function show(AmbulanceRent $ambulanceRent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AmbulanceRent  $ambulanceRent
     * @return \Illuminate\Http\Response
     */
    public function edit(AmbulanceRent $ambulanceRent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AmbulanceRent  $ambulanceRent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AmbulanceRent $ambulanceRent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AmbulanceRent  $ambulanceRent
     * @return \Illuminate\Http\Response
     */
    public function destroy(AmbulanceRent $ambulanceRent)
    {
        //
    }
}
