@extends('layouts.manage')

@section('content')
  <div class="container">
    <div class="columns">
      <div class="column">
        <h1 class="title">Manage Users</h1>
      </div>
      <div class="column">
        <a href="{{route('users.create')}}" class="button is-primary f-right"> <i class="fa fa-user-add m-r-10"></i> Create New  User</a>
      </div>
    </div>
    <hr class="m-t-0">
    <div class="card">
      <table class="table is-fullwidth is-narrow">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Date Created</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
            <tr>
              <th>{{$user->id}}</th>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->created_at->toFormattedDateString()}}</td>
              <td>
                <a class="button is-outlined" href="{{route('users.edit', $user->id)}}">Edit</a>
                <a class="button is-outlined" href="{{route('users.show', $user->id)}}">View</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table><!-- end of table -->
    </div> <!-- end of card -->

    {{$users->links('vendor.pagination.default')}}
  </div>
@endsection
