@extends('layout.main')


@section('container')
    <h1>Halaman Home</h1>
    
@endsection

@section('wrapper')
<div class="wrapper">
    <h1>Halaman Home</h1>
    <form action="" method="POST">
     <p>
        <label for="username" class="tampilan">Username</label>
        <input type="text" name="username" placeholder="Masukan Username" required autofocus autocomplete="off">
     </p>

     <p>
        <label for="password">Password</label>
        <input type="password" name="username" placeholder="Masukan Password">
     </p>
    
    <p>
        <button type="submit" name="submit">Login</button>
    </p>

     
    </form>
   </div>

@endsection