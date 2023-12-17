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
    <div class="carousel-inner text">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="{{ asset('img/main/classic.jpg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block text-white">
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
        <div class="carousel-caption d-none d-md-block text-white">
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
        <div class="carousel-caption d-none d-md-block text-white">
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
    <section class="find-us pb-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title text-center fs-1 m-5">
                        <span> <a id="contact">Как с нами связаться</a></span>
                    </h2>
                </div>
            </div>
            <div class="card bg-transparent">
                <div class="card-body row">
                    <div class="col-6 text-center d-flex align-items-center justify-content-center">
                        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ad3f91aa5b527e2d679fca4c681626d7d502f804c85afa0f034ae359048425cf1&amp;source=constructor" width="100%" height="500" frameborder="0"></iframe>
                    </div>
                    <div class="col-6 text-center">
                        <div class="form-group">
                            <label for="telephone" class="fs-1">Наш телефон</label>
                            <input type="tel" readonly class="form-control-plaintext fs-4 text-center" id="telephone" value="+7 (343) 123-32-12">
                        </div>
                        <div class="form-group">
                            <label for="email" class="fs-1">Наша почта</label>
                            <input type="text" readonly class="form-control-plaintext fs-4 text-center" id="email" value="dance@example.com">
                        </div>
                        <div class="form-group">
                            <label for="address" class="fs-1">Наш адрес</label>
                            <input type="text" readonly class="form-control-plaintext fs-4 text-center" id="address" value="г. Екатеринбург, ул. Крауля, 168">
                        </div>
                    </div>       
                </div>
            </div> 
        </div>
      </section>
      <div class="col-12">
          <h2 class="section-title text-center fs-1 m-5">
              <span><a id="about">О нас</a></span>
          </h2>
      </div>
      <hr class="featurette-divider">
      <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">История танца</h2>
            <p class="lead">С самых ранних моментов известной человеческой истории танец сопровождал древние ритуалы, духовные собрания и общественные мероприятия. Будучи проводником транса, духовной силы, удовольствия, выражения, исполнения и взаимодействия, танец проник в нашу природу с самых ранних моментов нашего существования – с момента, когда первые африканские племена покрыли себя военными красками, музыка и танцы распространились во все четыре уголка мира. Без сомнения, танец остаются одной из самых выразительных форм общения, которые нам известны.</p>
        </div>
        <div class="col-md-5">
            <img src="{{asset('img/about/about-1.jpg')}}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
        </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading fw-normal lh-1">Наша команда</h2>
            <p class="lead">Наших инструкторов объединяет не только профессионализм, но и искренняя страсть к танцам. У каждого из них есть своя уникальная история, связанная с танцами. <br><br>Наша команда предлагает множество возможностей для обучения различным стилям танцев. Мы воплощаем индивидуальный подход к каждому ученику, стремясь разбудить в них страсть к танцам и помочь им раскрыть свой творческий потенциал.</p>
        </div>
        <div class="col-md-5 order-md-1">
            <img src="{{asset('img/about/about-2.jpg')}}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
        </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">Наши ценности</h2>
            <p class="lead">Индивидуальность: Мы ценим уникальность каждого ученика и стремимся создать приветливую и поддерживающую обстановку, где каждый может по-своему раскрыть свой потенциал и выразить себя через танец.<br><br>

                            Профессионализм: Мы вкладываем важность в качество обучения и предоставляем только лучшие занятия, которые вдохновляют и помогают нашим ученикам развиваться как танцоры.<br><br>

                            Творчество: Мы поощряем творческое мышление и исследование различных стилей танцев, поскольку считаем, что это ключевой элемент в развитии как танцоров, так и личностей.</p>
        </div>
        <div class="col-md-5">
            <img src="{{asset('img/about/about-3.jpg')}}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
        </div>
        </div>


    </div>
    
</main>

@endsection