<?php

namespace App\Http\Controllers;

use App\Models\doors;
use App\Models\foundation_details;
use App\Models\walls;
use App\Models\windows;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CreateestimateController extends Controller
{
    public function createestimate()
    {
        return view("create-estimate");
    }
    public function store(Request $request)
    {    
        $formdata=request()->all();
        
        // Calculate Foundation Volume
        $F_volume = $formdata['C_line_length']*$formdata['F_width']*$formdata['F_height'];

        // Insert fundation details to database

        $f_details = new foundation_details;
        $f_details->C_line_length = $request->C_line_length;
        $f_details->F_width = $request->F_width;
        $f_details->F_height = $request->F_height;
        $f_details->F_volume = $F_volume;
        $f_details->save();        

        // Calculate Windows Area
        $Win_area = $formdata['Win_height']*$formdata['Win_width']*$formdata['No_of_win'];
        // Insert windows details to database        
        $windows = new windows();
        $windows->Win_height = $request->Win_height;
        $windows->Win_width = $request->Win_width;
        $windows->No_of_win = $request->No_of_win;
        $windows->Win_area = $Win_area;
        $windows->save();
        // $windows->RD_height = $request->RD_height;
        // $windows->RD_width = $request->RD_width;
        // $windows->No_of_RD = $request->No_of_RD;
        // $windows->RD_area = $RD_area;

        // Calculate Doors Area
        $MD_area = $formdata['MD_height']*$formdata['MD_width'];
        $RD_area = $formdata['RD_height']*$formdata['RD_width']*$formdata['No_of_RD'];
        $D_area = $MD_area+$RD_area;
        // Insert door details to database        
        $doors = new doors();
        $doors->MD_height = $request->MD_height;
        $doors->MD_width = $request->MD_width;
        $doors->MD_area = $MD_area;
        $doors->RD_height = $request->RD_height;
        $doors->RD_width = $request->RD_width;
        $doors->No_of_RD = $request->No_of_RD;
        $doors->RD_area = $RD_area;
        $doors->save();
        
        // Calculate Wall Area
        $Wall_area = $formdata['Wall_height']*$formdata['C_line_length'];
        $Wall_area = $Wall_area - ($D_area+$Win_area);
        // Get Selecr Wall Material
        $material = request()->get('wall_material_list');
        // Insert wall details to database        
        $wall = new walls();
        $wall->Wall_Material_Type = $material;
        $wall->Wall_height = $request->Wall_height;
        $wall->Wall_width = $request->Wall_width;
        $wall->Wall_area = $Wall_area;
        $wall->save();


        return view('estimate');
    }
}
