@extends('admin.index')

@section('title', 'Занятия')
@section('add')
<a href="{{ route('admin.lesson.create') }}" class="btn btn-success float-sm-right">Добавить</a>
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
                      <th>Название</th>
                      <th>Действия</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($lessons as $lesson)
                        <tr data-widget="expandable-table" aria-expanded="false">
                            <td>{{ $lesson->id }}</td>
                            <td>{{ $lesson->title }}</td>
                            <td><a href="{{ route('admin.lesson.edit', $lesson->id) }}" class="card-link">Изменить</a></td>
                        </tr>
                        <tr class="expandable-body">
                            <td colspan="6">
                                <img src="{{ $lesson->image }}" class="card-img-top" alt="...">
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