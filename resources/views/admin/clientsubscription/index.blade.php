@extends('admin.index')

@section('title', 'Клиенты с абонементами')
@section('add')
<!-- <a href="{{ route('admin.client.create') }}" class="btn btn-success float-sm-right">Добавить</a> -->
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
                      <th>Логин</th>
                      <th>Название занятия</th>
                      <th>Название абонемента</th>
                      <th>Статус</th>
                      <th>Действия</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($clientSubscriptions as $clientSubscription)
                        <tr data-widget="expandable-table" aria-expanded="false">
                            <td>{{ $clientSubscription->id }}</td>
                            <td>{{ $clientSubscription->clients->user->login }}</td>
                            <td>{{ $clientSubscription->subscriptions->lessons->title }}</td>
                            <td>{{ $clientSubscription->subscriptions->title }}</td>
                            <td>{{ $clientSubscription->status }}</td>
                            <td><a href="{{ route('admin.clientsubscription.edit', $clientSubscription->id) }}" class="card-link">Изменить</a></td>
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