@extends('layouts.layout')

@section('title', 'Мой dsasadfdsaf')
@section('content')

<main class="main">
    <div class="container">
    <form class="row g-3" action="{{ route('client.update', $client->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="col-md-6">
                <label for="login" class="form-label">Логин</label>
                <input type="text" class="form-control" id="login" name="login" value="{{ $client->user->login }}" placeholder="Логин">
            </div>
            <div class="col-md-6">
                <label for="password" class="form-label">Пароль</label>
                <input type="password" class="form-control" id="password" name="password" value="{{ $client->user->password }}" placeholder="Пароль">
            </div>
            <div class="col-md-6">
                <label for="surname" class="form-label">Фамилия</label>
                <input type="text" class="form-control" id="surname" name="surname" value="{{ $client->surname }}" placeholder="Фамилия">
            </div>
            <div class="col-md-6">
                <label for="name" class="form-label">Имя</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $client->name }}" placeholder="Имя">
            </div>
            <div class="col-md-6">
                <label for="birthday" class="form-label">Дата рождения</label>
                <input type="date" class="form-control" id="birthday" name="birthday" value="{{ $client->birthday }}" placeholder="Дата рождения">
            </div>
            <div class="col-6">
                <label for="telephone" class="form-label">Телефон</label>
                <input class="form-control" id="telephone" name="telephone" value="{{ $client->telephone }}" placeholder="Телефон">
            </div>
            
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Изменить</button>
            </div>
        </form>
    </div>
</main>
    
@endsection