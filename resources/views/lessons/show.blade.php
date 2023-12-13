@extends('layouts.layout')

@section('title', $lesson->title)

@section('content')
<main class="main">
    <div class="container">
        <div> {{ $lesson->title }}</div>
        <div> {{ $lesson->direction }}</div>    
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            @foreach($subscriptions as $subscription)
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">{{ $subscription->title }}</h4>
                        </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">{{ $subscription->price }} ₽</h1>
                        <ul class="list-unstyled mt-3 mb-4">
                        <li>{{ $subscription->count }} занятий</li>
                        <li>{{ $subscription->period }} месяца</li>
                        </ul>
                         <a href="{{ route('create.buy', [$lesson->id, $subscription->id]) }}" class="w-100 btn btn-lg btn-primary">Добавить</a>
                    </div>
                </div>
            @endforeach
        </div>
        
      </div>    
    </div>
</main>
@endsection