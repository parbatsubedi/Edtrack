<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Teachers;
use App\Models\Appointments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\SendEmailNotification;
use Illuminate\Support\Facades\Notification;
use Notifications;

class AdminController extends Controller
{
    public function addview(){
        
        if (Auth::id())
        {
            if(Auth::user()->usertype =='1')
            {
            return view('admin.add_teacher');
            }else{
                return view('user.home');
            }
        }else{
            return view('user.home');
        }
    }

    public function ShowTeacherView(){
        if (Auth::id())
        {
            if(Auth::user()->usertype =='1')
            {
            $data = teachers::all();
            return view('admin.Show_Teachers', compact('data'));
            }
        } else{
        return redirect('user.home');
        
        }
    }

    public function ShowTeacherDetails(){
        if (Auth::id())
        {
            if(Auth::user()->usertype =='1')
            {
            $data=Teachers::paginate(6);
        
            return view('admin.Teacher_Profile',compact('data'));
            }
        } else{
        return redirect('user.home');
        }

    }

    public function upload(Request $request){
        if (Auth::id())
        {
            if(Auth::user()->usertype =='1')
            {
                $teacher= new Teachers;
                $image=$request->image;
                $imageName=time().'.'.$image->getClientOriginalExtension();
                $department = $request->department;
                $departmentFolder = '';

                //folder based on the selected department value
                switch ($department) {
                    case 'HeadOfCampus':
                        $departmentFolder = 'HeadOfCampusFolder';
                        break;
                    case 'IT':
                        $departmentFolder = 'ITFolder';
                        break;
                    case 'Science':
                        $departmentFolder = 'ScienceFolder';
                        break;
                    case 'Management':
                        $departmentFolder = 'ManagementFolder';
                        break;
                    case 'Humanities':
                        $departmentFolder = 'HumanitiesFolder';
                        break;
                    case 'Law':
                        $departmentFolder = 'LawFolder';
                        break;
                    default:
                    //if any of the folders is not found then default is set to default folder
                        $departmentFolder = 'defaultFolder';
                }
                $request->image->move('teacherImage/'.$departmentFolder, $imageName);
                $path='teacherImage/'.$departmentFolder.'/'.$imageName;
                // dd($path);

                $teacher->image=$path;
                // dd($imageName);

                $teacher->name=$request->name;
                $teacher->phone=$request->phone;
                $teacher->room=$request->room;
                $teacher->department=$request->department;
                $teacher->email=$request->email;

                $teacher->save();

                return redirect()->back()->with('message','Teacher added successfully!');
            }
        }else{
            return redirect('user.home');
        }

    }

    public function showAppointments(){
        if (Auth::id())
        {
            if(Auth::user()->usertype =='1')
            {
                $data=appointments::paginate(6);
                
                return view('admin.showappointment',compact('data'));
            }
        }else{
                return redirect('user.home');
            }
    }

    public function approved($id){
        if (Auth::id())
        {
            if(Auth::user()->usertype =='1')
            {
                $data=appointments::find($id);
                $data->status='Approved';
                $data->save();

                return redirect()->back();
            }
        } else{
                return redirect('user.home');
                }
    }

    public function rejected($id){
        if (Auth::id())
        {
            if(Auth::user()->usertype =='1')
            {
                $data=appointments::find($id);
                $data->status='Rejected';
                $data->save();

                return redirect()->back();
            }

        } else{
                return redirect('user.home');
        }
    }

    public function view($id){
        if (Auth::id())
        {
            if(Auth::user()->usertype =='1')
            {
                $data=teachers::find($id);
                $data->save();

                return view('admin.Teacher_Profile',compact('data'));
            }
        }else{
                return redirect('user.home');
            }
    }

    public function delete($id){
        if (Auth::id())
        {
            if(Auth::user()->usertype =='1')
            {
                $data = teachers::find($id);
                $data->delete();

                return redirect()->back();
            }
        }else{
            return redirect('user.home');
        }
    }

    public function update(Request $request,$id){
        if (Auth::id())
        {
            if(Auth::user()->usertype =='1')
            {
                $data = teachers::find($id);
                
                return view('admin.Update_Profile',compact('data'));
            }
        }else{
            return redirect('user.home');
        }
    }

    public function editTeacher(Request $request,$id){
        if (Auth::id())
        {
            if(Auth::user()->usertype =='1')
            {
                $teacher= teachers::find($id);

                
                $teacher->name=$request->name;
                $teacher->phone=$request->phone;
                $teacher->room=$request->room;
                $teacher->department=$request->department;

                $image=$request->image;
                $department = $request->department;
                $departmentFolder = '';

                //folder based on the selected department value
                switch ($department) {
                    case 'HeadOfCampus':
                        $departmentFolder = 'HeadOfCampusFolder';
                        break;
                    case 'IT':
                        $departmentFolder = 'ITFolder';
                        break;
                    case 'Science':
                        $departmentFolder = 'ScienceFolder';
                        break;
                    case 'Management':
                        $departmentFolder = 'ManagementFolder';
                        break;
                    case 'Humanities':
                        $departmentFolder = 'HumanitiesFolder';
                        break;
                    case 'Law':
                        $departmentFolder = 'LawFolder';
                        break;
                    default:
                    //if any of the folders is not found then default is set to default folder
                        $departmentFolder = 'defaultFolder';
                }
                if($image){
                $imageName=time().'.'.$image->getClientOriginalExtension();

                $request->image->move('teacherImage/'.$departmentFolder, $imageName);
                $path='teacherImage/'.$departmentFolder.'/'.$imageName;
                // dd($path);

                $teacher->image=$path;
                // dd($imageName);
                }


                $teacher->save();
                return redirect()->back()->with('message','Teacher data updated successfully!');
            }
        }else{
                return redirect('user.home');
            }
    }

    public function showUser(){
        if (Auth::id())
        {
            if(Auth::user()->usertype =='1')
            {
                $user = User::paginate(6);
                return view('admin.Show_Users',compact('user'));
            }
        } else{
            return redirect('user.home');
        }
    }

    public function emailview($id){
        if (Auth::id())
        {
            if(Auth::user()->usertype =='1')
            {
                $data= appointments::find($id);
                return view('admin.email_view',compact('data'));
            }
        }else{
            return redirect('user.home');
        }
    }

    public function sendEmail(Request $request,$id){
        $data = appointments::find($id);

        $details=[
            'greetings'=> $request->greeting,
            'body'=> $request->body,
            'actiontext'=> $request->actiontext,
            'actionurl'=> $request->actionurl,
            'endpart'=> $request->endpart,
        ];

        Notification::send($data,new sendEmailNotification($details));

        return redirect()->back()->with('message','Email sent successfully!');
    } 
}


