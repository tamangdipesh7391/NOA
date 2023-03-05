<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link href="{{url('backend-assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
        }

        .global-container {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f5f5f5;
        }

        form {
            padding-top: 10px;
            font-size: 14px;
            margin-top: 30px;
        }

        .card-title {
            font-weight: 300;
        }

        .btn {
            font-size: 14px;
            margin-top: 20px;
        }


        .login-form {
            width: 330px;
            margin: 20px;
        }

        .sign-up {
            text-align: center;
            padding: 20px 0 0;
        }

        .alert {
            margin-bottom: -30px;
            font-size: 13px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="global-container">
    <div class="card login-form">
        <div class="card-body">
            @if(session('error'))
                <h4 class="card-title text-center" style="color: red;">{{session('error')}}</h4>
            @else
                <h3 class="card-title text-center">Log in to Dashboard</h3>
            @endif

            <div class="card-text">
                <form action="{{route('admin-login')}}" method="post">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="username">Username:
                            <a style="color: red;text-decoration: none">{{$errors->first('username')}}</a>
                        </label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="form-group mb-2">
                        <label for="password">Password:
                            <a style="color: red;text-decoration: none">{{$errors->first('password')}}</a>
                        </label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="form-group mb-2">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

