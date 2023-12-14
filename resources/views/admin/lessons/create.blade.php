@extends('admin.layouts.layout')

@section('title', 'Добавить занятие')

@section('content')
<main class="main">
    <div class="container">
        <form class="row g-3" action="{{ route('admin.lesson.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6">
                <label for="title" class="form-label">Название</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Название">
            </div>
            
            <div class="col-md-6">
                <label for="image" class="form-label">Изображение</label>
                <input type="file" class="form-control" id="image" name="image" placeholder="Изображение">
            </div>

            <div class="form-group">
                <label>Занятие</label>
                <select class="form-control select2bs4" style="width: 100%;" name="teachers[]" multiple>
                @foreach($teachers as $teacher)
                    <option value="{{ $teacher->id}}">{{ $teacher->surname }} {{ $teacher->name }}</option>
                @endforeach
                </select>
            </div>

            <!-- <div class="list-group">
                @foreach($teachers as $teacher)
                <label class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" name="teachers[]" value="{{ $teacher->id }}">
                    {{ $teacher->surname }} {{ $teacher->name }}
                </label>
                @endforeach
            </div> -->
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Добавить</button>
            </div>
        </form>
    </div>
</main>
@endsection