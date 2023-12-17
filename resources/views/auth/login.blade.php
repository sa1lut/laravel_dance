@extends('layouts.layout')

@section('title', 'Вход')
@section('content')

<main class="main">
    <div class="container">
        <h2 class="text-center mb-4">Вход</h2>
        <div class="row h-100 justify-content-center align-items-center">    
            <form class="w-50" action="{{ route('auth.login') }}" method="post">
                @csrf
                <div class="row mb-3">
                    <label for="inputLogin" class="col-sm-2 col-form-label">Логин</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control @error('formError') is-invalid @enderror" id="inputLogin" name="login">
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Пароль</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control @error('formError') is-invalid @enderror" id="inputPassword" name="password">
                        @error('formError')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary">Войти</button>
                <a href="{{ route('auth.register') }}" class="btn">Регистрация</a>
            </form>
        </div>
    </div>
</main>
    
@endsection