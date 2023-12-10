@extends('admin.index')

@section('title', 'Занятия')
@section('add')
<a href="{{ route('admin.lesson.create') }}" class="btn btn-success float-sm-right">Добавить</a>
@endsection

@section('content')
<main class="main">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-5">
            @foreach($lessons as $lesson)
            <div class="col">
                <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/img-main1.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $lesson->title }}</h5>
                        <p class="card-text">{{ $lesson->direction }}</p>
                        <a href="{{ route('admin.lesson.edit', $lesson->id) }}" class="btn btn-primary">Изменить</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</main>
@endsection