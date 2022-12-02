@extends('layouts.auth-master')

@section('auth')
Регистрация
@endsection

@section('content')
    <form method="POST" action="{{ route('register.registerUser') }}" class="auth__form d-flex flex-column">
      <div class="mb-3 row">
        <div class="col-5">
          <label for="name">Имя</label>
          <input type="text" value="{{ old('name') }}" name="name" class="form-control" id="name">
          @if ($errors->has('name'))
            <span class="text-danger text-left fs-6">{{ $errors->first('name')}}</span>
          @endif
        </div>
        <div class="col-7">
          <label for="surname">Фамилия</label>
          <input type="text" value="{{ old('surname') }}" name="surname" class="form-control" id="surname">
          @if ($errors->has('surname'))
            <span class="text-danger text-left fs-6">{{ $errors->first('surname')}}</span>
          @endif
        </div>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" value="{{ old('email') }}" name="email" class="form-control" id="email">
        @if ($errors->has('email'))
            <span class="text-danger text-left fs-6">{{ $errors->first('email')}}</span>
          @endif
      </div>
      <div class="mb-3 row">
        <div class="col">
          <label for="password" class="form-label">Пароль</label>
          <input type="password" value="{{ old('password') }}" name="password" class="form-control" id="password">
          @if ($errors->has('password'))
            <span class="text-danger text-left fs-6">{{ $errors->first('password')}}</span>
          @endif
        </div>
        <div class="col">
          <label for="rep_password" class="form-label">Повтор пароля</label>
          <input type="password" value="{{ old('password_confirmation') }}" name="password_confirmation" class="form-control" id="rep_password">
          @if ($errors->has('password_confiramtion'))
            <span class="text-danger text-left fs-6">{{ $errors->first('password_confiramtion')}}</span>
          @endif
        </div>
      </div>
      <div class="d-flex justify-content-between align-items-center mt-3">
        <a href="{{ route('login.show') }}">Вход</a>
        <button type="submit" class="btn btn-success align-self-end">Войти</button>
      </div>
      @csrf
    </form>
@endsection