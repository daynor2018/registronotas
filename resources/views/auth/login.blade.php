@extends('layouts.plataform')

@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('/css/login.css')}}">
<div class="container">
    <div class="d-flex justify-content-center h-100">
      <div class="card">
        <div class="card-header text-center"><h3>{{ __('Ingreso al Sistema') }}</h3></div>
        <div class="card-body">
          <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
            @csrf
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
              </div>
              <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Correo Electrónico" required autofocus>
              @if ($errors->has('email'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
            </div>
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="icon-key"></i></span>
              </div>
              <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Constraseña" required>
              @if ($errors->has('password'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
            </div>
            <div class="row align-items-center remember card-body">
              <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>Recuerdame
            </div>
            <div class="form-group">
              <input type="submit" value="Login" class="btn float-right login_btn">
            </div>
          </form>
        </div>
        <div class="card-footer bg-dark">
          <div class="text-center">
            <a class="text-white" href="{{ route('password.request') }}">¿No recuerdas tu contraseña?</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
