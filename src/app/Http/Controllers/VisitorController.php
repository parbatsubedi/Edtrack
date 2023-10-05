<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function visitors(Request $request){
        return view('visitorForm');
    }
}
