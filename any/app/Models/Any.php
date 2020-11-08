<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Any extends Model
{
    use HasFactory;

    protected $fillable = [
        'anyFirst', 'anySecond','anyThree', 'AnyFour'
    ];
}
