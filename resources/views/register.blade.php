<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng kí</title>
    <link rel="shortcut icon" href="{{asset('assets/images/logotitle2.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/scss/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/register.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free-6.3.0-web/css/all.min.css')}}">
    
</head>
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>My Awesome Login Page</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-xl-9 mx-auto">
          <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
            <div class="card-img-left d-none d-md-flex">
              <!-- Background image for card set in CSS! -->
            </div>
            <div class="card-body p-4 p-sm-5">
              <h5 class="card-title text-center mb-5 fw-light fs-5">Register</h5>
                @if (session('failRegiter'))
                    <p class="text-center text-danger">{{session('failRegiter')}}</p>
                @endif
              <form action="/postRegister" method="post">
                @csrf
                <div class="mb-1">
                    <label for="floatingInputEmail">Email</label>
                    <input name="email" type="email" class="form-control" id="floatingInputEmail" placeholder="email@gmail.com">
                </div>
                <div class="mb-1">
                    <label for="floatingPassword">Mật khẩu</label>
                    <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Nhập mật khẩu(ít nhất 6 kí tự)">
                </div>
                <div class="mb-1">
                    <label for="floatingInputUsername">Tên</label>
                    <input name="name" type="text" class="form-control" id="floatingInputUsername" placeholder="Nhập tên" required autofocus>
                </div>
                <div class="mb-1">
                    <label for="">Số điện thoại</label>
                    <input name="phone" type="text" class="form-control" id="" placeholder="0123456789" required autofocus>
                </div>
                <div class="d-grid mb-2 mt-4">
                    <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Register</button>
                </div>
  
                <a class="d-block text-center mt-2 small" href="/login">Have an account? Sign In</a>
  
                <hr class="my-4">
                @if (session('successRegiter'))
                    <p class="text-center text-success">{{session('successRegiter')}}</p>
                @endif
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
