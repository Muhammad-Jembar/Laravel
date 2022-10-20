@extends('layout.main')

@section('container')
   @foreach ($posts as $nama)
       <article>
       <h1><a href="/posts/{{ $nama->id}}">{{ $nama->title }}</a>
       </h1>
       <p>{{ $nama->excerpt}}</p>
       </article>
   @endforeach
   
@endsection
