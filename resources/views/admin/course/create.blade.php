@extends('admin.layout')
@section('content')
<div class="container m-5 p-5">
    @include('admin.inc.error')
      <form action="{{route("admin.course.store")}}" method="post" enctype="multipart/form-data">
         @csrf
          <div class="mb-3">
            <label for="name" class="form-label">{{trans('messages.Course Name')}}</label>
            <input type="text" name="name" class="form-control" id="name" aria-describedby="name">
          </div>
          <div class="mb-3">
            <label for="price" class="form-label">{{trans('messages.Price')}}</label>
            <input type="number" name="price" class="form-control" id="price" aria-describedby="price">
          </div>
          <div class="mb-3">
            <label for="smallDesc" class="form-label">{{trans('messages.Small Description in English')}}</label>
            <input type="text" name="smallDesc_en" class="form-control" id="smallDesc" aria-describedby="smallDesc">
          </div>
          <div class="mb-3">
            <label for="smallDesc" class="form-label">{{trans('messages.Small Description in Arabic')}}</label>
            <input type="text" name="smallDesc_ar" class="form-control" id="smallDesc" aria-describedby="smallDesc">
          </div>
          <div class="mb-3">
            <label for="desc" class="form-label">{{trans('messages.Description in English')}}</label>
            <textarea class="form-control" name="desc_en" id="desc" aria-label="desc" placeholder=""></textarea>
          </div>
          <div class="mb-3">
            <label for="desc" class="form-label">{{trans('messages.Description in Arabic')}}</label>
            <textarea class="form-control" name="desc_ar" id="desc" aria-label="desc" placeholder=""></textarea>
          </div>
          <div class="mb-3">
            <label for="category" class="form-label">{{trans('messages.Category')}}</label><br>
            <select class="form-select" name="category_id" aria-label=".form-select-sm example">
              @foreach ($categories as $category)
              <option value="{{$category->id}}">{{$category->{'name_'.app()->getLocale()} }}</option>
              @endforeach
            </select>
          </div>
          <div class="mb-3">
            <label for="trainer" class="form-label">{{trans('messages.Trainer')}}</label><br>
            <select class="form-select" name="trainer_id" aria-label=".form-select-sm example">
              @foreach ($trainers as $trainer)
              <option value="{{$trainer->id}}">{{$trainer->{'name_'.app()->getLocale()} }}</option>
              @endforeach
            </select>
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