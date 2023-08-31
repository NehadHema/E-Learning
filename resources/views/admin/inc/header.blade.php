<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <!-- animate CSS -->
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          {{-- <a class="navbar-brand" href="{{route("admin.dashboard.index")}}">Dashboard</a> --}}
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                {{-- <a class="nav-link active" aria-current="page" href="{{route("admin.dashboard.index")}}">Home</a> --}}
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="{{route("admin.category.index")}}">Categories</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="{{route("admin.course.index")}}">Courses</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="{{route("admin.trainer.index")}}">Trainers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="{{route("admin.student.index")}}">Students</a>
              </li>
          
            </ul>

            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="{{route("admin.dashboard.logout")}}">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>