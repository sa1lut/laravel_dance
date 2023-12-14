@extends('layouts.layout')

@section('title', 'Мой абонементы')
@section('content')
<main class="main">
    <div class="container">
        <div class="card-group">
            @for($i = 0; $i < count($clients); $i++)
                <div class="card mx-1">
                    <img src="{{ $lessons[$i]->image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $subscriptions[$i]->title }}</h5>
                            <p class="card-text">Направление: {{ $lessons[$i]->title }}</p>
                            <p class="card-text">Дата окончания: {{ $clients[$i]->date_end }}</p>
                        </div>
                    <div class="card-footer">
                        <small class="text-muted">Дата покупки: {{ $clients[$i]->date_purchase }}</small>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</main>
@endsection