<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class un_doctor extends Model
{
    use HasFactory;
    public $table ='un_doctor';
    public $timestamps = false;
    public $fillable=['D_ID','D_Name','B_Date','Field','EXP_Years','Rate','Location','Phone','username','password','img'];
}
