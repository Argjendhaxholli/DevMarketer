@extends('layouts.manage')

@section('content')

  <div class="container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">View User Details</h1>
      </div> <!-- end of column -->

      <div class="column">
        <a href="{{route('users.edit', $user->id)}}" class="button is-primary is-pulled-right"> <i class="fa fa-user m-r-10"></i> Edit</a>
      </div>
    </div>
    <hr class="m-t-0">

    <div class="columns">
      <div class="column">
          <div class="field">
            <label for="name" class="label">Name</label>
            <p class="control">
              <pre>{{$user->name}}</pre>
            </p>
          </div>
          <div class="field">
            <label for="email" class="label">Email</label>
            <p class="control">
              <pre>{{$user->email}}</pre>
            </p>
          </div>
          <div class="field">
            <label for="role" class="label">Roles</label>
            <ul>
              {{$user->roles->count() == 0 ? "This is has not been assigned any roles yet" : ''}}
              @foreach ($user->roles as $role)
                <li>{{$role->display_name}} ({{$role->description}})</li>
              @endforeach
            </ul>
          </div>
      </div><!-- end of column -->
    </div>
  </div>
@endsection

@section('scripts')
<script>
  var app = new Vue({
    el: '#app',
    data: {
      password_options: 'keep',
      rolesSelected: {{!! $user->roles->pluck('id') !!}}
    }
  })
</script>
@endsection
