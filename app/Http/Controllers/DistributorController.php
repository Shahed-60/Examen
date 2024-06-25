<?php

namespace App\Http\Controllers;

use illuminate\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Distributor;

class DistributorController extends Controller
{
    public function index()
    {
        $distributors = Distributor::all();
        return view('distributors.index', compact('distributors'));
    }
    public function show($id)
    {
        $distributor = Distributor::find($id);
        return view('distributors.show', compact('distributor'));
    }
    // {
    //     $distributorWithProducts = Distributor::distributorWithProducts();

    //     return view('distributors.product', ['distributorWithProducts' => $distributorWithProducts]);
    // }
}
