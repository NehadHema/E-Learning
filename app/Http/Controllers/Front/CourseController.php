<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\Test;
use Illuminate\Http\Request;

class CourseController extends Controller
{
   public function category($id){
    $data['categories'] = Category::findOrFail($id);
    $data['courses'] = Course::where('category_id',$id)->Paginate(3);

    // dd($data);
    return view('front.courses.cat')->with($data);
}

public function courses(){
    $data['courses'] = Course::Paginate(6);

    // dd($data);
    return view('front.courses.courses')->with($data);

}

public function show($id,$c_id){
    $data['courses'] = Course::findOrFail($c_id);
    $data['categories'] = Category::findOrFail($id);

    return view('front.courses.details')->with($data);


}

public function allcourses(){
    $data['courses'] = Course::all();

    return view('front.courses.allcourses')->with($data);
}
}
