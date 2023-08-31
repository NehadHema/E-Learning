<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as Image;

class TrainerController extends Controller
{
    public function index(){
        $data["trainers"] =Trainer::all();
        return view("admin.trainer.index")->with($data);
    }

    public function create(){
        return view("admin.trainer.create");
       }

       public function store(Request $request){
        $data= $request->validate([
          "name_en"=>"required|string",
          "name_ar"=>"required|string",
          "phone"=>"nullable|string",
          "specialty"=>"required|string",
          "image"=>"required|image|mimes:png,jpg,jpeg",
        ]);
        $newName=$data['image']->hashName();
        Image::make($data['image'])->resize(50,50)->save(public_path("front/img/trainers/$newName"));
        $data['image']=$newName;
        Trainer::create($data);
        return redirect(route("admin.trainer.index"));
       }


       public function edit($id){
        $data["trainer"] =Trainer::findOrFail($id);
    
        return view("admin.trainer.edit")->with($data);
       }

       public function update(Request $request){
        $data= $request->validate([
            "name_en"=>"required|string",
            "name_ar"=>"required|string",
            "phone"=>"nullable|string",
            "specialty"=>"required|string",
            "image"=>"nullable|image|mimes:png,jpg,jpeg",
            "trainer_id"=>"required|exists:trainers,id",
          ]);
          $oldImage = Trainer::findOrFail($request->trainer_id)->image;
          if ($request->hasFile('image')) {
            Storage::disk("front")->delete("img/trainers/$oldImage");
            $newName=$data['image']->hashName();
            Image::make($data['image'])->resize(50,50)->save(public_path("front/img/trainers/$newName"));
            $data['image']=$newName;
          } else {
           $data['image'] = $oldImage;
          }
         
        Trainer::findOrFail($request->trainer_id)->update($data);
        return redirect(route("admin.trainer.index"));
       }

       public function delete($id){
        $oldImage = Trainer::findOrFail($id)->image;
        Storage::disk("front")->delete("img/trainers/$oldImage");

        Trainer::findOrFail($id)->delete();
    
        return redirect(route("admin.trainer.index"));
       }

}
