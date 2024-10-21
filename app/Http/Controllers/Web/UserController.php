<?php

namespace App\Http\Controllers\Web;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('user.index', [
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'image_url' => 'required|image|mimes:png,jpg,jpeg|max:1024|file'
        ]);

        $image_url = $request->file('image_url');

        $name_file = time() . "_" . $image_url->getClientOriginalName();

        $path_file = 'profile_photo';

        $image_url->move($path_file, $name_file);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'image_url' => $path_file . '/' . $name_file,
            'password' => Hash::make($request->password),
            'password_confirmation' => $request->password_confirmation
        ]);

        Alert::success('Create User', 'Create user successfully');

        return redirect()->route('users.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);

        return view('user.edit', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email',
            'password' => 'nullable|min:8|confirmed',
            'image_url' => 'nullable|image|mimes:png,jpg,jpeg|max:1024|file'
        ]);

        $user = User::find($id);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
        ];

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        if ($request->hasFile('image_url')) {
            $image_url = $request->file('image_url');
            $name_file = time() . "_" . $image_url->getClientOriginalName();
            $path_file = 'profile_photo';
            $image_url->move($path_file, $name_file);

            $data['image_url'] = $path_file . '/' . $name_file;
        }

        $user->update($data);

        Alert::success('Update User', 'Update user successfully');

        return redirect()->route('users.edit', $user);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);

        $user->delete();

        Alert::success('Delete User', 'Delete user successfully');

        return back();
    }
}
