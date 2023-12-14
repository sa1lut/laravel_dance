<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('main.index') }}" class="brand-link">
      <img src="{{ asset('img/main/logo.png') }}" alt="Dance Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Dance</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header">Таблицы</li>
          <li class="nav-item">
            <a href="{{ route('admin.teacher.index') }}" class="nav-link">
              <i class="nav-icon fas fa-bars"></i>
              <p>
                Преподаватели
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.lesson.index') }}" class="nav-link">
              <i class="nav-icon fas fa-bars"></i>
              <p>
                Занятия
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.client.index') }}" class="nav-link">
              <i class="nav-icon fas fa-bars"></i>
              <p>
                Клиенты
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.subscription.index') }}" class="nav-link">
              <i class="nav-icon fas fa-bars"></i>
              <p>
                Абонементы
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>