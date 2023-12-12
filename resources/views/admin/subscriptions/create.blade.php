@extends('admin.layouts.layout')

@section('title', 'Добавить абонемент')

@section('content')
<main class="main">
    <div class="container">
        <form class="row g-3" action="{{ route('admin.subscription.store') }}" method="post">
            @csrf
            <div class="col-md-6">
                <label for="title" class="form-label">Название</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Название">
            </div>
            <div class="col-md-6">
                <label for="price" class="form-label">Цена</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Цена">
            </div>
            <div class="col-md-6">
                <label for="period" class="form-label">Период</label>
                <input type="text" class="form-control" id="period" name="period" placeholder="Период">
            </div>
            <div class="col-md-6">
                <label for="count" class="form-label">Количество</label>
                <input type="text" class="form-control" id="count" name="count" placeholder="Количество">
            </div>
            <div class="form-group">
                  <label>Занятие</label>
                  <select class="form-control select2bs4" style="width: 100%;" name="lesson_id">
                    @foreach($lessons as $lesson)
                        <option value="{{ $lesson->id}}">{{ $lesson->title }}</option>
                    @endforeach
                  </select>
                </div>
                <!-- /.form-group -->
            <div class="col-12">
                <label for="description" class="form-label">Описание</label>
                <textarea class="form-control" id="description" name="description" placeholder="Описание"></textarea>
            </div>
            
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Добавить</button>
            </div>
        </form>
    </div>
</main>

@endsection