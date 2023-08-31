@extends('admin.layout')
@section('content')
<div class="container m-5 p-5 d-flex justify-content-between">
  <h4>{{trans('messages.Categories')}}</h4>
  <a href="{{route("admin.category.create")}}" type="button" class="btn btn-success me-auto">{{trans('messages.Add Category')}}</a>
</div>
   <div class="container  mx-5 pt-2 px-5 ">

    <table class="table category_table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">{{trans('messages.Category')}}</th>
            <th scope="col" class="text-center">{{trans('messages.Action')}}</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($cats as $cat)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$cat->{'name_'.app()->getLocale()} }}</td>
                <td class="text-center">
                    <a href="{{url("/categories/edit/$cat->id")}}" type="button" class="btn btn-primary">{{trans('messages.Edit')}}</a>
                    <a href="{{route("admin.category.delete",$cat->id)}}" type="button" class="btn btn-danger">{{trans('messages.Delete')}}</a>

                </td>
              </tr>
            @endforeach
        </tbody>
      </table>    
 </div> 
@endsection