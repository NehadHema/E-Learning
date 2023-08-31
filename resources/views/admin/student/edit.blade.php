@extends('admin.layout')
@section('content')
<div class="container m-5 p-5">
    @include('admin.inc.error')
      <form action="{{route("admin.student.update")}}" method="post" >
         @csrf
         <input type="hidden" name="student_id" value="{{$student->id}}">
          <div class="mb-3">
            <label for="name" class="form-label">{{trans('messages.Student Name in English')}}</label>
            <input type="text" name="name_en" class="form-control" value="{{$student->name_en}}" id="name" aria-describedby="name">
          </div>
          <div class="mb-3">
            <label for="name" class="form-label">{{trans('messages.Student Name in Arabic')}}</label>
            <input type="text" name="name_ar" class="form-control" value="{{$student->name_ar}}" id="name" aria-describedby="name">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">{{trans('messages.Email')}}</label>
            <input type="email" name="email" class="form-control" value="{{$student->email}}" id="email" aria-describedby="email">
          </div>
          <div class="mb-3">
            <label for="specialty" class="form-label">{{trans('messages.Specialty')}}</label>
            <input type="text" name="specialty" class="form-control" value="{{$student->specialty}}" id="specialty" aria-describedby="specialty">
          </div>
         
          
         <div class="d-flex justify-content-end">
          <button type="submit" class="btn btn-success">{{trans('messages.Update')}}</button>
         </div>
        </form>
  </div>
@endsection