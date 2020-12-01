<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\corona_update_ban;

class corona_update_controller extends Controller
{
    
    // public function index(){

    // }



    public function store(Request $request){
    corona_update_ban::create($request->all());
    return back();

    }
}
