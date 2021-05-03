@extends('base')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="resources/sass/app.scss">
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    </head>


    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}"></script>


    <body class="hold-transition login-page">
    <div class="login-box">
        <div class="col d-flex justify-content-center">
            <div class="login-box">
                <div class="card card-outline card-primary">
                    <div class="card-header text-center">
                        <a href="{{route('dashboard')}}" class="h1"><b>Admin</b>LTE</a>
                    </div>
                    <!-- /.login-logo -->
                    {{--        <div class="card">--}}
                    {{--            <div class="card-body login-card-body">--}}
                    <p class="login-box-msg">Register a new membership</p>
                    <div class="card-body">
                        @if ($errors->has('login'))
                            <div class="alert alert-danger">{{$errors->first('login')}}</div> @endif

                        <form action="{{route('login')}}" method="post">
                            @csrf

                            @if ($errors->has('name'))
                                <div class="alert alert-danger">{{$errors->first('name')}}</div> @endif
                            <div class="input-group mb-3">
                                <input name="name" type="name" class="form-control @if ($errors->has('name')) is-invalid @endif" placeholder="Name" value="{{old('name')}}">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>

                            @if ($errors->has('email'))
                                <div class="alert alert-danger">{{$errors->first('email')}}</div> @endif
                            <div class="input-group mb-3">
                                <input name="email" type="email" class="form-control @if ($errors->has('email')) is-invalid @endif" placeholder="Email" value="{{old('email')}}">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>

                            @if ($errors->has('password'))
                                <div class="alert alert-danger">{{$errors->first('password')}}</div> @endif
                            <div class="input-group mb-3">
                                <input name="password" type="password" class="form-control @if ($errors->has('password')) is-invalid @endif" placeholder="Password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>


                            @if ($errors->has('retype password'))
                                <div class="alert alert-danger">{{$errors->first('retype password')}}</div> @endif

                            @if ($errors->has('retype password'))
                                <div class="alert alert-danger">{{$errors->first('retype password')}}</div> @endif
                            <div class="input-group mb-3">
                                <input name="retype password" type="password" class="form-control @if ($errors->has('retype password')) is-invalid @endif" placeholder="Retype password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock-open"></span>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-8">
                                    <div class="icheck-primary">
                                        <input type="checkbox" id="remember">
                                        <label for="remember">
                                            I agree to the terms
                                        </label>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-xs-4">
                                    <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>

                        <div class="social-auth-links text-center mb-3">
                                                <p>- OR -</p>
                            <a href="#" class="btn btn-block btn-primary">
                                <i class="fab fa-facebook mr-2"></i> Sign up using Facebook
                            </a>
                            <a href="#" class="btn btn-block btn-danger">
                                <i class="fab fa-google-plus mr-2"></i> Sign up using Google+
                            </a>
                        </div>
                        <!-- /.social-auth-links -->

                        <p class="mb-0">
                            <a href="{{route('login')}}" class="text-center">I already have a membership</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>

@endsection

