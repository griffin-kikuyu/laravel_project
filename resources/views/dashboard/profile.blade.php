<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('dashboard')
    @section('dashboard-content')
    <h1>user profile</h1>
    <form action="">
        <div>
            <input type="text" name="username" value="{{$user->username}}">
        </div>
        <div>
            <input type="text" name="username" value="{{$user->email}}">
        </div>
       
    </form>
        
    @endsection
</body>
</html>