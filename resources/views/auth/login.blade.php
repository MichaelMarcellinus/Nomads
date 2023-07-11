@extends('layouts.app')

@section('content')
<main class="login-container">
  <div class="container">
    <div class="row page-login d-flex align-items-center">
      <div class="section-left col-12 col-md-6">
        <h1 class="mb-3"> We explore the new <br/>life much better</h1>
        <img src="/frontend/images/login-image.jpg" alt="" class="w-75 d-none d-sm-flex">
      </div>
      <div class="section-right col-12 col-md-4">
        <div class="card">
          <div class="card-body">
            <div class="text-center">
              <img src="{{ url('frontend/images/logo@2x.png') }}" alt="" class="w-50 mb-4">
            </div>
            <form method="POST" action="{{ route('login') }}">
              @csrf
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input 
                  type="email" 
                  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" 
                  id="exampleInputEmail1" 
                  aria-describedby="emailHelp"
                  required autocomplete="email" autofocus>
                @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input 
                  type="password" 
                  class="form-control @error('password') is-invalid @enderror"
                  name="password"
                  id="exampleInputPassword1"
                  required autocomplete="current-password">
                @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="mb-3 form-check">
                <input 
                  type="checkbox" 
                  class="form-check-input" 
                  id="remember"
                  name="remember"
                  {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">Remember me</label>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-login">Sign In</button>
              </div>
              <hr>
              <p class="text-center">
                @if (Route::has('password.request'))
                  <a href="{{ route('password.request') }}">Forgot Password?</a>
                @endif
                <br/>
                  <a href="{{ url('register') }}">Create An Account!</a>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
