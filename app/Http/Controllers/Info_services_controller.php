<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info_services;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Info_services_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function frontEndInfoService(){

        $services = Info_services::orderBy('id', 'desc')->paginate(15);

        return view('frontend.service.services', compact('services'));
    }

    public function frontEndSingleInfoService($slug){

        $service = Info_services::where('slug', $slug)->first();

        return view('frontend.info_services.single_info_service', compact('service'));
    }

    public function index()
    {
        $allData = Info_services::all();

        return view('admin.information_services.index', compact('allData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.information_services.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('icon_image')) {
            if ($request->file('icon_image')->isValid()) {
                $file                   = $request->file('icon_image');
                $thumbNameTmp           = md5_file($file->getRealPath());
                $extension              = $file->getClientOriginalExtension();
                $filename               = 'image-'.$thumbNameTmp.'_'.time().'.'.$extension;
                $path                   = 'uploads/info_services/';
                $url                    = $file->move($path, $filename);
                Info_services::create([
                    'service_name' => $request->service_name,
                    'slug' => Str::kebab($request->service_name),
                    'icon_image' => $path.''.$filename,
                    'title' => $request->title,
                    'short_desc' => $request->short_desc,
                    'content' => $request->content,

                ]);
                return back();
            }
        } else {
            Info_services::create([
                'service_name' => $request->service_name,
                'slug' => Str::kebab($request->service_name),
                'title' => $request->title,
                'short_desc' => $request->short_desc,
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
        $updateData = Info_services::findorfail($id);
        if ($request->hasFile('icon_image')) {
            if ($request->file('icon_image')->isValid()) {
                $file                   = $request->file('icon_image');
                $thumbNameTmp           = md5_file($file->getRealPath());
                $extension              = $file->getClientOriginalExtension();
                $filename               = 'image-'.$thumbNameTmp.'_'.time().'.'.$extension;
                $path                   = 'uploads/info_services/';
                $url                    = $file->move($path, $filename); Storage::url($uploadPath . $image_name . "." . $request->file('icon_image')->getClientOriginalExtension());

                $updateData->update([
                    'service_name' => $request->service_name,
                    'slug' => Str::kebab($request->service_name),
                    'icon_image' => $path.''.$filename,
                    'title' => $request->title,
                    'short_desc' => $request->short_desc,
                    'content' => $request->content,


                ]);
                $update_confirm_msg = 1;
                return redirect()->back()->with("update_confirm_msg", $update_confirm_msg);
            }
        } else {
            $updateData->update($request->all());
            $update_confirm_msg = 1;
            return redirect()->back()->with("update_confirm_msg", $update_confirm_msg);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteData = Info_services::findorfail($id);
        $deleteData->delete($deleteData);
        $delete_confirm_msg = 1;
        return redirect()->back()->with("delete_confirm_msg", $delete_confirm_msg);
    }
}
