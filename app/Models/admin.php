<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;
    public $table ='admin';
    public $timestamps = false;
    public $fillable=['A_ID','A_Name','username','password'];
}
