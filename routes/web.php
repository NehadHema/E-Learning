<?php

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CourseController as AdminCourseController;
use App\Http\Controllers\admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\TrainerController;
use App\Http\Controllers\FatoorahController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\CourseController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\MessageController;
use App\Http\Controllers\MailController;
use App\Http\Middleware\AdminAuth;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::controller(HomeController::class)->group(function(){
  Route::get("/","index");
});


Route::controller(CourseController::class)->group(function(){
  Route::get("category/{id}","category")->name("front.category");//courses with category
  Route::get("courses","courses")->name("front.courses");
  Route::get("allcourses","allcourses")->name("front.allcourses");//all courses
  Route::get("category/{id}/courses/{c_id}","show")->name("front.courseDetails");//course details

});

/* Route::controller(CourseController::class)->name('front.')->group(function(){
  Route::get("category/{id}","category")->name("category");//courses with category
  Route::get("courses","courses")->name("courses");
  Route::get("allcourses","allcourses")->name("allcourses");//all courses
  Route::get("category/{id}/courses/{c_id}","show")->name("courseDetails");//course details
}); */

Route::controller(ContactController::class)->group(function(){
  Route::get("contact","index")->name("front.contact");
});


Route::controller(MessageController::class)->group(function(){
  Route::post("/message/newsletter","newsletter")->name("front.message.newsletter");
  Route::post("/message/contact","contact")->name("front.message.contact");
  Route::post("/message/enroll","enroll")->name("front.message.enroll"); 
});

Route::controller(AdminHomeController::class)->group(function(){
  Route::middleware('AdminAuth:admin')->group(function(){
    Route::get("/dashboard","index")->name("admin.dashboard.index");
  });
});

Route::controller(AuthController::class)->group(function(){
  Route::get("/dashboard/login","login")->name("admin.dashboard.login");
  Route::post("/dashboard/do_login","do_login")->name("admin.dashboard.do_login");
  Route::middleware('AdminAuth:admin')->group(function(){
    Route::get("/dashboard/logout","logout")->name("admin.dashboard.logout");

  });

});

Route::controller(CategoryController::class)->group(function(){
  Route::middleware('AdminAuth:admin')->group(function(){

  Route::get("/categories","index")->name("admin.category.index");
  Route::get("/categories/create","create")->name("admin.category.create");
  Route::post("/categories/store","store")->name("admin.category.store");
  Route::get("/categories/edit/{id}","edit")->name("admin.category.edit");
  Route::post("/categories/update","update")->name("admin.category.update");
  Route::get("/categories/delete/{id}","delete")->name("admin.category.delete");

});

});


Route::controller(TrainerController::class)->group(function(){
  Route::middleware('AdminAuth:admin')->group(function(){

  Route::get("/trainers","index")->name("admin.trainer.index");
  Route::get("/trainers/create","create")->name("admin.trainer.create");
  Route::post("/trainers/store","store")->name("admin.trainer.store");
  Route::get("/trainers/edit/{id}","edit")->name("admin.trainer.edit");
  Route::post("/trainers/update","update")->name("admin.trainer.update");
  Route::get("/trainers/delete/{id}","delete")->name("admin.trainer.delete");

  Route::resources("/trainers");

});

});



Route::controller(AdminCourseController::class)->group(function(){
  Route::middleware('AdminAuth:admin')->group(function(){

  Route::get("/courses","index")->name("admin.course.index");
  Route::get("/courses/create","create")->name("admin.course.create");
  Route::post("/courses/store","store")->name("admin.course.store");
  Route::get("/courses/edit/{id}","edit")->name("admin.course.edit");
  Route::post("/courses/update","update")->name("admin.course.update");
  Route::get("/courses/delete/{id}","delete")->name("admin.course.delete");

});

});


Route::controller(StudentController::class)->group(function(){
  Route::middleware('AdminAuth:admin')->group(function(){

  Route::get("/students","index")->name("admin.student.index");
  Route::get("/students/create","create")->name("admin.student.create");
  Route::post("/students/store","store")->name("admin.student.store");
  Route::get("/students/edit/{id}","edit")->name("admin.student.edit");
  Route::post("/students/update","update")->name("admin.student.update");
  Route::get("/students/delete/{id}","delete")->name("admin.student.delete");
  Route::get("/students/showCourses/{id}","showCourses")->name("admin.student.showCourses");
  Route::get("/students/{id}/approve/{c_id}","approve")->name("admin.student.approve");
  Route::get("/students/{id}/reject/{c_id}","reject")->name("admin.student.reject");


});
});


// for mailing

Route::controller(MailController::class)->group(function(){
  Route::post('/email','sendEmail')->name('send.email');  
});



// for quote

Route::get("/quote",function(){
  return view('front.quote');
});

// languages
Route::get("change/{lang}",function($lang){
if($lang=='ar'){
  session()->put('lang','ar');
}else{
  session()->put('lang','en');
}
return redirect()->back();
});







Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
