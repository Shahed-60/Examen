<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    protected $table = 'distributors';
    protected $fillable = [
        'contact_person',
        'company_name',
        'adress',
        'postal_code',
        'phone_number',
        'email',
        'country',
        'next_delivery',
    ];
    // Haal de leverancier op met de producten 
    public static function distributorWithProducts($id)
    {
        return DB::table('products')
            ->join('distributors', 'products.distributors_id', '=', 'distributors.id',)
            ->where('distributors.id', $id)
            ->select('products.name', 'products.amount', 'products.barcode', 'products.description')
            ->get();
    }
    public function products()
    {
        return $this->hasMany(Product::class, 'distributors_id');
    }
}
