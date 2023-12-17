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
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Название" value="{{ $lesson->title }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="image" class="form-label">Изображение</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" placeholder="Изображение" value="{{ $lesson->image }}">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Преподаватели</label>
                <select class="form-control select2bs4 @error('teachers') is-invalid @enderror" style="width: 100%;" name="teachers[]" multiple>
                @foreach($teachers as $teacher)
                    <option
                    @foreach($lesson->teachers as $lessonTeacher)
                        {{ $teacher->id === $lessonTeacher->id ? 'selected' : ''}}
                    @endforeach
                     value="{{ $teacher->id}}">{{ $teacher->surname }} {{ $teacher->name }}</option>
                @endforeach
                </select>
                @error('teachers')
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