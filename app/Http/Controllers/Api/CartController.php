<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\ProductColorImage;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = Cart::all();

        return response([
            'Cart' => $cart,
        ]);
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
            'user_id' => 'required',
            'product_id' => 'required',
            'product_color_id' => 'required',
            'quantity' => 'nullable|integer',
            'color' => 'nullable',
            'image' => 'nullable',
            'price' => 'required',
            'offer_price' => 'nullable',
        ]);
        $product = ProductColorImage::find($request->product_color_id);
        $data['color'] = $product->color_icon;
//        $data['price'] = $product->color_icon;
        $data['image'] = explode(',', $product->product_images)[0];
        $cart = Cart::create($data);
        return response([
            'data' => $cart,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cart = Cart::find($id);

        return response([
            'Cart' => $cart,
        ]);
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
            'quantity' => 'nullable|integer',
        ]);
        $cart = Cart::find($id);
        $cart->update($data);
        return response([
            'data' => $cart,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart = Cart::find($id);
        $cart->forceDelete();
        return response([
            'Message' => 'Cart has been removed',
        ]);
    }
}
