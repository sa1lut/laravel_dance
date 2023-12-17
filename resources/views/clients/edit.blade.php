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
                <input type="text" class="form-control @error('login') is-invalid @enderror" id="login" name="login" value="{{ $client->user->login }}" placeholder="Логин">
                @error('login')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="password" class="form-label">Пароль</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="********">
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="surname" class="form-label">Фамилия</label>
                <input type="text" class="form-control @error('surname') is-invalid @enderror" id="surname" name="surname" value="{{ $client->surname }}" placeholder="Фамилия">
                @error('surname')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="name" class="form-label">Имя</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $client->name }}" placeholder="Имя">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="birthday" class="form-label @error('birthday') is-invalid @enderror">Дата рождения</label>
                <input type="date" class="form-control" id="birthday" name="birthday" value="{{ $client->birthday }}" placeholder="Дата рождения">
                @error('birthday')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-6">
                <label for="telephone" class="form-label @error('telephone') is-invalid @enderror">Телефон</label>
                <input class="form-control" id="telephone" name="telephone" value="{{ $client->telephone }}" placeholder="Телефон">
                @error('telephone')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </form>
    </div>
</main>
    
@endsection