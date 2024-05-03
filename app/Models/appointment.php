<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    use HasFactory;
    public $table ='appointment';
    public $timestamps = false;
    public $fillable=['Ap_ID','P_ID','D_ID','Date','Time','Order'];
}