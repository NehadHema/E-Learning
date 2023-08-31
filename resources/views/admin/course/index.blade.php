@extends('admin.layout')
@section('content')
<div class="container m-5 p-5 d-flex justify-content-between">
  <h4>{{trans('messages.Courses')}}</h4>
  <a href="{{route("admin.course.create")}}" type="button" class="btn btn-success me-auto">{{trans('messages.Add Courses')}}</a>
</div>
   <div class="container mx-5 pt-2 px-5 ">

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">{{trans('messages.Image')}}</th>
            <th scope="col">{{trans('messages.Course Name')}}</th>
            <th scope="col">{{trans('messages.Price')}}</th>
            <th scope="col">{{trans('messages.Description')}}</th>
            <th scope="col">{{trans('messages.Action')}}</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td><img src="{{asset("front/img/courses/$course->image")}}" height="50px" alt="" srcset=""></td>
                <td>{{$course->name}}</td>
                <td> {{$course->price }} </td>
                <td>{{$course->{'smallDesc_'.app()->getLocale()} }}</td>
                <td>
                  <a href="{{url("/courses/edit/$course->id")}}" type="button" class="btn btn-primary">{{trans('messages.Edit')}}</a>
                  <a href="{{route("admin.course.delete",$course->id)}}" type="button" class="btn btn-danger">{{trans('messages.Delete')}}</a>
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>    
 </div> 
@endsection