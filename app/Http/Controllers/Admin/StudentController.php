<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(){
        $data["students"] =Student::all();
        return view("admin.student.index")->with($data);
    }

    public function create(){
        return view("admin.student.create");
       }

       public function store(Request $request){
        $data= $request->validate([
          "name_en"=>"required|string",
          "name_ar"=>"required|string",
          "email"=>"required|email",
          "specialty"=>"nullable|string",
        ]);
        Student::create($data);
        return redirect(route("admin.student.index"));
       }

       public function edit($id){
        $data["student"] =Student::findOrFail($id);
    
        return view("admin.student.edit")->with($data);
       }


       public function update(Request $request){
        $data= $request->validate([
            "name_en"=>"required|string",
            "name_ar"=>"required|string",
            "email"=>"required|email",
            "specialty"=>"nullable|string",
          ]);
        Student::findOrFail($request->student_id)->update($data);
        return redirect(route("admin.student.index"));
       }
    
       public function delete($id){
        Student::findOrFail($id)->delete();
    
        return redirect(route("admin.student.index"));
       }


       public function showCourses($id){
       $data['courses'] = Student::findOrFail($id)->courses;
       $data['student_id'] =$id;

       return view('admin.student.showCourses')->with($data);
       }

       public function approve($id , $c_id){
        DB::table('course_student')->where('student_id',$id)->where('course_id',$c_id)->update([
            'status'=>'approved',
        ]);
 
        return back();
        }

        public function reject($id , $c_id){
            DB::table('course_student')->where('student_id',$id)->where('course_id',$c_id)->update([
                'status'=>'rejected',
            ]);
     
            return back();
            }
}
