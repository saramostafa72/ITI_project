<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $products=Product::get();
        return view('product.index',['products'=>$products]);

    }
    public function view()
    {
        //
        $products=Product::get();
        return view('product.view',compact('products'));
    }

    public function search(Request $request)
    {
        //
        if($request->search){
            $searchProducts = Product::where('name','like',$request->search)->paginate(15);
            if($searchProducts){
            return view('product.search',compact('searchProducts'));
            }
            else{
                return redirect()->back()->with('fail','Empty Search');
            }
        }


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('product.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name'=>'required',
            'price' => 'required|numeric|min:0',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' =>'required|numeric|exists:categories,id',

        ]);

        $input = $request->except('_method','_token');
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imagename);
            $input['image'] = $imagename;
        }

        Product::create($input);
        return redirect()->route('product.view');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $product = Product::where('id',$id)->first();
        return view('product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id,Request $request)
    {
        //
        $product=Product::where('id',$id)->first();
        $input = $request->except('_method','_token');
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imagename);
            $input['image'] = $imagename;
        }
        $product->update($input);
        return redirect()->route('product.view');
    }

    /**
     * Update the specified resource in storage.
     */
    function update($id)
    {
        //
        $product=Product::where('id',$id)->first();
        return view('product.update',compact('product'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Product::where('id',$id)->first()->delete();
       return redirect()->route('product.view');
    }

    function ProductsOrder($id)
    {
        //
        $order = Order::find($id);
        $products = $order->products;
        return view('product.productorders', compact('products'));

    }

    function adminProductsOrder($id)
    {
        //
        $order = Order::find($id);
        $products = $order->products;
        return view('product.adminProductsOrder', compact('products'));

    }

}
