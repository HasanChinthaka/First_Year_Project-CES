<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class foundation_details extends Model
{
    use HasFactory;

    protected $fillable =['C_line_length'.'F_width','F_height','F_volume'];
}
