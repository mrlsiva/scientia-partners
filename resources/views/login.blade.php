<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name')}} | Sign In</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/assets/images/logo-abbr.png')}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/colors/switch.css')}}">
</head>

<body>
    
    <div class="login-page bg-light">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 ps-0 d-none d-md-block vh-100">
                    <div class="vh-100 login-bg d-flex align-items-center">
                        <div class="form-right d-flex flex-column gap-5 align-items-center text-center w-100">
                            <div class="">
                                <img class="img-fluid" src="{{asset('public/assets/images/logo-dark.svg')}}" width="280px">
                            </div>
                            <img class="img-fluid" src="{{asset('public/assets/images/login.svg')}}" width="320px">
                            <div class="d-flex gap-1 ">
                              <span>Back to</span>
                                <a href="{{route('home')}}" class="b-t-home">Home</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 vh-100 d-flex align-items-center px-md-5 px-lg-5">
                    <div class="form-left  py-md-5 py-lg-5 px-md-5 px-lg-5">
                        <form class="forms-sample" method="post" action="{{route('sign_in')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="d-block d-md-none">
                                <img class="img-fluid my-3" src="{{asset('public/assets/images/logo-dark.svg')}}" width="280px">
                            </div>
                            <h3 class="login-hello">Hello Welcome Back!</h3>
                            <div class="col-12 login-label">
                                <label class="mt-3">Username<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" name="user_name" class="form-control" placeholder="Enter Username">
                                </div>
                            </div>

                            <div class="col-12 login-label mt-3">
                                <label>Password<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" name="password" class="form-control" placeholder="Enter Password">
                                </div>
                            </div>

                               
                            <div class="col-sm-12 mt-3 ">
                                <a href="#" class="float-end forgot">Forgot Password?</a>
                            </div>

                            <div class="col-12">
                                <!-- <button type="submit" class="btn btn-login w-100 mt-3">login</button> -->

                                <a class="btn btn-login w-100 mt-3" href="{{route('founders.dashboard')}}">Login</a>
                            </div>

                            <div class="col-12 d-block d-md-none login-web-hidden-img text-center ">
                                <img class="img-fluid mt-5" src="{{asset('public/assets/images/login.svg')}}">
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <script src="{{asset('public/assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('public/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/assets/js/slick.min.js')}}"></script>
    <script src="{{asset('public/assets/js/main.js')}}"></script>
    <script src="{{asset('public/assets/js/switch.js')}}"></script>
       
</body>

</html>