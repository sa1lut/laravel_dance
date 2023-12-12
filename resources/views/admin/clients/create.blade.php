@extends('admin.layouts.layout')

@section('title', 'Добавить клиента')

@section('content')
<main class="main">
    <div class="container">
        <form class="row g-3" action="{{ route('admin.client.store') }}" method="post">
            @csrf
            <div class="col-md-6">
                <label for="login" class="form-label">Логин</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="login" name="login" placeholder="Логин">
                </div>
            </div>
            <div class="col-md-6">
                <label for="password" class="form-label">Пароль</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Пароль">
                </div>
            </div>
            <div class="border-bottom"></div>
            <div class="col-md-6">
                <label for="surname" class="form-label">Фамилия</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="surname" name="surname" placeholder="Фамилия">
                </div>
            </div>
            <div class="col-md-6">
                <label for="name" class="form-label">Имя</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Имя">
                </div>
            </div>
            <div class="col-md-6">
                <label for="birthday" class="form-label">Дата рождения</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="birthday" name="birthday" placeholder="Дата рождения">
                </div>
            </div>
            <div class="col-md-6">
                <label for="telephone" class="form-label">Телефон</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Телефон">
                </div>
            </div>
            
            <button type="submit" class="w-50 mx-auto btn btn-primary">Добавить</button>
        </form>
    </div>
</main>
@endsection