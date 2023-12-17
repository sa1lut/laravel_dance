@extends('admin.layouts.layout')

@section('title', 'Изменить статус')

@section('content')
<main class="main">
    <div class="container">
        <form class="row g-3" action="{{ route('admin.clientsubscription.update', $clientSubscription->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="col-md-6">
                <label for="date_purchase" class="form-label">Дата бронирования</label>
                <input type="text" class="form-control " id="date_purchase" name="date_purchase" placeholder="Название" value="{{ $clientSubscription->date_purchase }}" disabled>
            </div>
            <div class="col-md-6">
                <label for="date_end" class="form-label">Дата окончания</label>
                <input type="text" class="form-control " id="date_end" name="date_end" placeholder="Цена" value="{{ $clientSubscription->date_end }}" disabled>
            </div>
            <div class="form-group">
                <label>Статус</label>
                <select class="form-control" style="width: 100%;" name="status">
                @foreach($statuses as $statusId => $statusTitle)
                    <option value="{{ $statusId }}" @if($clientSubscription->status === $statusId) selected @endif>{{ $statusTitle }}</option>
                @endforeach
                </select>
            </div>
            
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Изменить</button>
            </div>
            <a href="{{ route('admin.clientsubscription.update', $clientSubscription->id) }}">sadfasdf</a>
        </form>
    </div>
</main>
@endsection