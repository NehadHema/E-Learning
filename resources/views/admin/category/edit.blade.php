@extends('admin.layout')
@section('content')
<div class="container m-5 p-5">
    @include('admin.inc.error')
      <form action="{{route("admin.category.update")}}" method="post">
         @csrf
         <input type="hidden" name="cat_id" value="{{$cat->id}}">
         <div class="mb-3">
          <label for="name_en" class="form-label category_name">{{trans('messages.Category in English')}}</label>
          <input type="text" name="name_en" class="form-control" id="name_en" aria-describedby="name">
        </div>
        <div class="mb-3">
          <label for="name_ar" class="form-label category_name">{{trans('messages.Category in Arabic')}}</label>
          <input type="text" name="name_ar" class="form-control" id="name_ar" aria-describedby="namear">
        </div>
          
         <div class="d-flex justify-content-end">
          <button type="submit" class="btn btn-success">{{trans('messages.Update')}}</button>
         </div>
        </form>
  </div>
@endsection