<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quiz extends Model
{
    use HasFactory;
    public $table ='quiz';
    public $timestamps = false;
    public $fillable=['question','type'];
}
