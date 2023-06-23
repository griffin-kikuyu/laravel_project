<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            height: 100vh;
        }

        .sidebar {
            background-color: #f4f4f4;
            width: 200px;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 20px 0;
        }

        nav ul li {
            margin-bottom: 10px;
        }

        nav ul li a {
            display: block;
            padding: 10px;
            color: #333;
            text-decoration: none;
        }

        nav ul li a:hover {
            background-color: #ddd;
        }

        .main-content {
            flex-grow: 1;
            padding: 20px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .user-email {
            
            font-weight: bold;
        }
        .main-content p{
            text-align:center;
            font-weight:bold;
            font size:35px;
        }
    </style>
</head>
<body>
    <div class="container">
    @if (Session::has('success'))
        <p>{{Session::get('success')}}</p>
  
    @endif
        <div class="sidebar">
            <nav>
                <ul>
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Apply Loan</a></li>
                    <li><a href="#">Reports</a></li>
                    <li><a href="#">Settings</a></li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="main-content">
            <h1>Main content.</h1>
            <p>Welcome: <span style="color: red;" class="user-name">{{ Auth::user()->username }}</span>!</p>
            <p>Email: <span class="user-details">{{ Auth::user()->email }}</span></p>
            <p>Password: <span class="user-details">{{ Auth::user()->password }}</span></p>
      
        </div>
    </div>
</body>
</html>
