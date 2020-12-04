<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\services;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Storage;

class Service_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allData = services::all();
        return view('./admin/show_service', compact('allData'));
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
        if ($request->hasFile('service_image')) {
            if ($request->file('service_image')->isValid()) {
                // $image = $request->service_image;
                // $originalName=$image->getClientOriginalName();
                // $randomNumber=rand(0,99999999999);
                // $image_name=$randomNumber.$originalName; 
                $uploadPath = "public/uploads/images/";
                $image_name = md5(date("Y:m:d:h:i:s"));
                $request->service_image->storeAs($uploadPath, $image_name . "." . $request->file('service_image')->getClientOriginalExtension());
                $url = Storage::url($uploadPath . $image_name . "." . $request->file('service_image')->getClientOriginalExtension());
                services::create([
                    'service_name' => $request->service_name,
                    'service_image' => $url,
                    'title' => $request->title,
                    'content' => $request->content,

                ]);
                return back();
            }
        } else {
            services::create([
                'service_name' => $request->service_name,
                'title' => $request->title,
                'content' => $request->content,

            ]);
            return back();
        }
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
        $updateData = services::findorfail($id);
        if ($request->hasFile('service_image')) {
            if ($request->file('service_image')->isValid()) {
                $uploadPath = "public/uploads/images/";
                $image_name = md5(date("Y:m:d:h:i:s"));
                $request->service_image->storeAs($uploadPath, $image_name . "." . $request->file('service_image')->getClientOriginalExtension());
                $url = Storage::url($uploadPath . $image_name . "." . $request->file('service_image')->getClientOriginalExtension());
                $updateData->update([
                    'service_name' => $request->service_name,
                    'service_image' => $url,
                    'title' => $request->title,
                    'content' => $request->content

                ]);
                $update_confirm_msg = 1;
                return redirect('services')->with("update_confirm_msg", $update_confirm_msg);
            }
        } else {
            $updateData->update($request->all());
            $update_confirm_msg = 1;
            return redirect('services')->with("update_confirm_msg", $update_confirm_msg);
        }

        // $newData = $request->all();
        // $updateData = services::findorfail($id);
        // $updateData->update($newData);
        // $update_confirm_msg = 1;
        // return redirect('services')->with("update_confirm_msg", $update_confirm_msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteData = services::findorfail($id);
        $deleteData->delete($deleteData);
        $delete_confirm_msg = 1;
        return redirect('services')->with("delete_confirm_msg", $delete_confirm_msg);
    }
}
