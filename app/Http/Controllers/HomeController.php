<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use App\corona_update_ban;
use App\important_video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\services;
use App\info_services;
use Illuminate\Support\Arr;

use App\News;

class HomeController extends Controller
{
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $infected_update = DB::table('corona_update_bans')->where('case','new affected')->orderBy('created_at', 'DESC')->first();
        $death_update = DB::table('corona_update_bans')->where('case','death')->orderBy('created_at', 'DESC')->first();
        $cure_update = DB::table('corona_update_bans')->where('case','cure')->orderBy('created_at', 'DESC')->first();
        $test_update = DB::table('corona_update_bans')->where('case','test')->orderBy('created_at', 'DESC')->first();
        $video_Data=important_video::orderBy('id', 'desc')->take(6)->get();

        $services = services::orderBy('id', 'desc')->take(6)->get();
        $info_services = info_services::orderBy('id', 'desc')->take(6)->get();

        $latestNews = News::orderBy('id', 'desc')->take(5)->get();

        $response = Http::get('https://api.covid19api.com/summary');
        
        $data=$response->json();
        $filtered = Arr::first($data['Countries'], function ($value, $key) {
            if($value['Country'] == "Bangladesh"){
                return $key;
                }
        });

        // dd($filtered);

        return view('frontend.home.index', compact('infected_update','death_update','cure_update','test_update','video_Data', 'services', 'latestNews','info_services','filtered'));
    }
}
