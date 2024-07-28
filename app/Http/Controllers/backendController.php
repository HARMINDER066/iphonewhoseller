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
        $specSections = [
            'Launch' => ['Date', 'Status'],
            'Type' => ['Device Type', 'Series', 'Related Phones'],
            'Body' => ['Dimension', 'Weight', 'Build', 'Colors'],
            'Display' => ['Size', 'Type', 'Resolution', 'Protection', 'Refresh Rate', 'Touch Sampling Rate', 'Brightness', 'Others'],
            'Network' => ['SIM', 'Technology', '2G Bands', '3G Bands', '4G Bands', '5G Bands'],
            'Performance' => ['Chipset', 'CPU', 'GPU', 'OS', 'UI Version', 'Promised Updates'],
            'Memory' => ['RAM', 'Storage', 'Variant', 'SD Card'],
            'Back Cameras' => ['Dual', 'Features', 'Video'],
            'Front Camera' => ['Single', 'Features', 'Video'],
            'Security' => ['Fingerprint', 'Face Unlock'],
            'Audio' => ['Speaker', '3.5 mm Jack', 'Others'],
            'Sensors' => ['Type'],
            'Connectivity' => ['WLAN', 'Bluetooth', 'GPS', 'NFC', 'USB'],
            'Battery' => ['Type', 'Charging', 'Wireless Charging'],
            'Extras' => ['Features']
        ];
        

        return view('backend.product-add', compact('specSections'));
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
    
        $specifications = [];
    
        // Loop through the sections and fields to validate and collect data
        foreach ($request->input('specifications', []) as $section => $fields) {
            foreach ($fields as $field => $value) {
                // Make field validation nullable
               
    
                // Save the value in the specifications array if it is not empty
                if (!isset($specifications[$section])) {
                    $specifications[$section] = [];
                }
                if ($value !== null && $value !== '') {
                    $specifications[$section][$field] = $value;
                }
            }
        }
    
        $images = [];
        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $file) {
                $name = time() . rand(1, 100) . '.' . $file->extension();
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
        $product->specifications = json_encode($specifications); // Save specifications as JSON
        $product->save();
    
        return redirect()->route('products.list')->with('success', 'Product added successfully!');
    }
    
    // public function show(Product $product)
    // {
    //     return view('backend.show-product', compact('product'));
    // }

    public function edit(Product $product)
{
    $specSections = [
        'Launch' => ['Date', 'Status'],
        'Type' => ['Device Type', 'Series', 'Related Phones'],
        'Body' => ['Dimension', 'Weight', 'Build', 'Colors'],
        'Display' => ['Size', 'Type', 'Resolution', 'Protection', 'Refresh Rate', 'Touch Sampling Rate', 'Brightness', 'Others'],
        'Network' => ['SIM', 'Technology', '2G Bands', '3G Bands', '4G Bands', '5G Bands'],
        'Performance' => ['Chipset', 'CPU', 'GPU', 'OS', 'UI Version', 'Promised Updates'],
        'Memory' => ['RAM', 'Storage', 'Variant', 'SD Card'],
        'Back Cameras' => ['Dual', 'Features', 'Video'],
        'Front Camera' => ['Single', 'Features', 'Video'],
        'Security' => ['Fingerprint', 'Face Unlock'],
        'Audio' => ['Speaker', '3.5 mm Jack', 'Others'],
        'Sensors' => ['Type'],
        'Connectivity' => ['WLAN', 'Bluetooth', 'GPS', 'NFC', 'USB'],
        'Battery' => ['Type', 'Charging', 'Wireless Charging'],
        'Extras' => ['Features']
    ];

    return view('backend.product-edit', compact('product', 'specSections'));
}

   

public function update(Request $request, Product $product)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'category' => 'required|string',
        'parent_category' => 'required|string',
        'price' => 'required|numeric',
        'discount_price' => 'nullable|numeric',
        'images' => 'sometimes|array',
        'images.*' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'model' => 'nullable|string',
    ]);

    // Validate specifications
    $specifications = [];
    foreach ($request->input('specifications', []) as $section => $fields) {
        foreach ($fields as $field => $value) {
          
            if (!isset($specifications[$section])) {
                $specifications[$section] = [];
            }
            if ($value !== null && $value !== '') {
                $specifications[$section][$field] = $value;
            }
        }
    }

    // Update product fields
    $product->update([
        'name' => $request->name,
        'description' => $request->description,
        'category' => $request->category,
        'parent_category' => $request->parent_category,
        'price' => $request->price,
        'discount_price' => $request->discount_price,
        'model' => $request->model,
        'specifications' => json_encode($specifications), // Save specifications
    ]);

    // Handle images
    $existingImages = json_decode($product->images, true) ?? [];
    $removedImages = $request->removed_images ? explode(',', $request->removed_images) : [];
    $remainingImages = array_values(array_diff($existingImages, $removedImages));

    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('product'), $imageName);
            $remainingImages[] = $imageName;
        }
    }

    $product->images = json_encode($remainingImages);
    $product->save();

    return redirect()->route('products.list')->with('success', 'Product updated successfully!');
}



    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.list')->with('success', 'Product deleted successfully.');
    }
}
