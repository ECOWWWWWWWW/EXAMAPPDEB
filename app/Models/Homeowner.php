<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Homeowner extends Model
{
    protected $fillable = [
        'id',
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'phone',
        'address',
        'created_at',
        'updated_at',
    ];
}
