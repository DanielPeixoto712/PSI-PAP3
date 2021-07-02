<video id="videoBG" poster="poster.JPG" autoplay muted loop>
    <source src="videoplayback.mp4" type="video/mp4">
</video>

@extends('layouts.app')
<link href=" {{ URL::asset('css/login.css') }}" rel="stylesheet">
@section('content')
<div class="container">
  <div class="row">
           <div class="col-md-6">
            <div class="card0">

          
                    <form method="POST" action="{{ route('register') }}" onsubmit="event.preventDefault()" class="box">
                        @csrf

                        <div class="form-group row">
                            <label style="color: #ffffff" for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label style="color: #ffffff" for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label style="color: #ffffff" for="contacto" class="col-md-4 col-form-label text-md-right">{{ __('Contacto') }}</label>

                            <div class="col-md-6">
                                <input id="contacto" type="numeric" class="form-control @error('contacto') is-invalid @enderror" name="contacto" value="{{ old('contacto') }}" required autocomplete="contacto" autofocus>

                                @error('contacto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>





                        <div class="form-group row">
                            <label style="color: #ffffff" for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label style="color: #ffffff" for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                
            </div>
        </div>
    </div>
</div>
@endsection


  <!--<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <form onsubmit="event.preventDefault()" class="box">
                    <h1>Login</h1>
                    <p class="text-muted"> Please enter your login and password!</p> <input type="text" name="" placeholder="Username"> <input type="password" name="" placeholder="Password"> <a class="forgot text-muted" href="#">Forgot password?</a> <input type="submit" name="" value="Login" href="#">
                    <div class="col-md-12">
                        <ul class="social-network social-circle">
                            <li><a href="#" class="icoFacebook" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" class="icoTwitter" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" class="icoGoogle" title="Google +"><i class="fab fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
-->

