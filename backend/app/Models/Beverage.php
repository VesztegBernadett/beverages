<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beverage extends Model
{
    use HasFactory;
    protected $fillable=[
        'id','name','size','type','packaging','created_at','updated_at'
    ];
}
