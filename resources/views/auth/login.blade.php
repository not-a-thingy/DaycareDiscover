@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>

<!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container"style="font-family:verdana;">
            @if(session('error'))
                    <div style="padding:30px; margin-top:40px;"class="alert alert-danger">
                     {{ session('error') }}
                   </div>
                    @endif
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="../public/img/signin-image.jpg" alt="sing up image"></figure>
                        <a href="/register" class="signup-image-link">Create an account</a>
                    </div>
                   
                    <div class="signin-form">
                        <h2 class="form-title" style="font-family:verdana;">Login</h2>
                        
                        <form method="POST" action="{{ route('login') }}" class="register-form">
                        @csrf
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input style="font-family:verdana;" type="text" name="email" id="email" placeholder="Email"class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input style="font-family:verdana;" type="password" name="password" id="password" placeholder="Password"class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            
                            <div class="form-group form-button">
                                <button style="border:none" type="submit"  class="form-submit"  class="form-group form-button">Log in</button>
                                @if (Route::has('password.request'))
                                <br></br>
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                
                                @endif
                                
                                
                            
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>


@endsection
