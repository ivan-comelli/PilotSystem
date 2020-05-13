<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    public function index()
    {
        $users = new UserResource(User::all());
        return view('users', ['users' => $users->resource]);
    }

    public function store(Request $request)
    {
        $user = new User;
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->location = $request->input('location');
        $user->birthdate = $request->input('birthdate');
        $user->role = $request->input('role');
        $user->file = $request->input('file');
        $user->category_id = $request->input('category_id');
        $user->save();

        return $user;
    }

    public function show($id)
    {
        return new UserResource(User::where('id', '=', $id)->get());
    }

    public function update(Request $request, $id)
    {
        $user = User::where('id', '=', $id)->first();
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->location = $request->input('location');
        $user->birthdate = $request->input('birthdate');
        $user->role = $request->input('role');
        $user->file = $request->input('file');
        $user->category_id = $request->input('category_id');
        $user->save();

        return $user;
    }

    public function destroy($id)
    {
        $user = User::where('id', '=', $id)->first();
        $user->delete();
    }
}
