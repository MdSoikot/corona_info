<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    public function userProfile(){
        if (auth()->user() && auth()->user()->role == 'user') {
            return view('frontend.profile.profile');
        }
        else{
            return view('frontend.home.user_login');
        }
    }

    public function updateUser(Request $request){
        $user = auth()->user();

        $user->name = $request->name;
        $user->mobile = $request->mobile;

        if ($request->hasFile('image')) {
            $file                   = $request->file('image');
            $thumbNameTmp           = md5_file($file->getRealPath());
            $extension              = $file->getClientOriginalExtension();
            $filename               = 'image-'.$thumbNameTmp.'_'.time().'.'.$extension;
            $path                   = 'uploads/users/';
            $url                    = $file->move($path, $filename);

            $user->image = $path.''.$filename;
        }

        $user->save();

        return redirect()->back()->with('message', 'success');
    }

    protected function setUserPassword(Request $request)
    {
        $user = auth()->user();

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->back()->with('message', 'success');
    }
}
