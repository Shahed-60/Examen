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

    public static function getProductsWithCategory()
    {
        return self::join('categories', 'categories.id', '=', 'products.category_id')
            ->select('products.name', 'products.id', 'products.category_id', 'products.amount', 'products.barcode', 'products.description', 'products.distributors_id', 'products.created_at', 'products.updated_at', 'categories.name as category_name')
            ->get();
    }
}
