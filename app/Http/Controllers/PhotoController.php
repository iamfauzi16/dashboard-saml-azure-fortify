<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class PhotoController extends Controller
{
    public function index()
    {
        $photo = User::where('id', Auth::user()->id)->first();
        return view('profile', [
            'photo' => $photo
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'image_url' => 'required|image|mimes:png,jpg,jpeg|max:1024|file'
        ]);
    
        $image_url = $request->file('image_url');
    
        $name_file = time() . "_" . $image_url->getClientOriginalName();
    
        $path_file = 'profile_photo';
    
        $image_url->move($path_file, $name_file);

        $userCheck = User::where('id', Auth::user()->id)->first();
    
        $userCheck->update([
            'image_url' => $path_file . '/' . $name_file
        ]);

        Alert::success('Update Photo', 'Update photo successfully');
        return redirect()->route('profile');

    }
}
