@extends('admin.layout')
@section('content')
<div class="container m-5 p-5">
    @include('admin.inc.error')
      <form action="{{route("admin.trainer.update")}}" method="post" enctype="multipart/form-data">
         @csrf
         <input type="hidden" name="trainer_id" value="{{$trainer->id}}">
        <div class="mb-3">
          <label for="name" class="form-label">{{trans('messages.Trainer’s Name in English')}}</label>
          <input type="text" name="name_en" class="form-control" value="{{$trainer->name_en}}" id="name" aria-describedby="name">
          </div>
          <div class="mb-3">
            <label for="name" class="form-label">{{trans('messages.Trainer’s Name in Arabic')}}</label>
            <input type="text" name="name_ar" class="form-control" value="{{$trainer->name_ar}}" id="name" aria-describedby="name">
            </div>
          <div class="mb-3">
            <label for="phone" class="form-label">{{trans('messages.Phone')}}</label>
            <input type="text" name="phone" class="form-control" value="{{$trainer->phone}}" id="phone" aria-describedby="phone">
          </div>
          <div class="mb-3">
            <label for="specialty" class="form-label">{{trans('messages.Specialty')}}</label>
            <input type="text" name="specialty" class="form-control" value="{{$trainer->specialty}}" id="specialty" aria-describedby="specialty">
          </div>
          <div class="mb-3">
            <label for="image" class="form-label">{{trans('messages.Image')}}</label>
            <img src="{{asset("front/img/trainers/$trainer->image")}}" alt="" srcset="">
            <input type="file" name="image" class="form-control" id="image" aria-describedby="image">
          </div>
          
         <div class="d-flex justify-content-end">
          <button type="submit" class="btn btn-success">{{trans('messages.Update')}}</button>
         </div>
        </form>
  </div>
@endsection