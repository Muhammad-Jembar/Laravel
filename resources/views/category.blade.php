@extends('layout.main')

@section('container')
<h2>Judul Category : {{ $category }}</h2>
   @foreach ($posts as $nama)
       <article>
       <h1><a href="/posts/{{ $nama->id}}">{{ $nama->title }}</a>
       </h1>
       <p>{{ $nama->excerpt}}</p>
       </article>
   @endforeach
   
@endsection
