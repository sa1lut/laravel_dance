@extends('layouts.layout')

@section('title', 'Мой абонементы')
@section('content')
<main class="main">
    <div class="container">
        @if(empty($clients->all()))
        <h2>Тут пока ничего нет...</h2>
        @endif
        <div class="card-group">
            @for($i = 0; $i < count($clients); $i++)
                <div class="card mx-1">
                    <img src="{{ $lessons[$i]->image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $subscriptions[$i]->title }}</h5>
                            <p class="card-text">Направление: {{ $lessons[$i]->title }}</p>
                            <p class="card-text">Цена: {{ $subscriptions[$i]->price }} ₽</p>
                            <p class="card-text">Дата окончания: {{ $clients[$i]->date_end }}</p>
                            <p class="card-text">Число посещений: {{ $subscriptions[$i]->count }}</p>
                            <p class="card-text">Описание: {{ $subscriptions[$i]->description }}</p>
                        </div>
                    <div class="card-footer">
                        <small class="text-muted">Статус:
                        @foreach(STATUSES as $statusId => $statusTitle)
                            @if($clients[$i]->status === $statusId) {{ $statusTitle }} @endif
                        @endforeach
                        </small>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</main>
@endsection