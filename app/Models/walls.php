<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class walls extends Model
{
    use HasFactory;

    protected $fillable =['Wall_width','Wall_height','Wall_area'];
}
