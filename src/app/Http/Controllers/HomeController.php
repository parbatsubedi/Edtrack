<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Teachers;
use App\Models\Appointments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect()
    {
        $teacher = Teachers::all();
        if (Auth::id())
        {
            if(Auth::user()->usertype =='0')
            {
                $teacher = teachers::all();
                return view('user.home', compact('teacher'));
            }
            elseif(Auth::user()->usertype =='1')
            {
                return view('admin.home');
            }
        }

        else{
            return view('user.home',compact('teacher'));
        }
    }

    public function index()
    {
        $teacher = Teachers::all();
        if (Auth::id())
        {
            if(Auth::user()->usertype =='0')
            {
                $teacher = teachers::all();
                return view('user.home', compact('teacher'));
            }
            elseif(Auth::user()->usertype =='1')
            {
                return view('admin.home');
            }
        }
            return view('user.teachers',compact('teacher'));    
    }
    

    public function appointment(Request $request)
    {
        $data = new appointments;

        $data->name=$request->name;
        $data->email=$request->email;
        $data->date=$request->date;
        $data->number=$request->number;
        $data->teacher=$request->teacher;
        $data->message=$request->message;
        $data->status='In progress';
        if(Auth::id()){
        $data->user_id=Auth::user()->id;
        }
        $data->save();
        return redirect()->back()->with('message','Appointments Book Request Successful. We will contact you soon');

    }

    public function myAppointments()
    {
        if(Auth::id()){
            $userid=Auth::user()->id;
            $appointments= appointments::where('user_id',$userid )->get();
            return view('user.my_Appointments',compact('appointments'));
        } else {
            return redirect()->back();
        }
    }

    public function cancel_appointments($id)
    {
        $data = appointments::find($id);
        $data->delete();
        return redirect()->back()->with('message','Appointments Cancelled successfully');
    }



    // public function news(){
    //     return view('user.latestNews');
    // }
}
