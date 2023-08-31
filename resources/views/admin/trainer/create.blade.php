@extends('admin.layout')
@section('content')
<div class="container m-5 p-5">
    @include('admin.inc.error')
      <form action="{{route("admin.trainer.store")}}" method="post" enctype="multipart/form-data">
         @csrf
        <div class="mb-3">
            <label for="name" class="form-label">{{trans('messages.Trainer’s Name in English')}}</label>
            <input type="text" name="name_en" class="form-control" id="name" aria-describedby="name">
          </div>
          <div class="mb-3">
            <label for="name" class="form-label">{{trans('messages.Trainer’s Name in Arabic')}}</label>
            <input type="text" name="name_ar" class="form-control" id="name" aria-describedby="name">
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">{{trans('messages.Phone')}}</label>
            <input type="text" name="phone" class="form-control" id="phone" aria-describedby="phone">
          </div>
          <div class="mb-3">
            <label for="specialty" class="form-label">{{trans('messages.Specialty')}}</label>
            <input type="text" name="specialty" class="form-control" id="specialty" aria-describedby="specialty">
          </div>
          <div class="mb-3">
            <label for="image" class="form-label">{{trans('messages.Image')}}</label>
            <input type="file" name="image" class="form-control" id="image" aria-describedby="image">
          </div>
          
         <div class="d-flex justify-content-end">
          <button type="submit" class="btn btn-primary">{{trans('messages.Save')}}</button>
         </div>
        </form>
  </div>
@endsection