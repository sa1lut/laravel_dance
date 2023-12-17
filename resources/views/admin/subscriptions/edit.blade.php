@extends('admin.layouts.layout')

@section('title', 'Изменить абонемент')

@section('content')
<main class="main">
    <div class="container">
        <form class="row g-3" action="{{ route('admin.subscription.update', $subscription->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="col-md-6">
                <label for="title" class="form-label">Название</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Название" value="{{ $subscription->title }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="price" class="form-label">Цена</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="Цена" value="{{ $subscription->price }}">
                @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="period" class="form-label">Период</label>
                <input type="text" class="form-control @error('period') is-invalid @enderror" id="period" name="period" placeholder="Период" value="{{ $subscription->period }}">
                @error('period')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="count" class="form-label">Количество</label>
                <input type="text" class="form-control @error('count') is-invalid @enderror" id="count" name="count" placeholder="Количество" value="{{ $subscription->count }}">
                @error('count')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                  <label>Занятие</label>
                  <select class="form-control select2bs4 @error('lesson_id') is-invalid @enderror" style="width: 100%;" name="lesson_id">
                    @foreach($lessons as $lesson)
                        <option
                        @foreach($lesson->subscriptions as $lessonSubscription)
                            {{ $lesson->id === $lessonSubscription->id ? 'selected' : ''}}
                        @endforeach
                        value="{{ $lesson->id}}">{{ $lesson->title }}</option>
                    @endforeach
                  </select>
                  @error('lesson_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <!-- /.form-group -->
            <div class="col-12">
                <label for="description" class="form-label">Описание</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="Описание">{{ $subscription->description }}</textarea>
                @error('description')
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