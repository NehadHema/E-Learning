@extends('admin.layout')
@section('content')
<div class="container m-5 p-5 d-flex justify-content-between">
  <h4>{{trans('messages.Students')}}</h4>
  <a href="{{route("admin.student.create")}}" type="button" class="btn btn-success me-auto">{{trans('messages.Add Student')}}</a>
</div>
   <div class="container  mx-5 pt-2 px-5 ">

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">{{trans('messages.Student’s Name')}}</th>
            <th scope="col">{{trans('messages.Email')}}</th>
            <th scope="col">{{trans('messages.Specialty')}}</th>
            <th scope="col">{{trans('messages.Action')}}</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$student->{'name_'.app()->getLocale()} }}</td>
                <td> {{$student->email }} </td>
                <td>{{$student->specialty}}</td>
                <td>
                  <a href="{{url("/students/edit/$student->id")}}" type="button" class="btn btn-primary">{{trans('messages.Edit')}}</a>
                  <a href="{{route("admin.student.delete",$student->id)}}" type="button" class="btn btn-danger">{{trans('messages.Delete')}}</a>
                  <a href="{{route("admin.student.showCourses",$student->id)}}" type="button" class="btn btn-info">{{trans('messages.Show Courses')}} </a>
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>    
 </div> 
@endsection