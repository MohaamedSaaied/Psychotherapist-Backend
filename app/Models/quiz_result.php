<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quiz_result extends Model
{
    use HasFactory;
    public $table ='quiz_results';
    public $timestamps = false;
    public $fillable=['score','answer'];
}
