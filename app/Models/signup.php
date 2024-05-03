<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class signup extends Model
{
    use HasFactory;
    public $table ='user';
    public $timestamps = false;
    public $fillable=['P_ID','P_Name','Gender','B_Date','Record','img','username','password'];
}

