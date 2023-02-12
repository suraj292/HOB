<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UserAddress;
use Illuminate\Http\Request;

class AddressController extends Controller
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
     * Display a listing of the resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function userAddress(Request  $request)
    {
        $address = UserAddress::where('user_id', $request->id)->get();

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $address = UserAddress::find($id);

        return response([
            'Address' => $address
        ], 200);
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
        $address = UserAddress::find($id);
        $address->update($data);

        return response([
            'message' => 'Address updated',
            'Address' => $address
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $address = UserAddress::find($id);
        $address->delete();

        return response([
            'message' => 'Address has been deleted',
            'Address' => $address
        ]);
    }
}
