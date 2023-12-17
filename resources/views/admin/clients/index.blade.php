@extends('admin.index')

@section('title', 'Клиенты')
@section('add')
<a href="{{ route('admin.client.create') }}" class="btn btn-success float-sm-right">Добавить</a>
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
                    @foreach($clients as $client)
                        <tr data-widget="expandable-table" aria-expanded="false">
                            <td>{{ $client->id }}</td>
                            <td>{{ $client->surname }}</td>
                            <td>{{ $client->name }}</td>
                            <td>{{ $client->birthday }}</td>
                            <td>{{ $client->telephone }}</td>
                            <td><a href="{{ route('admin.client.edit', $client->id) }}" class="card-link">Изменить</a></td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          @if(!$clients->isEmpty())
          <div class="">{{ $clients->links() }}</div>
            
          @endif
        </div>
        <!-- /.row -->
        
    </div>
    
</main>
@endsection