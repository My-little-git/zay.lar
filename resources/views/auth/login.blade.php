@extends('layouts.auth-master')

@section('content')
<div class="auth mt-5 d-flex justify-content-center">
  <div class="auth__inner d-flex flex-column col-6">
    <h2 class="auth__title align-self-center mb-5">Вход</h3>
    <form method="POST" action="{{ route('login.login')}}" class="auth__form d-flex flex-column">
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" value="{{ old('email') }}" name="email" class="form-control" id="email">
        @if ($errors->has('email'))
          <span class="text-danger text-left fs-6">{{ $errors->first('email') }}</span>
        @endif
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Пароль</label>
        <input type="password" value="{{ old('password') }}" name="password" class="form-control" id="password">
        @if ($errors->has('password'))
          <span class="text-danger text-left fs-6">{{ $errors->first('password') }}</span>
        @endif
      </div>
      <div class="d-flex justify-content-between align-items-center mt-3">
        <a href="{{ route('register.show') }}">Регистрация</a>
        <button type="submit" class="btn btn-success align-self-end">Войти</button>
      </div>
      @csrf
    </form>
  </div>
</div>
@endsection