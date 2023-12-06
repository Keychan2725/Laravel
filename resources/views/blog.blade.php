@extends('layout.main')

@section('container')
  @foreach ($post as $post)
    <article class="mb-5">
      <div class="row d-flex">
        <div class="col-md-6">
          <div class="card flex-grow-1">
            <div class="card-header">
              <h2>{{ $post->title }}</h2>
            </div>
            <div class="card-body">
              <p>{{ $post->excerpt }}</p>
              <a href="/post/{{ $post->slug }}" class="btn btn-primary">Go Title</a>
            </div>
          </div>
        </div>
      </div>
    </article>
  @endforeach
@endsection
