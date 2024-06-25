<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductsPerPackage;
use Illuminate\Support\Facades\Log;
use function Laravel\Prompts\select;

class StockManagementController extends Controller
{
    public function read()
    {
        try {
            $stock = Product::getProductsWithCategory();

            // Check if $stock is empty (no records found)
            if ($stock->isEmpty()) {
                // Handle the case where no products are found, perhaps redirect or show a message
                return redirect()->back()->with('error', 'No products found.');
            }

            return view('stock_management.read', ['stock' => $stock]);
        } catch (\Exception $e) {
            // Log the error or handle it gracefully
            Log::error('Error fetching stock: ' . $e->getMessage());

            // Return an error view or redirect with a message
            return redirect()->back()->with(
                'error',
                'Error fetching stock. Please try again later.'
            );
        }
    }


    public function destroy($productId)
    {
        // Check if the product is in use in a package
        $packageId = ProductsPerPackage::where('product_id', $productId)->value('package_id');

        // If the product is in use, redirect back with a message
        if ($packageId) {
            return redirect()->route('stock_management.read')->with('status', 'Dit product is in gebruik in een van onze voedselpakketen, en kan dus niet verwijderd worden');
        } else {
            // If the product is not in use, delete the product
            $product = Product::find($productId);
            $product->delete();

            // Redirect back with a message
            return redirect()->route('stock_management.read')->with('status', 'Product succesvol verwijderd!');
        }
    }

    public function update($productId)
    {
        // Get the product data
        $productData = Product::find($productId);
        // Get all categories
        $categories = \App\Models\Category::all();

        // Return the view with the product data and categories
        return view('stock_management/update', ['productData' => $productData, 'categories' => $categories]);
    }

    public function edit(Request $request)
    {
        // Validate the request
        $request->validate([
            'productname' => 'required',
            'amount' => 'required',
            'barcode' => 'required',
            'category_id' => 'required',
        ]);

        // Update the product
        $product = Product::find($request->productId);
        $product->barcode = $request->input('barcode');
        $product->name = $request->input('productname');
        $product->category_id = $request->input('category_id');
        $product->amount = $request->input('amount');
        $product->save();

        // Redirect back with a message
        return redirect()->route('stock_management.read')->with('status', 'Product succesvol aangepast!');
    }

    public function create()
    {
        // Get all categories
        $categories = \App\Models\Category::all();

        // Return the view with the categories
        return view('stock_management/create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'barcode' => 'required',
            'productname' => 'required',
            'category_id' => 'required',
            'amount' => 'required',
        ]);

        $product = new Product();
        $product->barcode = $request->input('barcode');
        $product->name = $request->input('productname');
        $product->category_id = $request->input('category_id');
        $product->amount = $request->input('amount');
        $product->save();


        // Redirect back with a message
        return redirect()->route('stock_management.read')->with('status', 'Nieuw product succesvol toegevoegd!');
    }
}
