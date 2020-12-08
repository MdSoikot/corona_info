<?php

namespace App\Http\Controllers;
use App\important_video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Storage;
class Video_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allData=important_video::all();
        return view('admin/add_video',compact('allData'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('video_thumbnail')) {
            if ($request->file('video_thumbnail')->isValid()) {
                // $uploadPath = "public/uploads/thumbnails/";
                // $image_name = md5(date("Y:m:d:h:i:s"));


                // $request->video_thumbnail->storeAs($uploadPath, $image_name . "." . $request->file('video_thumbnail')->getClientOriginalExtension());
                // $url = Storage::url($uploadPath . $image_name . "." . $request->file('video_thumbnail')->getClientOriginalExtension());

                $file                   = $request->file('video_thumbnail');
                $thumbNameTmp           = md5_file($file->getRealPath());
                $extension              = $file->getClientOriginalExtension();
                $filename               = 'image-'.$thumbNameTmp.'_'.time().'.'.$extension;
                $path                   = 'uploads/thumbnails/';
                $url                    = $file->move($path, $filename);


                important_video::create([
                    'video_link' => $request->video_link,
                    'video_thumbnail' => $path.''.$filename,
                    'video_details' => $request->video_details

                ]);
                return back();
            }
        } else {
            important_video::create([
                'video_link' => $request->video_link,
                'video_details' => $request->video_details

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
