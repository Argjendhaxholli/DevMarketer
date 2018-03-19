@extends('layouts.manage');

@section('content')
  <div class="container">
    <div class="columns">
      <div class="column">
        <h1 class="title">This is the posts.index page</h1>
      </div>
      <div class="column">
        <a href="{{route('posts.create')}}" class="button is-primary f-right"> <i class="fa fa-user-add m-r-10"></i> Create New  Post</a>
      </div>
    </div>
    <hr class="m-t-0">

  </div><!-- end container -->
@endsection
