<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        // Simpan data ke database
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('users.index')->with('success', 'User created successfully');
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
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */

     public function update(Request $request, string $id)
     {
         $messages = [
             'required' => ':Attribute harus diisi.',
             'email' => 'Isi :attribute dengan format yang benar',
             'numeric' => 'Isi :attribute dengan angka'
         ];

         $validator = Validator::make($request->all(), [
             'name' => 'required',
             'email' => 'required|email',
             'notelp' => 'required|numeric',
             'alamat' => 'required',
         ], $messages);

         if ($validator->fails()) {
             return redirect()->back()->withErrors($validator)->withInput();
         }

         // ELOQUENT
         $user = User::find($id);
         $user->name = $request->name;
         $user->email = $request->email;
         $user->notelp = $request->notelp;
         $user->alamat = $request->alamat;

         $user->save();

         return redirect()->route('users.index')->with('success', 'User updated successfully');
     }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);

        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully');

    }
}
