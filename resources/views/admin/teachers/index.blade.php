@extends('admin.index')

@section('title', 'Преподаватели')
@section('add')
<a href="{{ route('admin.teacher.create') }}" class="btn btn-success float-sm-right">Добавить</a>
@endsection

@section('content')
<main class="main">
    <div class="container">
      <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>id</th>
                      <th>Фамилия</th>
                      <th>Имя</th>
                      <th>Дата рождения</th>
                      <th>Телефон</th>
                      <th>Действия</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($teachers as $teacher)
                        <tr data-widget="expandable-table" aria-expanded="false">
                            <td>{{ $teacher->id }}</td>
                            <td>{{ $teacher->surname }}</td>
                            <td>{{ $teacher->name }}</td>
                            <td>{{ $teacher->birthday }}</td>
                            <td>{{ $teacher->telephone }}</td>
                            <td><a href="{{ route('admin.teacher.edit', $teacher->id) }}" class="card-link">Изменить</a></td>
                        </tr>
                        <tr class="expandable-body">
                            <td colspan="6">
                                <img src="{{ $teacher->image }}" class="card-img-top" alt="...">
                            </td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
    </div>
</main>
@endsection