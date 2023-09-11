<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user=Auth::user();
        $carts=Cart::where('user_id','=',$user->id)->get();
        $total = 0;
        foreach ($carts as $cart) {
            $total += $cart->product->price * $cart->quantity;
        }
        return view('cart.index', compact('carts','total'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $product = Product::find($request->product_id);
        $cart=Cart::where('product_id',$product->id)->first();
        if($cart){
            $cart->quantity = $cart->quantity + 1;
            $cart->save();
        }
        else{
        $cart = new Cart();
        $cart->product_id = $product->id;
        $cart->user_id = $user->id;
        $cart->quantity = 1;
        $cart->totalprice = $product->price;
        $cart->save();
        }
        return redirect()->back()->with('success', "{$product->name} added to your cart SUCCESSFULLY.");
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $product = Cart::where('product_id','=',$id);
        $product->delete();
        return redirect()->route('cart.index');

    }

}
