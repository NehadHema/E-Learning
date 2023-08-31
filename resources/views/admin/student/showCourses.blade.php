@extends('admin.layout')
@section('content')
<div class="container m-5 p-5 d-flex justify-content-between">
  <h4>Courses</h4>
</div>
   <div class="container  mx-5 pt-2 px-5 ">

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Courses Name</th>
            <th scope="col">Status</th>

            <th scope="col">Action</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$course->name}}</td>
                <td>{{$course->pivot->status}}</td>

                <td>
@if ( $course->pivot->status != 'approved')
<a href="{{route("admin.student.approve",[$student_id,$course->id])}}" type="button" class="btn btn-primary">Approve</a>
@endif
@if ( $course->pivot->status != 'rejected')
<a href="{{route("admin.student.reject",[$student_id,$course->id])}}" type="button" class="btn btn-danger">Reject</a>
@endif
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>    
 </div> 
@endsection