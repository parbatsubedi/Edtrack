<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teachers;

class TeachersController extends Controller
{
    //
    public function index(){
        
        $teacher = teachers::all();
        if($teacher->count() > 0){
            $data = [
                'status' => 200,
                'teacher' => $teacher
            ];
            return response()->json($data,200);
        }else{
            $data = [
                'status' => 404,
                'teacher' => 'no records found',
            ];
            return response()->json($data,404);        
        }
    }
}
