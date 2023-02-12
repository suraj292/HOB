<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UserAddress;
use Illuminate\Http\Request;

class AddressController2 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $address = UserAddress::all();

        return response([
            'Address' => $address,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'user_name' => 'required',
            'mobile' => 'required|integer|digits:10',
            'address' => 'required',
            'pin_code' => 'required|integer',
            'landmark' => 'nullable',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required'
        ]);
        $address = UserAddress::where('user_id', $request->id)->get();
        if ($address->isEmpty()){
            $data['user_id'] = $request->id;
            $data['default'] = true;
        }else{
            $data['user_id'] = $request->id;
            $data['default'] = false;
        }
        $newAddress = UserAddress::create($data);
        return response([
            'address' => $newAddress,
            'check' => $address->isEmpty(),
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserAddress  $userAddress
     * @return \Illuminate\Http\Response
     */
    public function show(UserAddress $userAddress)
    {
        $address = $userAddress;

        return response([
            'Address' => $address,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserAddress  $userAddress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserAddress $userAddress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserAddress  $userAddress
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserAddress $userAddress)
    {
        //
    }
}
