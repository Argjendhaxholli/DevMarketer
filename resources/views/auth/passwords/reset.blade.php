@extends('layouts.app')

@if (session('status'))
    <div class="notification is-success">
        {{ session('status') }}
    </div>
@endif

@section('content')
  <div class="columns m-t-20">
    <div class="column is-one-third is-offset-one-third m-t-100">
      <div class="card">
        <div class="card-content">
          <h1 class="title">Reset Password</h1>
          <form action="{{route('register')}}" method="POST" role="form">
            {{ csrf_field() }}
            <input type="hidden" name="token" value="{{$token}}">
            <div class="field">
              <label for="email" class="label">Email Address</label>
              <p class="control">
                <input class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="text" name="email" id="email" value="{{old('email')}}" placeholder="name@example.com" required>
              </p>
              @if ($errors->has('email'))
                <p class="help is-danger">{{$errors->first('email')}}</p>
              @endif
            </div>
            <div class="columns">
              <div class="column">
                <div class="field">
                  <label for="password" class="label">Password</label>
                  <p class="control">
                    <input class="input {{$errors->has('password') ? 'is-danger' : ''}}" type="password" name="password" id="password" required>
                  </p>
                  @if ($errors->has('password'))
                    <p class="help is-danger">{{$errors->first('password')}}</p>
                  @endif
                </div>
              </div>
              <div class="column">
                <div class="field">
                  <label for="password" class="label">Confirm Password</label>
                  <p class="control">
                    <input class="input {{$errors->has('password_confirmation') ? 'is-danger' : ''}}" type="password" name="password" id="password" required>
                  </p>
                  @if ($errors->has('password_confirmation'))
                    <p class="help is-danger">{{$errors->first('password_confirmation')}}</p>
                  @endif
                </div>
              </div>
            </div>

            <button class="button is-primary is-outlined is-fullwidth m-t-30" type="submit" name="button">Reset Password</button>
          </form>
        </div> <!-- end of card-content-->
      </div><!-- end of card-->
      <h5 class="has-text-centered"><a href="{{route('login')}}" class="is-muted">Already have an Account?</a></h5>
    </div>
  </div>
@endsection
