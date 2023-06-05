<?php

namespace App\Http\Controllers;

use App\Models\Teachers;
use App\Models\Appointments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function addview(){
        // return 'hello this is api';
        return view('admin.add_teacher');
    }

    public function ShowTeacherView(){
        if(Auth::id()){
            $data = teachers::all();
        return view('admin.Show_Teachers', compact('data'));
        } else{
        return redirect('home');
        
        }
    }

    public function ShowTeacherDetails(){
        $data=teachers::paginate(6);
        
        return view('admin.Teacher_Profile',compact('data'));
    }
    public function upload(Request $request){
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

        $teacher->save();

        return redirect()->back()->with('message','Teacher added successfully!');

    }

    public function showAppointments(){

        $data=appointments::paginate(6);
        
        return view('admin.showappointment',compact('data'));
    }

    public function approved($id){
        $data=appointments::find($id);
        $data->status='Approved';
        $data->save();

        return redirect()->back();
    }

    public function rejected($id){
        $data=appointments::find($id);
        $data->status='Rejected';
        $data->save();

        return redirect()->back();
    }

    public function view($id){
        $data=teachers::find($id);
        $data->save();

        return view('admin.Teacher_Profile',compact('data'));
    }

    public function delete($id){
        $data = teachers::find($id);
        $data->delete();

        return redirect()->back();
    }

    public function update(Request $request,$id){
        $data = teachers::find($id);
        
        return view('admin.Update_Profile',compact('data'));
    }

   public function editTeacher(Request $request,$id){

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
}


