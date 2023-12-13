@extends('layouts.layout')

@section('title', 'Подтверждение')
@section('content')
<main class="main">
    <div class="container">
        <form action="{{ route('store.buy', $subscription->id) }}" method="post">
            @csrf
            <input type="text" class="invisible" name="subscription_id" value="{{ $subscription->id }}">
            <input type="text" class="invisible" name="client_id" value="{{ auth()->user()->clients->value('id') }}">
            <input type="date" class="invisible" name="date_purchase" value="{{ date('Y-m-d') }}">
            <input type="date" class="invisible" name="date_end" value="{{ date('Y-m-d', strtotime('+' . $subscription->period . 'month')) }}">
            <a href="{{ route('lesson.show', $lesson) }}" class="btn btn-danger">Отмена</a>
            <button type="submit" class="btn btn-success">Подтвердить</button>
        </form>
    </div>
</main>
@endsection