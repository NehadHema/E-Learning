@extends('admin.layout')
@section('content')
<div class="container m-5 p-5">
    @include('admin.inc.error')
      <form action="{{route("admin.student.store")}}" method="post">
         @csrf
          <div class="mb-3">
            <label for="name" class="form-label">{{trans('messages.Student Name in English')}}</label>
            <input type="text" name="name_en" class="form-control" id="name" aria-describedby="name">
          </div>
          <div class="mb-3">
            <label for="name" class="form-label">{{trans('messages.Student Name in Arabic')}}</label>
            <input type="text" name="name_ar" class="form-control" id="name" aria-describedby="name">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">{{trans('messages.Email')}}</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="email">
          </div>
          <div class="mb-3">
            <label for="specialty" class="form-label">{{trans('messages.Specialty')}}</label>
            <input type="text" name="specialty" class="form-control" id="specialty" aria-describedby="specialty">
          </div>
          
         <div class="d-flex justify-content-end">
          <button type="submit" class="btn btn-primary">{{trans('messages.Save')}}</button>
         </div>
        </form>
  </div>
@endsection