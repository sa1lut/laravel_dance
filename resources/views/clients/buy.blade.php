@extends('layouts.layout')

@section('title', 'Подтверждение')
@section('content')
<main class="main">
    <div class="container">
        <h1 class="section-title text-center fs-1 m-3">
            <span>Подтверждение</span>
        </h1>
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <form action="{{ route('store.buy', $subscription->id) }}" method="post">
                    @csrf
                    <p class="fs-5">Вы уверены, что хотите приобрести абоенмент &#171;{{ $subscription->title }}&#187;?</p>
                    <div class="group visibility-hidden">
                        <input type="hidden" class="invisible" name="lesson_id" value="{{ $lesson }}">
                        <input type="hidden" class="invisible" name="subscription_id" value="{{ $subscription->id }}">
                        <input type="hidden" class="invisible" name="client_id" value="{{ auth()->user()->clients->value('id') }}">
                        <input type="hidden" class="invisible" name="date_purchase" value="{{ date('Y-m-d') }}">
                        <input type="hidden" class="invisible" name="date_end" value="{{ date('Y-m-d', strtotime('+' . $subscription->period . 'month')) }}">
                    </div>
                    <a href="{{ route('lesson.show', $lesson) }}" class="btn btn-danger">Отмена</a>
                    <button type="submit" class="btn btn-success">Подтвердить</button>
                </form>
            </div>
            <div class="col"></div>
        </div>
            
        
    </div>
</main>
@endsection