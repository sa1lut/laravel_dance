@extends('layouts.layout')

@section('title', 'Занятия')

@section('content')
<main class="main">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach($lessons as $lesson)
            <div class="col">
                <div class="card">
                <img src="{{ $lesson->image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $lesson->title }}</h5>
                        <a href="{{ route('lesson.show', $lesson->id) }}" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</main>
@endsection