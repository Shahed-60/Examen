<?php

namespace App\Models;

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
}
