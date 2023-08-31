<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   public function index(){
    $data["cats"] =Category::all();
    return view("admin.category.index")->with($data);
   }

   public function create(){
    return view("admin.category.create");
   }

   public function store(Request $request){
    $data= $request->validate([
      "name_en"=>"required|string",
      "name_ar"=>"required|string",
    ]);
    Category::create($data);
    return redirect(route("admin.category.index"));
   }

   public function edit($id){
    $data["cat"] =Category::findOrFail($id);

    return view("admin.category.edit")->with($data);
   }

   public function update(Request $request){
    $data= $request->validate([
      "name_en"=>"required|string",
      "name_ar"=>"required|string",
    ]);
    Category::findOrFail($request->cat_id)->update($data);
    return redirect(route("admin.category.index"));
   }

   public function delete($id){
    Category::findOrFail($id)->delete();

    return redirect(route("admin.category.index"));
   }
}
