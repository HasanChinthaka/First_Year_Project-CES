<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class windows extends Model
{
    use HasFactory;

    protected $fillable =['Win_length'.'Win_width','Win_area'];
}
