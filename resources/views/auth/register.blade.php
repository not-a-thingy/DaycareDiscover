<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Daycare Discover | Register </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
    
    .fa-eye{
        position: absolute;
        top: 45%;
        right: 5%;
        cursor: pointer;
        color: lightgray;
        
    }
    .signup-content {
        display: flex;
        justify-content: space-between;
    }

    .signup-form,
    .signup-image {
        width: 10%; /* Adjust the width as needed */
    }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-transparent shadow-sm">
            <div class="container bg-transparent">
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon bg-transparent"></span>
                </button>

                <div class="collapse navbar-collapse bg-transparent" id="navbarSupportedContent">
                
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto bg-transparent">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item bg-transparent">
                                    <a style="font-family:verdana;" class="nav-link" href="{{ route('login') }}"><b>{{ __('Login') }}</b></a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item bg-transparent">
                                    <a style="font-family:verdana;" class="nav-link" href="{{ route('register') }}"><b>{{ __('Register') }}</b></a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" style="position:relative; padding-left:50px;" aria-expanded="false" v-pre >
                                
                                {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('/users') }}"
                                        >
                                            {{ __('My Profile') }}
                                        </a>    
                                    
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                

                                    

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">

<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">


<link rel="stylesheet" href="css/style1.css">
<style>
  body, html {
    background: url('img/bg.jpg');
}


</style>
</head>
<body>

    <!-- Sign up form -->
    <section class="signup">
        <div class="container" style="font-family:verdana;">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 style="font-family:verdana" class="form-title">Register</h2>
                    <form id="registrationForm" method="POST" action="{{ route('register') }}" class="register-form" enctype="multipart/form-data">
                    @csrf

                    <!--div class="form-group">
                        <p for="profile_picture">Profile Picture</p>
                        <input style="padding:0; padding-bottom:5px;" type="file" class="form-control-file" id="profile_picture" name="image" accept="image/*">
                    </div>-->
                    <div class="form-group">
                            <label for="role"><i class="zmdi zmdi-role"></i></label>
                            <select id="role" onchange="setname()" class="form-control @error('role') is-invalid @enderror" name="role" required>
                                <option value="0" {{ old('role') == 0 ? 'selected' : '' }}>Parent</option>
                                <option value="2" {{ old('role') == 2 ? 'selected' : '' }}>Operator</option>
                            </select>

                            @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        <br>
                        <br>
                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input style="font-family:verdana" type="text"  id="name" placeholder="Your Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div style ="line-height: 180% ">
                  <br>
</div>
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input style="font-family:verdana" type="email" id="email" placeholder="Your Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="contact"><i class="zmdi zmdi-contact"></i></label>
                            <input style="font-family:verdana; " type="text" id="contact" placeholder="Your Phone Number" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" required autocomplete="contact">
                            @error('contact')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="address"><i class="zmdi zmdi-address"></i></label>
                            <input style="font-family:verdana" type="text" id="address" placeholder="Your Address" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">
                            @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> 
                                @enderror
                        </div>
                        

                      
                        <div class="form-group">
                            <label for="password" class="col-md-4 col-form-label text-md-end"></label>
                            
                                <input  style=" width:100%; font-family:verdana;" id="password" type=password placeholder= "Password (Minimum 8 characters)" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                
                                <span class="fa-regular fa-eye" id="show-password" onclick="togglePasswordVisibility()"></span>
                                
                            

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>


                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end"></label>

                            
                            
                                <input  style="margin:0; width:100%; font-family:verdana;" id="password-confirm" type="password" placeholder= "Password Confirmation" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                <span class="fa-regular fa-eye" id="show-password" onclick="toggleConfirmPasswordVisibility()"></span>
                            </div>
                           
                        
                        <div class="form-group" style="width:100%">
                        <input type="checkbox" name="terms_and_conditions" id="terms_and_conditions" class="@error('terms_and_conditions') is-invalid @enderror" required>
                                <label  for="terms_and_conditions" class="label-agree-term"><span><span></span></span>I agree to the<a href="javascript:void(0);" onclick="openTermsModal()"> Terms and Conditions</a></label>
                                @error('terms_and_conditions')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div> 
                       
                        <div class="form-group form-button">
                            <button style="border:none" type="submit" class="form-submit" id="registerButton" class="form-group form-button" disabled>Register</button>
                        </div>
                    </form>
                </div>
                
                <div class="signup-image">
                    <figure><img src="img/logo.jpg" alt="sing up image"></figure>
                    <a href="/login" class="signup-image-link">I am already member</a>
                </div>
            </div>
        </div>
    </section>

</div>

<!-- JS -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        setname();

        document.getElementById('terms_and_conditions').addEventListener('change', function () {
            setname();
      //      toggleRegisterButton();
        });
        document.getElementById('registerButton').addEventListener('click', function (event) {
            if (!document.getElementById('terms_and_conditions').checked) {
                alert("Please check the Terms and Conditions box before registering.");
                event.preventDefault();
            }
        });
    });

    function setname() {
        let name = document.getElementById('role').value;
        let username = document.getElementById('name');
        let termsCheckbox = document.getElementById('terms_and_conditions');
        let registerButton = document.getElementById('registerButton');

        if (name == 0) {
            username.placeholder = "Your Name";
        } else {
            username.placeholder = "Your DayCare Name";
        }

        toggleRegisterButton();
    }

    function toggleRegisterButton() {
        let termsCheckbox = document.getElementById('terms_and_conditions');
        let registerButton = document.getElementById('registerButton');

        registerButton.disabled = !termsCheckbox.checked;
    }

    function openTermsModal() {
        var termsUrl = "{{ route('terms') }}";
        window.open(termsUrl, "Terms and Conditions", "width=600,height=400,resizable=yes,scrollbars=yes");
    }

    function togglePasswordVisibility() {
        var passwordInput = document.getElementById('password');
        var eyeIcon = document.getElementById('show-password');

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            eyeIcon.classList.remove('fa-eye-slash');
            eyeIcon.classList.add('fa-eye');
        } else {
            passwordInput.type = "password";
            eyeIcon.classList.remove('fa-eye-slash');
            eyeIcon.classList.add('fa-eye');
        }
    }
    function toggleConfirmPasswordVisibility() {
        var passwordInput = document.getElementById('password-confirm');
        var eyeIcon = document.getElementById('show-password');

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            eyeIcon.classList.remove('fa-eye');
            eyeIcon.classList.add('fa-eye-slash');    
        } else {
            passwordInput.type = "password";
            eyeIcon.classList.remove('fa-eye-slash');
            eyeIcon.classList.add('fa-eye');
        }
    }
</script>

</body>
</html>
</main>
    </div>  
</body>
</html>
