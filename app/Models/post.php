<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    public $table ='post';
    public $timestamps = false;
    public $fillable=['Po_ID','U_ID','post','img'];
}