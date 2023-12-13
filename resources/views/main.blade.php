@extends('layouts.layout')

@section('title', 'Главная')

@section('content')
<main class="main">
  <div id="myCarousel" class="carousel slide mb-6 bg-secondary " data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
      <img class="bd-placeholder-img" src="{{ asset('img/main/img-main1.png') }}" alt="...">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Example headline.</h1>
            <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" src="{{ asset('img/main/img-main2.png') }}" alt="...">
        <div class="container">
          <div class="carousel-caption" style="color: black;">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" src="{{ asset('img/main/img-main3.png') }}" alt="...">
        <div class="container">
          <div class="carousel-caption text-end" style="color: black;">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="container">
    <h2 class="section-title text-center fs-1 m-5">
        <span>Занятия</span>
    </h2>
  <hr class="featurette-divider">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach($lessons as $lesson)
            <div class="col">
                <div class="card">
                <img src="{{ $lesson->image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $lesson->title }}</h5>
                        <p class="card-text">{{ $lesson->direction }}</p>
                        <a href="{{ route('lesson.show', $lesson->id) }}" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    <hr class="featurette-divider">

    </div>
</main>

@endsection