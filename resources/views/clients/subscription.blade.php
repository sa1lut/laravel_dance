@extends('layouts.layout')

@section('title', 'Мой абонементы')
@section('content')
<main class="main">
    <div class="container">
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>Дата оплаты</th>
                <th>Дата окончания</th>
                <th>Дата окончания</th>
            </tr>
            </thead>
            <tbody>
            @for($i = 0; $i < count($clients); $i++)
                <tr data-widget="expandable-table" aria-expanded="false">
                    <td>{{ $subscriptions[$i]->title }}</td>
                    <td>{{ $clients[$i]->date_purchase }}</td>
                    <td>{{ $clients[$i]->date_end }}</td>
                </tr>
            @endfor
            </tbody>
        </table>
    </div>
</main>
@endsection