@extends('layouts.layout')

@section('title', 'Вход')
@section('content')

<main class="main">
    <div class="container">
        <h2>Вход</h2>
        <form action="{{ route('auth.login') }}" method="post">
            @csrf
            <div class="row mb-3">
                <label for="inputLogin" class="col-sm-2 col-form-label">Логин</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputLogin" name="login">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Пароль</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword" name="password">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Войти</button>
        </form>
    </div>
</main>
    
@endsection