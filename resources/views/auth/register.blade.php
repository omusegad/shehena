@extends('layouts.app')

@section('content')

<div id="main-wrapper" class="istore-login-register min-vh-100 d-flex flex-column bg-light">
  <div class="container my-auto">
    <div class="row">
      <div class="col-md-9 col-lg-7 col-xl-6 mx-auto">
        <div class="bg-white p-4 pb-sm-5 px-sm-5">
          <h3 class="text-center text-6 mt-2 mb-4">  {{ __('Get Started') }} </h3>
          <form method="POST" action="{{ route('register') }}">
           @csrf
            <div class="form-group icon-group">
                <input id="name" type="text" placeholder="Full Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                <span class="icon-inside"><i class="fas fa-user"></i></span>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="form-group icon-group">
                <input id="email" placeholder="Email Address" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                <span class="icon-inside"><i class="fas fa-envelope"></i></span>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group icon-group">
                <input id="phoneNumber" placeholder="Phone Number" type="phone" class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber" value="{{ old('phoneNumber') }}" required autocomplete="phoneNumber">
                <span class="icon-inside"><i class="fas fa-phone"></i></span> 
                @error('phoneNumber')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group icon-group">
                <input id="password" placeholder="Passsword" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                <span class="icon-inside"><i class="fas fa-lock"></i></span> 
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group icon-group">
            <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                <span class="icon-inside"><i class="fas fa-lock"></i></span> 
                @error('password-confirm')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group my-4">
              <div class="form-check text- custom-control custom-checkbox">
                <input id="agree" name="agree" class="custom-control-input" type="checkbox">
                <label class="custom-control-label text-2 rounded-0" for="agree">Agree to <a href="#"><u>Terms & Conditions</u></a>.</label>
              </div>
            </div>
            <button class="btn btn-primary btn-block rounded-0 shadow-none mt-4" type="submit"> {{ __('Sign Up') }}</button>
          </form>

        </div>
        <p class="text-center my-4">Already a member? <a class="btn-link text-light" href="login.html"> Log in now!</a></p>
      </div>
    </div>
  </div>
</div>


@endsection
