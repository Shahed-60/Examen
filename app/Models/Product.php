<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name',
        'category_id',
        'amount',
        'barcode',
        'description',
        'distributors_id'
    ];

    // Add any relationships or additional methods here
    public function productsPerPackage()
    {
        return $this->hasMany(ProductsPerPackage::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function distributor()
    {
        return $this->belongsTo(Distributor::class, 'distributors_id');
    }
}
