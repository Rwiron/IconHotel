<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'address',
        'position',
        'department',
        'salary',
        'hire_date',
        'birth_date',
        'gender',
        'photo',
        'status',
    ];
}