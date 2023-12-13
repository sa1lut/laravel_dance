@extends('layouts.layout')

@section('title', 'Мой аккаунт')
@section('content')

<main class="main">
    <div class="container">
        <div class="row g-3">
            <div class="col-md-6">
                <label for="surname" class="form-label">Фамилия</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="surname" name="surname" value="{{ $client->surname}}" placeholder="Фамилия" disabled readonly>
                </div>
            </div>
            <div class="col-md-6">
                <label for="name" class="form-label">Имя</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Имя" value="{{ $client->name}}" disabled readonly>
                </div>
            </div>
            <div class="col-md-6">
                <label for="birthday" class="form-label">Дата рождения</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="birthday" name="birthday" placeholder="Дата рождения" value="{{ $client->birthday}}" disabled readonly>
                </div>
            </div>
            <div class="col-md-6">
                <label for="telephone" class="form-label">Телефон</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Телефон" value="{{ $client->telephone}}" disabled readonly>
                </div>
            </div>
            
            <a href="{{ route('client.edit', auth()->user()->getId()) }}" class="w-50 mx-auto btn btn-primary">Редактировать</a>
        </div>
    </div>
</main>
    
@endsection