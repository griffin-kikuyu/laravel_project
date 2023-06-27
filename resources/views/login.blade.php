<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <title>Login Form</title>
  <style>
    body {
      background-color: lightblue;
    }

    .form-header {
      position: relative;
    }

    .form-header:before {
      content: "";
      position: absolute;
      top: -10px;
      left: 50%;
      transform: translateX(-50%);
      width: 20px;
      height: 20px;
      background-color: #333;
      border-radius: 50%;
    }
    h1{
        text-align:center;
    }
  </style>
</head>
<body>
@include('navbar')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="form-header">
          <h1>Login Form</h1>
        </div>
        {{-- <form action="{{route("login")}}" method="POST"> --}}
        <form action="{{ route('login') }}" method="POST">
          @csrf
          @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
          @endif
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="rememberMe">
            <label class="form-check-label" for="rememberMe">Remember me</label>
          </div>
          <center><button type="submit" class="btn btn-primary">Login</button></center>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
