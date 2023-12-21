@extends('layout.main')

@section('container')

<article>
    <h1 class="mb-5">{{ $posts->title }}</h1>
    <p>By : Satria Chandra Pamungkas  <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    {!! $posts->body !!} 
</article>

@endsection


 