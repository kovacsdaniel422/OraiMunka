<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Macska extends Model
{
    use HasFactory;
    protected $fillable = [
        'nev',
        'nem',
        'szuletes',
    ];
}
