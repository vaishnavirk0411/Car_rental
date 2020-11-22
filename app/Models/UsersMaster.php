<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersMaster extends Model
{
    use HasFactory;
    protected $primaryKey = "user_id";
    protected $table = 'users_master'; 
}
