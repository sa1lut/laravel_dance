@extends('layouts.layout')

@section('title', $lesson->title)

@section('content')
<main class="main">
    <div class="container">
        <div> {{ $lesson->title }}</div>
        <div> {{ $lesson->direction }}</div>
        <a href="{{ route('lesson.edit', $lesson->id) }}" class="btn btn-primary">Изменить</a>
        
        <form action="{{ route('lesson.delete', $lesson->id)}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" class="btn btn-danger" value="Удалить">
        </form>
    </div>
</main>
@endsection