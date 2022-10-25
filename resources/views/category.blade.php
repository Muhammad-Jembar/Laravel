@extends('layout.main')

@section('container')

<h2>Halaman Blog Post</h2>
 

@foreach ($posts as $post)

<article>
<h1><a href="/posts/{{ $post->category->slug }}">{{ $post->category->name }}</a></h1>
<p>{{ $post->body}}</p>
</article>
@endforeach

 
@endsection
