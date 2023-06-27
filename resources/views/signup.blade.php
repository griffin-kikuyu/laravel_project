<!DOCTYPE html>
<html lang="en">
<head>
  <!-- ... -->
</head>
<body>
  @include('navbar')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h1>Signup Form</h1>
        <form action="/process_signup" method="post">
          @csrf
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
          @if (Session::has('success'))
            <p>{{ Session::get('success') }}</p>
          @endif
          <div class="form-group">
            <label for="username">Name</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Enter your name" value="{{ old('username') }}">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" value="{{ old('email') }}">
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
