<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class FrontController extends Controller
{
    public function home()
    {

        $products = Product::where('category','phone')->get();
        $speakers = Product::where('category','speaker')->get();
        return view('frontend.index', compact('products', 'speakers')); 
    }

    public function productDetails($id)
    {
        $product = Product::findOrFail($id);
        $modals = Product::where('id','!=',$id)->where('parent_category',$product->parent_category)->get();
        if (request()->ajax()) {
            $html = view('frontend.partials.product-details', compact('product', 'modals'))->render();
            return response()->json(['html' => $html]);
        }
        return view('frontend.product-detail', compact('product','modals'));
    }
    public function category($type)
    {

        $products = Product::where('category',$type)->get();
        return view('frontend.category', compact('products')); 
    }
    
}
