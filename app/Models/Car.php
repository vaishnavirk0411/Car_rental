<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $primaryKey = "car_id";
    protected $table = 'car'; 
    protected $fillable = ['car_image'];
}
