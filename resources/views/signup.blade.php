<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <title>Registration Form</title>
  <style>
    body {
      background-color: lightblue;
    }
  </style>
</head>
<body>
@include('navbar')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h1>Signup Form</h1>
        <form action="/process_signup" method="post">
        @csrf
          @if (session::has('success'))
              <p>{{session::get('success')}}</p>
        
          @endif

          <div class="form-group">
            <label for="username">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">

          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
          </div>
          <button type="submit" name="signup" class="btn btn-primary">Register</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
