<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $userId = Auth::id();
        $orders = Order::where('user_id', $userId)->get();
        return view('order.index', compact('orders'));

    }

    public function indexForAdmin($id)
    {
        //
        $user = User::find($id);
        $orders = Order::where('user_id', $id)->get();
        return view('order.adminIndex', compact('orders'));

    }
    public function view()
    {
        //
        $orders=Order::get();
        return view('order.view',compact('orders'));
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
        //
        $user=Auth::user();
        $carts = Cart::where('user_id', $user->id)->get();
        $total_price = 0;
        foreach ($carts as $cart) {
            $total_price += $cart->totalprice;
        }
        $order = new Order();
        $order->user_id =$user->id;
        $order->price = $total_price;
        $order->save();
        foreach ($carts as $cart) {
            $order_product = new OrderProduct();
            $order_product->order_id = $order->id;
            $order_product->product_id = $cart->product_id;
            $order_product->save();
        }
        Cart::where('user_id',$user->id)->delete();
        return redirect()->back()->with('success', "Your Order has been made SUCCESSFULLY.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $order = Order::where('id',$id)->first();
        return view('order.show',compact('order'));
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
    }
}
