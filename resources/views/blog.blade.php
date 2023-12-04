@extends('layout.main')

@section('container')
@foreach ($post as $item)
<article class="mb-5">
    <h2> <a href="/post/{{ $item['slug'] }}">

    {{ $item['title'] }}    
    </a>
    </h2>
    <p>{{ $item['body'] }}</p>      
</article>  
@endforeach
@endsection
