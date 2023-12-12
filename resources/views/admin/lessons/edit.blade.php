@extends('admin.layouts.layout')

@section('title', 'Изменить занятие')

@section('content')
<main class="main">
    <div class="container">
        <form class="row g-3" action="{{ route('admin.lesson.update', $lesson->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="col-md-6">
                <label for="title" class="form-label">Название</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Название" value="{{ $lesson->title }}">
            </div>
            <div class="col-md-6">
                <label for="image" class="form-label">Изображение</label>
                <input type="file" class="form-control" id="image" name="image" placeholder="Изображение" value="{{ $lesson->image }}">
            </div>
            <div class="col-12">
                <label for="direction" class="form-label">Направление</label>
                <textarea class="form-control" id="direction" name="direction" placeholder="Описание">{{ $lesson->direction }}</textarea>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Изменить</button>
            </div>
        </form>
    </div>
</main>
@endsection