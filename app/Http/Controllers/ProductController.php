<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $products=Product::all();
     return Inertia::render("Product/Products",compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Product/CreateProduct');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate(["name"=>'required',"price"=>"required",'description'=>'required']);
        $input=$request->all();
        Product::create($input);
        return Inertia::location(route('products.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $product= Product::findOrFail($id);
       return Inertia::render("Product/ShowProduct",compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product=Product::findOrFail($id);
        return Inertia::render('Product/EditProduct',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Product::findOrFail($id)->update($request->all());
        return Inertia::location(route('products.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::findOrFail($id)->delete();
        Inertia::location(route('products.index'));
    }
}
