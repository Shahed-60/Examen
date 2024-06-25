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
        'address',
        'postal_code',
        'phone_number',
        'email',
        'country',
        'next_delivery',
    ];
    public static function distributorWithProducts($id)
    {
        return DB::table('distributors')
            ->join('products', 'distributors.id', '=', 'products.distributors_id')
            ->where('distributors.id', $id)
            ->select('distributors.*', 'products.name as productName', 'products.description as productDescription')
            ->get();
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'distributors_id');
    }
}
