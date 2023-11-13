<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doors extends Model
{
    use HasFactory;

    protected $fillable =['MD_width','MD_height','MD_area','RD_width','RD_height','No_of_RD','RD_area'];
}
