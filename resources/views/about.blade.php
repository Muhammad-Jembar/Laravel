<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jembar Risky / {{ $title }}</title>
    <link rel="stylesheet" href="css/tampilan.css">
</head>
<body>
    @extends('layout.main')

    @section('container')

    <h1>Halaman About</h1>
    <ul>
        <li><?= $nama; ?></li>
        <li><?= $kelas; ?></li>
        <li><?= $email; ?> </li>
    </ul>

    @endsection

        
    @section('tampilan')
   @foreach ($kedua as $b)
       <h1>{{ $b["title"] }}</a></h1>
       <h5>{{ $b["author"]}}</h5>
       <p>{{ $b["body"]}}</p>
   @endforeach
    
@endsection

    
  @section('tampilan2')

  <div class="satu">
  <div class="row">
        <div class="col-md-4 offset-md-2">
        @include('partial.card')
        </div>
        <div class="col-md-2 offset-md-1">
        @include('partial.card')
        </div>
  </div>
</div>
  @endsection

 
  
</body>
</html>