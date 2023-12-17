@extends('layouts.layout')

@section('title', 'О нас')

@section('content')
<main class="main">
    <div class="container">
        
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
            <p class="lead">1. Индивидуальность: Мы ценим уникальность каждого ученика и стремимся создать приветливую и поддерживающую обстановку, где каждый может по-своему раскрыть свой потенциал и выразить себя через танец.<br><br>

                            2. Профессионализм: Мы вкладываем важность в качество обучения и предоставляем только лучшие занятия, которые вдохновляют и помогают нашим ученикам развиваться как танцоры.<br><br>

                            3. Творчество: Мы поощряем творческое мышление и исследование различных стилей танцев, поскольку считаем, что это ключевой элемент в развитии как танцоров, так и личностей.</p>
        </div>
        <div class="col-md-5">
            <img src="{{asset('img/about/about-3.jpg')}}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
        </div>
        </div>

    </div>
</main>
@endsection