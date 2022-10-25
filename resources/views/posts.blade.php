@extends('layout.main')

@section('container')

<h2>Halaman Blog Post </h2>
 

@foreach ($posts as $post)

<article>
  <h2><a href="/categories/{{ $post->category->slug}}">{{ $post->title}}</a></h2>
  <p>{{ $post->excerpt}}</p>
</article>
@endforeach


 
@endsection
