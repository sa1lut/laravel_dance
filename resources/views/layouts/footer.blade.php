<div class="container-fluid">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-body-secondary">&copy; 2023 Dance, Inc</p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
    </a>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="{{ route('main.index') }}" class="nav-link px-2 text-body-secondary">Главная</a></li>
      <li class="nav-item"><a href="{{ route('lesson.index') }}" class="nav-link px-2 text-body-secondary">Занятия</a></li>
      <li class="nav-item"><a href="{{ route('main.index') }}#contact" class="nav-link px-2 text-body-secondary">Контакты</a></li>
      <li class="nav-item"><a href="{{ route('main.index') }}#about" class="nav-link px-2 text-body-secondary">О нас</a></li>
    </ul>
  </footer>
</div>