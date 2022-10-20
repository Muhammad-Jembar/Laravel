@extends('layout.main')



@section('container')  
<article>
 <h1>{{ $posts->title}}</h1>
 
 {{ $posts->body}}

</article>

<a  href="/blog">kembali</a>
@endsection


