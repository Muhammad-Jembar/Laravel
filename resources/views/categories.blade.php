@extends('layout.main')

@section('container')

<h2>Halaman Blog Post</h2>
 

@foreach ($categories as $category)

<ul>
    <li>
        <h1><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h1>
    </li>
</ul>


@endforeach

 
@endsection
