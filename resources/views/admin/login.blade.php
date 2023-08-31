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
    <div class="container m-5 p-5">
      <h2 class="mb-4">Admin Login</h2>
      @include('admin.inc.error')
        <form action="{{route("admin.dashboard.do_login")}}" method="post">
           @csrf
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
           <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-info">Login</button>

           </div>
          </form>
    </div>

    
      <script src="{{asset('js/bootstrap.min.js')}}"></script>

</body>

</html>