<?php

namespace App\Http\Controllers;

use illuminate\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Distributor;
use Illuminate\Support\Facades\Log;

class DistributorController extends Controller
{
    public function index()
    {
        $distributors = Distributor::all();
        return view('distributors.index', compact('distributors'));
    }
    public function show($id)
    {
        // Haal de leverancier op met de producten 
        $distributorWithProducts = Distributor::distributorWithProducts($id);
        return view('distributors.product', compact('distributorWithProducts'));
        // var_dump($distributorWithProducts);
    }
    // Verwijder de leverancier en redirect terug
    public function destroy(Distributor $distributor)
    {
        $distributor->delete();
        return redirect()->route('distributors.index');
    }
    public function edit(Distributor $distributor)
    {
        return view('distributors.edit', compact('distributor'));
    }
    // Update de leverancier en een try catch block om de error te loggen en een error bericht te geven
    public function update(Request $request, Distributor $distributor)
    {
        try {
            // Valideer de request en update de leverancier
            $distributor->update($request->all());

            return redirect()->route('distributors.index')->with('success', 'Leverancier succesvol bijgewerkt.');
        } catch (\Exception $e) {
            // Log de error
            Log::error($e->getMessage());

            // Redirect terug met een error bericht
            return back()->with('error', 'Er is een fout opgetreden bij het bijwerken van de leverancier.');
        }
    }
    public function store(Request $request)
    {
        // Valideer de request en maak een nieuwe leverancier aan
        $request->validate([
            'contact_person' => 'required',
            'company_name' => 'required',
            'adress' => 'required',
            'postal_code' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'country' => 'required',
            'next_delivery' => 'required',
        ]);

        Distributor::create($request->all());

        return redirect()->route('distributors.index')
            ->with('success', 'Leverancier succesvol toegevoegd.');
    }


    public function create()
    {
        return view('distributors.create');
    }
}
