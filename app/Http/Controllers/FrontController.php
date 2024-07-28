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

    
        public function compare(Request $request)
{
    $p1 = $request->input('p1');
    $p2 = $request->input('p2');
    $p3 = $request->input('p3');

    $product1 = $p1 ? Product::find($p1) : null;
    $product2 = $p2 ? Product::find($p2) : null;
    $product3 = $p3 ? Product::find($p3) : null;

    $product1Specs = $product1 ? json_decode($product1->specifications, true) : null;
    $product2Specs = $product2 ? json_decode($product2->specifications, true) : null;
    $product3Specs = $product3 ? json_decode($product3->specifications, true) : null;

    return view('frontend.compare', compact('product1', 'product2', 'product3', 'product1Specs', 'product2Specs', 'product3Specs'));
}
    
public function fetchproduct(Request $request)
{
    $searchTerm = $request->input('s');
    $products = Product::where('name', 'like', '%' . $searchTerm . '%')->get();

    $html = '';

    foreach ($products as $product) {
        $images = json_decode($product->images, true);
        $imageSrc = $images ? asset('product/' . $images[0]) : 'https://via.placeholder.com/96'; // Placeholder if no image

        $html .= '<div class="product-wrap">';
        $html .= '<div class="compare-page-search-select" data-id="' . $product->id . '">';
        $html .= '<img width="96" height="96" src="' . $imageSrc . '" class="attachment-thumbnail size-thumbnail wp-post-image" alt="' . $product->name . '" decoding="async" />';
        $html .= '<h6>'.$product->name.'</h6>';
        $html .= '</div>';
        $html .= '</div>';
    }

    return response()->json(['result' => $html]);
}
}
