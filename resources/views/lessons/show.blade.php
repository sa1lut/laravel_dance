@extends('layouts.layout')

@section('title', $lesson->title)

@section('content')
<main class="main">
    <div class="container">
        <div> {{ $lesson->title }}</div>
        <div> {{ $lesson->direction }}</div>        
    </div>
</main>
@endsection