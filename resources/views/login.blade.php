<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HRMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .container{
           
            width:35%;
            margin-top:10%;
           
        }
       
        label{
            font-weight:bold;
        }
    </style>
</head>
  <body>
    <div class="container py-5 h-100">

        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5">

        <h1 class="text-center">Login</h1>
        <h6 class="text-center text-secondary"> Please enter your login and password!</h6>
        @if(Session::has('msg'))
        <p class="text-danger">{{session('msg')}}</p>
        @endif
        @if($errors->any())
            @foreach($errors->all() as $error)
                <p class="text-danger">{{$error}}</p>
            @endforeach
        @endif
        <form method="POST" action="{{ url('user/login') }}">
            @csrf
            <div class="row">
                <div class="col-sm-4">
                    <label>Name</label>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 form-outline form-white mb-4">
                    <input type="text" class="form-control bg-dark text-light" name="name" id="name" placeholder="Enter Your name">
                    @if($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name')}}</span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <label>Password</label>
                </div>
            </div>
            <div class="row form-outline form-white mb-4">
                <div class="col-sm-12">
                <input type="password" class="form-control bg-dark text-light" name="password" id="password" placeholder="Enter Your email">
                @if($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password')}}</span>
                    @endif
            </div>
            </div>
            <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>
            <div class="d-grid mx-auto">
                <button type="submit" class="btn btn-dark btn-block">Login</button>
            </div>
            <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>
              <p class="mb-0">Don't have an account? <a href="#!" class="text-white-50 fw-bold">Sign Up</a>
              </p>
    </div>
    
            </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>