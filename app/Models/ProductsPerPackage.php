<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class ProductsPerPackage extends Model
{
    protected $table = 'products_per_package';

    protected $fillable = [
        'product_id',
        'package_id',
    ];

    // Add any additional relationships or methods here
    public function product()
    {
        return $this->hasMany(Product::class, 'product_id');
    }

    public function package()
    {
        return $this->belongsTo(Packages::class, 'package_id');
    }
}
