<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telephone extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'department',
        'address',
        'employee_number',
        'office_phone',
        'home_phone',
    ];
}
