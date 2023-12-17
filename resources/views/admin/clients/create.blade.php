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
                    <input type="text" class="form-control @error('login') is-invalid @enderror" id="login" name="login" placeholder="Логин" value="{{ old('login') }}">
                    @error('login')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <label for="password" class="form-label">Пароль</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Пароль">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="border-bottom"></div>
            <div class="col-md-6">
                <label for="surname" class="form-label">Фамилия</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('surname') is-invalid @enderror" id="surname" name="surname" placeholder="Фамилия" value="{{ old('surname') }}">
                    @error('surname')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <label for="name" class="form-label">Имя</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Имя" value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <label for="birthday" class="form-label">Дата рождения</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control @error('birthday') is-invalid @enderror" id="birthday" name="birthday" placeholder="Дата рождения" value="{{ old('birthday') }}">
                    @error('birthday')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <label for="telephone" class="form-label">Телефон</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('telephone') is-invalid @enderror" id="telephone" name="telephone" placeholder="Телефон" value="{{ old('telephone') }}">
                    @error('telephone')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
            <button type="submit" class="w-50 mx-auto btn btn-primary">Добавить</button>
        </form>
    </div>
</main>
@endsection