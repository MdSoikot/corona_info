<?php

namespace App\Http\Controllers;

use App\corona_update_ban;
use App\important_video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\services;

class Corona_update_controller extends Controller
{

    public function index()
    {
        $infected_update = DB::table('corona_update_bans')->where('case','new affected')->orderBy('created_at', 'DESC')->first();
        $death_update = DB::table('corona_update_bans')->where('case','death')->orderBy('created_at', 'DESC')->first();
        $cure_update = DB::table('corona_update_bans')->where('case','cure')->orderBy('created_at', 'DESC')->first();
        $test_update = DB::table('corona_update_bans')->where('case','test')->orderBy('created_at', 'DESC')->first();
        $video_Data=important_video::orderBy('id', 'desc')->take(6)->get();

        $services = services::orderBy('id', 'desc')->take(6)->get();


        return view('frontend.home.index', compact('infected_update','death_update','cure_update','test_update','video_Data', 'services'));
    }


    public function store(Request $request)
    {
        corona_update_ban::create($request->all());
        return back();
    }
}
