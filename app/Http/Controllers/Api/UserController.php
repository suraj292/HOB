<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserStore;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return response([
            'users' => $users,
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UserStore $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStore $request)
    {
//        $request->validate($request->rules(), $request->messages());
        $user = User::create([
            'name' => $request->name,
            'avtar' => $request->avtar,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'alternate_mobile' => $request->alternate_mobile,
            'password' => Hash::make($request->password),
        ]);

        return response([
            'user' => $user,
            'token' => $user->createToken($request->email)->plainTextToken,
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'max:25',
            'role' => 'nullable',
            'avtar' => 'nullable|image',
            'email' => 'email|unique:users',
            'mobile' => 'integer|digits:10|unique:users,mobile,alternate_mobile',
            'alternate_mobile' => 'nullable|integer|digits:10|unique:users,mobile,alternate_mobile',
            'password' => 'required|min:8',
            'confirm_password' => 'nullable|same:password',
        ]);
        $user->update($request->all());

        return response([
            'user' => $user,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

}
