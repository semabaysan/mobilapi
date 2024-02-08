<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fren extends Model
{
    protected $fillable = ['name', 'price', 'image' ];
    use HasFactory;
}
