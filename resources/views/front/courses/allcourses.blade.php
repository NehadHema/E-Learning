@extends('front/layout')

@section('content')
<div class="m-5 p-5">
<div class="container m-5 p-5 d-flex justify-content-between ">

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">{{trans('messages.Image')}}</th>
            <th scope="col">{{trans('messages.Course Name')}}</th>
            <th scope="col">{{trans('messages.Price')}}</th>
            <th scope="col">{{trans('messages.Description')}}</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td><img src="{{asset("front/img/courses/$course->image")}}" height="50px" alt="" srcset=""></td>
                <td>{{$course->name}}</td>
                <td> {{$course->price }} </td>
                <td>{{$course->{'smallDesc_'.app()->getLocale()} }}</td>
                
              </tr>
            @endforeach
        </tbody>
      </table>    
 </div> 
</div>
 @endsection