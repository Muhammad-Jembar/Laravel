@extends('layout.main')



@section('container')  
<article>
 <h1>{{ $posts->title}}</h1>

  <p>By : Muhammad Jembar Risky in <a href="/categories/{{ $posts->category->slug}}"> {{ $posts->category->name}}</a></p>
 
 {{ $posts->body}}

</article>

<a  href="/blog">kembali</a>
@endsection


