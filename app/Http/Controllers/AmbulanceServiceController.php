<?php

namespace App\Http\Controllers;

use App\AmbulanceService;
use App\AmbulanceRent;
use Illuminate\Http\Request;

class AmbulanceServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ambulances  = AmbulanceService::all();

        return view('admin.ambulance-service.index', compact('ambulances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ambulance-service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'district' => 'required',
            'area' => 'required',
        ]);

        AmbulanceService::create($request->all());

        return redirect()->route('ambulance.index')->with('message', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AmbulanceService  $ambulanceService
     * @return \Illuminate\Http\Response
     */
    public function show(AmbulanceService $ambulanceService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AmbulanceService  $ambulanceService
     * @return \Illuminate\Http\Response
     */
    public function edit(AmbulanceService $ambulanceService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AmbulanceService  $ambulanceService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ambulanceService = AmbulanceService::find($id);
        $ambulanceService->update($request->all());

        return redirect()->back()->with('message', 'success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AmbulanceService  $ambulanceService
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ambulanceService = AmbulanceService::find($id);
        $ambulanceService->delete();

        return redirect()->back()->with('message', 'success');
    }

    public function ambulanceRentList(){
        $rentList = AmbulanceRent::orderBy('id', 'desc')->with(['ambulance', 'user'])->get();

        return view('admin.ambulance-service.ambulance-rent-list', compact('rentList'));
    }

    public function frontendAmbulanceList(){
        return view('frontend.ambulance.order-ambulance');
    }

    public function frontendGetAmbulance($district){
        $ambulances = AmbulanceService::where('district', $district)->where('is_reserved', '1')->get();

        return response()->json(['ambulances'=> $ambulances]);
    }
}
