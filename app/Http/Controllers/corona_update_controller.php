<?php

namespace App\Http\Controllers;

use App\corona_update_ban;
use App\important_video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\services;

class Corona_update_controller extends Controller
{

    public function create(){
        return view('admin.corona-update.corona_update');
    }


    public function store(Request $request)
    {
        corona_update_ban::create($request->all());
        return redirect()->back();
    }
}
