<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = [
        'name',
    ];

    // Define the relationship to User
    public function user()
    {
        return $this->hasMany(User::class);
    }
}
