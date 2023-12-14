@extends('layouts.layout')

@section('title', 'Главная')

@section('content')
<main class="main">
  <div id="carouselExampleDark" class="carousel carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="{{ asset('img/main/classic.jpg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          @guest
            <h5>Добро пожаловать</h5>
            <p>Студия танцев будет рада приветстовать, если вы зайдете</p>
          @endguest
          @auth
            <h5>Рады Вас видеть, {{ auth()->user()->getName() }}!</h5>
          @endauth
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="{{ asset('img/main/classic1.jpg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          @guest
            <h5>Добро пожаловать</h5>
            <p>Студия танцев будет рада приветстовать, если вы зайдете</p>
          @endguest
          @auth
          @endauth
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img/main/classic2.jpg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            @guest
              <h5>Добро пожаловать</h5>
              <p>Студия танцев будет рада приветстовать, если вы зайдете</p>
            @endguest
            @auth
            @endauth
          </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
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