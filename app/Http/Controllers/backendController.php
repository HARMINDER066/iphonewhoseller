<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class backendController extends Controller
{
    public function list()
    {
        $products = Product::all();
        return view('backend.product-list', compact('products'));
    }

    public function create()
    {
        return view('backend.product-add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string',
            'parent_category' => 'required|string',
            'model' => 'nullable|string',
            'price' => 'required|numeric',
            'discount_price' => 'nullable|numeric',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $images = [];
        if($request->hasfile('images')) {
            foreach($request->file('images') as $file) {
                $name = time().rand(1,100).'.'.$file->extension();
                $file->move(public_path('product'), $name);
                $images[] = $name;
            }
        }

        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->category = $request->category;
        $product->parent_category = $request->parent_category;
        $product->model = $request->model;
        $product->price = $request->price;
        $product->discount_price = $request->discount_price;
        $product->images = json_encode($images);
        $product->save();

        return redirect()->back()->with('success', 'Product added successfully!');
    }
    // public function show(Product $product)
    // {
    //     return view('backend.show-product', compact('product'));
    // }

    public function edit(Product $product)
    {
        //return view('backend.edit-product', compact('product'));
    }

    // public function update(Request $request, Product $product)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'category' => 'required',
    //         'price' => 'required|numeric',
    //         'image_url' => 'required|url',
    //     ]);

    //     $product->update($request->all());

    //     return redirect()->route('product.list')->with('success', 'Product updated successfully.');
    // }

    public function destroy(Product $product)
    {
        $product->delete();
       // return redirect()->route('product.list')->with('success', 'Product deleted successfully.');
    }
}
