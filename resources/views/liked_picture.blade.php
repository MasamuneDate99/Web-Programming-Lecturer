@extends('navigation.master')

@section('title', 'Liked Picture')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Liked Picture</title>
</head>
<body>
    <main class = "d-flex flex-direction-row flex-wrap justify-content-center">
        {{-- ini gue bingung cara nampilin yg di like gimana --}}
        @foreach ($images as $image) 
        <div class="card m-2 bg-white text-black border border-warning col-md-3" style="width: 18rem;">
            <img width="200" class="card-img-top{{Storage::url($image->image)}}" alt="{{$image->name}}">
            <div class="card-body">
                <h5 class="card-title">{{$image->name}}</h5>
                {{-- ini optional kalo lu mau pake button remove ato ngga, gue cm tambahin buat hiasan aja --}}
                <button class="btn btn-danger">Remove</button>
            </div>
        </div>
        @endforeach
    </main>
</body>
</html>

@endsection