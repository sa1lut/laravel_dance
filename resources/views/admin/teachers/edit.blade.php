@extends('admin.layouts.layout')

@section('title', 'Изменить преподавателя')

@section('content')
<main class="main">
    <div class="container">
        <form class="row g-3" action="{{ route('admin.teacher.update', $teacher->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="col-md-6">
                <label for="surname" class="form-label">Фамилия</label>
                <input type="text" class="form-control @error('surname') is-invalid @enderror" id="surname" name="surname" value="{{ $teacher->name }}" placeholder="Фамилия">
                @error('surname')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="name" class="form-label">Имя</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $teacher->surname }}" placeholder="Имя">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="birthday" class="form-label">Дата рождения</label>
                <input type="date" class="form-control @error('birthday') is-invalid @enderror" id="birthday" name="birthday" value="{{ $teacher->birthday }}" placeholder="Дата рождения">
                @error('birthday')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="image" class="form-label">Изображение</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" value="{{ $teacher->image }}" placeholder="Изображение">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-6">
                <label for="telephone" class="form-label">Телефон</label>
                <input class="form-control @error('telephone') is-invalid @enderror" id="telephone" name="telephone" value="{{ $teacher->telephone }}" placeholder="Телефон">
                @error('telephone')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Изменить</button>
            </div>
        </form>
    </div>
</main>
@endsection