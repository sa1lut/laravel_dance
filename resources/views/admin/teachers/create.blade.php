@extends('admin.layouts.layout')

@section('title', 'Добавить преподавателя')

@section('content')
<main class="main">
    <div class="container">
        <form class="row g-3" action="{{ route('admin.teacher.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6">
                <label for="surname" class="form-label">Фамилия</label>
                <input type="text" class="form-control" id="surname" name="surname" placeholder="Фамилия">
            </div>
            <div class="col-md-6">
                <label for="name" class="form-label">Имя</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Имя">
            </div>
            <div class="col-md-6">
                <label for="birthday" class="form-label">Дата рождения</label>
                <input type="date" class="form-control" id="birthday" name="birthday" placeholder="Дата рождения">
            </div>
            <div class="col-md-6">
                <label for="image" class="form-label">Изображение</label>
                <input type="file" class="form-control" id="image" name="image" placeholder="Изображение">
            </div>
            <div class="col-6">
                <label for="telephone" class="form-label">Телефон</label>
                <input class="form-control" id="telephone" name="telephone" placeholder="Телефон">
            </div>
            
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Добавить</button>
            </div>
        </form>
    </div>
</main>
@endsection