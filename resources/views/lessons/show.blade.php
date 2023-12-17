@extends('layouts.layout')

@section('title', $lesson->title)


@section('content')
<main class="main">
    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col"></div>
            <div class="col align-self-center">
                <h1 class="section-title text-center fs-1"> {{ $lesson->title }}</h1>
                <img src="{{ $lesson->image }}" alt="">
            </div>
            <div class="col"></div>
        </div>

        <hr class="featurette-divider">
        <h2 class="section-title text-center fs-1 m-5">
            <span>Абонементы</span>
        </h2>
        <hr class="featurette-divider">

            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach($subscriptions as $subscription)
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title mb-2">{{ $subscription->title }}</h5>
                                <p class="card-text pricing-card-title">Цена: {{ $subscription->price }} ₽</p>
                                <p class="card-text">Длительность: {{ $subscription->period }} месяцев</p>
                                <p class="card-text">Число посещений: {{ $subscription->count }}</p>
                                <p class="card-text">Описание: {{ $subscription->description }}</p>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('create.buy', [$lesson->id, $subscription->id]) }}" class="w-100 btn btn-lg btn-primary">Приобрести</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        <hr class="featurette-divider">
        <h2 class="section-title text-center fs-1 m-5">
            <span>Преподаватели</span>
        </h2>
        <hr class="featurette-divider">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach($teachers as $teacher)
                <div class="card" style="width: 18rem;">
                    <img src="{{ $teacher->image }}" class="card-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $teacher->surname }} {{ $teacher->name }}</h5>
                    </div>
                </div>
                @endforeach
            </div>
        </div>    
    </div>
</main>
@endsection