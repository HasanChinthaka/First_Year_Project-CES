<?php

namespace App\Http\Controllers;

use App\Models\foundation_details;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DownloadEstimateController extends Controller
{
    public function download()
    {
        $data = foundation_details::all();
        
        return view("estimate",['data' => $data]);
    }
}
