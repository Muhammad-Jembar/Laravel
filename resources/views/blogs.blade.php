@extends('layout.main')

@section('container')
   @foreach ($posts as $nama)
       <article>
       <h1><a href="/about">{{ $nama["title"] }}</a>
       </h1>
       <h5>{{ $nama["author"]}}</h5>
       <p>{{ $nama["body"]}}</p>
       </article>
   @endforeach
    <a href="/about">Kembali</a>
@endsection