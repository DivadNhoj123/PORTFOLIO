<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mastery extends Model
{
    use HasFactory;

    protected $fillable = [
        'talent',
        'type',
        'img'
    ];
}
