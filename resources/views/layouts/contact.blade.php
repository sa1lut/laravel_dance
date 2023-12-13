@extends('layouts.layout')

@section('title', 'Контакты')

@section('content')
<main class="main">
    <div class="container">
        <section class="find-us pb-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h2 class="section-title text-center">
                            <span>Как с нами связаться</span>
                        </h2>
                    </div>
                </div>
                <div class="card bg-transparent">
                    <div class="card-body row">
                        <div class="col-5 text-center d-flex align-items-center justify-content-center">
                            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ad3f91aa5b527e2d679fca4c681626d7d502f804c85afa0f034ae359048425cf1&amp;source=constructor" width="100%" height="500" frameborder="0"></iframe>
                        </div>
                        <div class="col-7 text-center">
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
    </div>
</main>
@endsection