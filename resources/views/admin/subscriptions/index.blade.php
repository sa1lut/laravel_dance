@extends('admin.index')

@section('title', 'Абонементы')
@section('add')
<a href="{{ route('admin.subscription.create') }}" class="btn btn-success float-sm-right">Добавить</a>
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
                      <th>Цена</th>
                      <th>Период</th>
                      <th>Занятия</th>
                      <th>Действия</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($subscriptions as $subscription)
                        <tr data-widget="expandable-table" aria-expanded="false">
                            <td>{{ $subscription->id }}</td>
                            <td>{{ $subscription->title }}</td>
                            <td>{{ $subscription->price }}</td>
                            <td>{{ $subscription->period }}</td>
                            <td>{{ $subscription->lessons->title }}</td>
                            <td><a href="{{ route('admin.subscription.edit', $subscription->id) }}" class="card-link">Изменить</a></td>
                        </tr>
                        <tr class="expandable-body">
                          <td colspan="6">
                            <p>
                                {{ $subscription->description }}
                            </p>
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