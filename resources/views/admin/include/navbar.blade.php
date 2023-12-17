<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('admin.teacher.index') }}" class="nav-link">Преподаватели</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('admin.lesson.index') }}" class="nav-link">Занятия</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('admin.client.index') }}" class="nav-link">Клиенты</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('admin.subscription.index') }}" class="nav-link">Абонементы</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('admin.clientsubscription.index') }}" class="nav-link">Клиенты с абонементами</a>
      </li>
    </ul>
</nav>
<!-- /.navbar -->