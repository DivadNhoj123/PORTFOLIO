<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'birthday',
        'age',
        'degree',
        'address',
        'country',
        'zipcode',
        'img',
        'status',
        'phone',
        'email',
        'description',
        'freelance',
        'resume'
    ];
}
