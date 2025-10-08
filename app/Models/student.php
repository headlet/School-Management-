<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class student extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'registration',
        'phone_number',
        'photo',
        'dob',
        'doa',
        'gender',
        'class',
        'address',
    ];
}
