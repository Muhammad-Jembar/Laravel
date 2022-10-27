@extends('layout.main')

@section('container')

<h2>Halaman Blog Post </h2>
 

@foreach ($posts as $post)

<article class="mb-5 border-bottom">
  <h2><a href="/posts/{{ $post->slug}}" class="text-decoration-none">{{ $post->title}}</a></h2>


  <p>By : Muhammad Jembar Risky <a href="/categories/{{ $post->category->slug}}" class="text-decoration-none">{{ $post->category->name}}</a></p>

  <p>{{ $post->excerpt}}</p>

  <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Selengkapnya</a>
</article>
@endforeach


 
@endsection
