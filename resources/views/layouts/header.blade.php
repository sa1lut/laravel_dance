<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="mb-2 mb-md-0">
            <a href="{{ route('main.index') }}" class="d-inline-flex link-body-emphasis text-decoration-none">
                <img src="{{ asset('img/logo.png') }}">
            </a>
        </div>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="{{ route('main.index') }}" class="nav-link px-2">Главная</a></li>
            <li><a href="{{ route('lesson.index') }}" class="nav-link px-2">Занятия</a></li>
            <li><a href="#" class="nav-link px-2">Контакты</a></li>
            <li><a href="#" class="nav-link px-2">О нас</a></li>
        </ul>

        @guest
            <a href="{{ route('auth.login') }}">
                <button type="button" class="btn btn-primary">
                    Вход
                </button>
            </a>
        @endguest
        @auth
            <div class="dropdown">
                <button class="btn btn-sm dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ auth()->user()->getName() }}
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <li><a href="#" class="dropdown-item">Action</a></li>
                    <li><button class="dropdown-item" type="button">Another action</button></li>
                    @can('view', auth()->user())
                        <li><a href="{{ route('admin.index') }}" class="dropdown-item">Управление</a></li>
                    @endcan
                    <li><a href="{{ route('auth.logout') }}" class="dropdown-item">Выйти</a></li>
                </ul>
            </div>
        @endauth
        <!-- <div class="col-md-3 text-end">
            <button type="button" class="btn btn-outline-primary me-2"><a href="../login.php">Войти</a></button>
        </div> -->
</header>