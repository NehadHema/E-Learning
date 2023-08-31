<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as Image;

class CourseController extends Controller
{
    public function index(){
        $data["courses"] =Course::all();
        return view("admin.course.index")->with($data);
    }

    public function create(){
        $data['categories'] = Category::all();
        $data['trainers'] = Trainer::all();

        return view("admin.course.create")->with($data);
       }

       public function store(Request $request){
        $data= $request->validate([
          "name"=>"required|string",
          "price"=>"required|integer",
          "smallDesc_en"=>"required|string",
          "smallDesc_ar"=>"required|string",
          "desc_en"=>"required|string",
          "desc_ar"=>"required|string",
          "image"=>"required|image|mimes:png,jpg,jpeg",
          "category_id"=>"required|integer",
          "trainer_id"=>"required|integer",
        ]);
        $newName=$data['image']->hashName();
        Image::make($data['image'])->resize(50,50)->save(public_path("front/img/courses/$newName"));
        $data['image']=$newName;
        Course::create($data);
        return redirect(route("admin.course.index"));
       }

       public function edit($id){
        $data["course"] = Course::findOrFail($id);
        $data['categories'] = Category::all();
        $data['trainers'] = Trainer::all();

        return view("admin.course.edit")->with($data);
       }

       public function update(Request $request){
        $data= $request->validate([
            "name"=>"required|string",
            "price"=>"required|integer",
            "smallDesc_en"=>"required|string",
            "smallDesc_ar"=>"required|string",
            "desc_en"=>"required|string",
            "desc_ar"=>"required|string",
            "image"=>"required|image|mimes:png,jpg,jpeg",
            "category_id"=>"required|exists:categories,id",
            "trainer_id"=>"required|exists:trainers,id",
          ]);
          $oldImage = Course::findOrFail($request->course_id)->image;
          if ($request->hasFile('image')) {
            Storage::disk("front")->delete("img/courses/$oldImage");
            $newName=$data['image']->hashName();
            Image::make($data['image'])->resize(50,50)->save(public_path("front/img/courses/$newName"));
            $data['image']=$newName;
          } else {
           $data['image'] = $oldImage;
          }

        Course::findOrFail($request->course_id)->update($data);
        return redirect(route("admin.course.index"));
       }

       public function delete($id){
        $oldImage = Course::findOrFail($id)->image;
        Storage::disk("front")->delete("img/courses/$oldImage");

        Course::findOrFail($id)->delete();
    
        return redirect(route("admin.course.index"));
       }
}
