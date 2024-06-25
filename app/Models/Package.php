<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Package extends Model
{
    protected $table = 'packages';

    protected $fillable = [
        'date_created',
        'date_picked_up',
    ];

    // Add any relationships or additional methods here
    public function productsPerPackage()
    {
        return $this->hasMany(ProductsPerPackage::class);
    }
}
