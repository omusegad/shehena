@extends('layouts.app')

@section('content')

<div id="main-wrapper" class="istore-login-register d-flex flex-column bg-light">
  <div class="container my-auto">
    <div class="row">
      <div class="col-md-9 col-lg-7 col-xl-6 mx-auto">
        <div class="bg-white p-4 pb-sm-5 px-sm-5">
          <h3 class="text-center text-6 mt-2 mb-4">{{ __('Login') }}</h3>
          <form method="POST" action="{{ route('login') }}">
            @csrf
            
            <div class="form-group icon-group">
                <input id="email" placeholder="E-mail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <span class="icon-inside"><i class="fas fa-envelope"></i></span> 
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group icon-group">
                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                <span class="icon-inside"><i class="fas fa-lock"></i></span>                  
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

              <button class="btn btn-primary btn-block rounded-0 shadow-none mt-4 mb-3" type="submit">Log In</button>

          </form>
          <p class="text-center text-2 mb-0"><a href="forgot-Password.html"><u>Forgot Password ?</u></a></p>
        </div>
        <p class="text-center my-4">Not a member yet?<a class="btn-link text-light" href="{{ route('register') }}"> Sign up now!</a></p>
      </div>
    </div>
  </div>
</div>

@endsection
