@extends('admin.layout')
@section('content')
<div class="container m-5 p-5 d-flex justify-content-between">
  <h4>{{trans('messages.Trainers')}}</h4>
  <a href="{{route("admin.trainer.create")}}" type="button" class="btn btn-success me-auto">{{trans('messages.Add trainers')}}</a>
</div>
   <div class="container  mx-5 pt-2 px-5 ">

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">{{trans('messages.Image')}}</th>
            <th scope="col">{{trans('messages.Trainer’s Name')}}</th>
            <th scope="col">{{trans('messages.Phone')}}</th>
            <th scope="col">{{trans('messages.Specialty')}}</th>
            <th scope="col">{{trans('messages.Action')}}</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($trainers as $trainer)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td><img src="{{asset("front/img/trainers/$trainer->image")}}" alt="" srcset=""></td>
                <td>{{$trainer->{'name_'.app()->getLocale()} }}</td>
                <td>@if(!$trainer->phone == null)
                  {{$trainer->phone}}
                  @else
                    {{ "The phone not exists "}}
                  @endif
               </td>
                <td>{{$trainer->specialty}}</td>
                <td>
                    <a href="{{url("/trainers/edit/$trainer->id")}}" type="button" class="btn btn-primary">Edit</a>
                    <a href="{{route("admin.trainer.delete",$trainer->id)}}" type="button" class="btn btn-danger">Delete</a>

                </td>
              </tr>
            @endforeach
        </tbody>
      </table>    
 </div> 
@endsection