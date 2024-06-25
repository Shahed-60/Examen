<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Packages;
use App\Models\Product;
use App\Models\ProductsPerPackage;
use App\Models\User;

class PackagesController extends Controller
{
    public function show()
    {
        $packages = ProductsPerPackage::join('packages', 'products_per_package.package_id', '=', 'packages.id')
                                        ->join('products', 'products_per_package.product_id', '=', 'products.id')
                                        ->select('packages.*', 'products.name as product_name')
                                        ->orderBy('packages.id')
                                        ->get();         
        return view('packages.show', ['packages' => $packages]);
    }

    public function create()
    {
        $products = Product::all();
        $users = User::all();
        return view('packages.create', compact('products', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'date_created' => 'required|date',
            'products' => 'required|array',
            'products.*' => 'exists:products,id', // Valideer elk product ID bestaat in products table
            'user_id' => 'required|exists:users,id', // Valideer dat de user_id bestaat in users table
        ]);

        // Maak het pakket aan en koppel aan de geselecteerde gebruiker
        $package = Packages::create([
            'user_id' => $request->user_id,
            'name' => $request->name,
            'date_created' => $request->date_created,
            'date_picked_up' => $request->date_picked_up,
        ]);

        // Koppel producten aan het pakket
        $package->products()->attach($request->products);

        return redirect()->route('packages.show')
                         ->with('success', 'Package created successfully');
    }

    public function destroy($id)
    {
        try {
            // Find the package
            $package = Packages::findOrFail($id);
            
            // Delete all related records in products_per_package pivot table
            ProductsPerPackage::where('package_id', $id)->delete();
            
            // Delete the package itself
            $package->delete();

            return redirect()->route('packages.show')
                             ->with('success', 'Package deleted successfully');
        } catch (\Exception $e) {
            return redirect()->route('packages.show')
                             ->with('error', 'Failed to delete package. ' . $e->getMessage());
        }
    }
}
