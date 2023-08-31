<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\SiteContent;
use App\Models\Student;
use App\Models\Test;
use App\Models\Trainer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data['courses']=Course::select('id','name','smallDesc_'.app()->getLocale(),'price','desc_'.app()->getLocale(),'category_id','trainer_id','image')->orderBy('id','desc')->take(3)->get();
        // dd($data['courses']);
        $data['course_count']=Course::count();
        $data['trainer_count']=Trainer::count();
        $data['student_count']=Student::count();

        $data['tests'] = Test::all();

        $data['banner'] = SiteContent::select('content_'.app()->getLocale())->where('name','banner')->first();
        $data['awesome'] = SiteContent::select('content_'.app()->getLocale())->where('name','awesome')->first();
        $data['subtitle1'] = SiteContent::select('content_'.app()->getLocale())->where('name','subtitle1')->first();
        $data['subtitle2'] = SiteContent::select('content_'.app()->getLocale())->where('name','subtitle2')->first();
        $data['subtitle3'] = SiteContent::select('content_'.app()->getLocale())->where('name','subtitle3')->first();
        $data['about'] = SiteContent::select('content_'.app()->getLocale())->where('name','about')->first();
        $data['diffrentCources'] = SiteContent::select('content_'.app()->getLocale())->where('name','courses')->first();
        $data['advance'] = SiteContent::select('content_'.app()->getLocale())->where('name','advance')->first();
        $data['advance1'] = SiteContent::select('content_'.app()->getLocale())->where('name','advance1')->first();
        $data['advance2'] = SiteContent::select('content_'.app()->getLocale())->where('name','advance2')->first();
        $data['testominial'] = SiteContent::select('content_'.app()->getLocale())->where('name','testominial')->first();

        return view('front.home')->with($data);

    }
}
