<?php

namespace App\Http\Controllers;

use App\corona_update_ban;
use App\important_video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\services;
use App\News;

class Dashboard_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infected_update = DB::table('corona_update_bans')->where('case','new affected')->orderBy('created_at', 'DESC')->first();
        $death_update = DB::table('corona_update_bans')->where('case','death')->orderBy('created_at', 'DESC')->first();
        $cure_update = DB::table('corona_update_bans')->where('case','cure')->orderBy('created_at', 'DESC')->first();
        $test_update = DB::table('corona_update_bans')->where('case','test')->orderBy('created_at', 'DESC')->first();
        $total_videos = DB::table('important_videos')->count('id');
        $total_services = DB::table('services')->count('id');
        $total_news = DB::table('News')->count('id');

        $latestNews = News::orderBy('id', 'desc')->take(5)->get();
        return view('admin.homepage', compact('infected_update','death_update','cure_update','test_update','total_videos', 'total_services', 'total_news'));

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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
