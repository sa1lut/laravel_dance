<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="col-md-3 mb-2 mb-md-0">
            <a href="{{ route('main.index') }}" class="d-inline-flex link-body-emphasis text-decoration-none">
                <img src="{{ asset('img/logo.png') }}">
            </a>
        </div>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="{{ route('main.index') }}" class="nav-link px-2">Главная</a></li>
            <li><a href="{{ route('lesson.index') }}" class="nav-link px-2">Занятия</a></li>
            <li><a href="#" class="nav-link px-2">придумать</a></li>
            <li><a href="#" class="nav-link px-2">О нас</a></li>
        </ul>

        @guest
            <a href="{{ route('auth.login') }}">
                <button type="button" class="btn btn-sm">
                    Вход
                </button>
            </a>
            <a href="{{ route('auth.register') }}">
                <button type="button" class="btn btn-sm">
                    Регистрация
                </button>
            </a>
        @endguest
        @auth
            <a href="{{ route('auth.logout') }}">
                <button type="button" class="btn btn-sm">
                    Выйти
                </button>
            </a>
        @endauth
        <!-- <div class="col-md-3 text-end">
            <button type="button" class="btn btn-outline-primary me-2"><a href="../login.php">Войти</a></button>
        </div> -->
</header>