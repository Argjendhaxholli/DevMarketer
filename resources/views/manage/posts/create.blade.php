@extends('layouts.manage')

@section('content')
  <div class="container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Add New Post</h1>
      </div>
      <div class="column">

      </div>
    </div>
    <hr class="m-t-0">

    <form action="{{route('posts.store')}}" method="POST">
      {{ csrf_field() }}
      <div class="columns">
        <div class="column is-three-quarters">
          <div class="field">
            <slug-widget url="{{url('/')}}" subdirectory="/blog/" :title="title" @slug-changed="updateSlug"></slug-widget>
            <input type="hidden" name="slug" value="slug">
          </div>
          <div class="field m-t-40">
            <div class="control">
              <textarea class="textarea is-primary" type="textarea" placeholder="Compose your masterpiece..." rows="30"></textarea>
            </div>
          </div>
        </div><!-- end of column -->
        <div class="column is-one-quarter-desktop is-narrow-tablet">
          <div class="card card-widget">
            <div class="author-widget widget-area">
              <div class="selected-author">
                <img src="https://placehold.it/50x50"/>
                <div class="author">
                  <h4>Argjend Haxholli</h4>
                  <p class="subtitle">
                    ( haxholli )
                  </p>
                </div>
              </div>
            </div>
            <div class="post-status-widget widget-area">
              <div class="status">
                <div class="status-icon">
                  <b-icon icon="assignment" size="is-medium"></b-icon>
                </div>
                <div class="status-details">
                  <h4><span class="status-emphasis">Draft</span> Saved</h4>
                  <p>A Few Minutes Ago</p>
                </div>
              </div>
            </div>
            <div class="publish-buttons-widget widget-area">
              <div class="secondary-action-button">
                <button class="button is-info is-outlined is-fullwidth">Save Draft</button>
              </div>
              <div class="primary-action-button">
                <button class="button is-primary is-fullwidth">Publish</button>
              </div>
            </div>
          </div>
        </div> <!-- end of .column.is-one-quarter -->
      </div>
    </form>

  </div> <!-- end of .flex-container -->
@endsection

@section('scripts')
  <script>
    var app = new Vue({
      el: "#app",
      data:{
        api_token: '{{Auth::user()->api_token}}'
      }
    })
  </script>
@endsection
