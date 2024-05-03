<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_result extends Model
{
    use HasFactory;
    public $table ='user_result';
    public $timestamps = false;
    public $fillable=['U_ID','tpye','score'];
}