<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories=Category::get();
        return view('category.index',compact('categories'));
    }

    public function view()
    {
        //
        $categories=Category::get();
        return view('category.view',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->except('_method','_token');
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imagename);
            $input['image'] = $imagename;
        }

        Category::create($input);
        return redirect()->route('category.view');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $category = Category::where('id',$id)->first();
        return view('category.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    function update($id)
    {
        $category=Category::where('id',$id)->first();
        return view('category.update',compact('category'));

    }

    /**
     * Update the specified resource in storage.
     */
    function edit($id,Request $request)
    {
        $category=Category::where('id',$id)->first();
        $input = $request->except('_method','_token');
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imagename);
            $input['image'] = $imagename;
        }
        $category->update($input);
        return redirect()->route('category.view');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Category::where('id',$id)->first()->delete();
        return redirect()->route('category.view');
    }
}
