@extends('navigation.master')

@section('title', 'Home')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/like.css">
    <script src="{{ asset('/js/animate.js')}}"></script>
    <title>Home</title>
</head>
<body>
    {{-- <main class = "d-flex flex-direction-row flex-wrap justify-content-center">
        @foreach ($images as $image)
        <div class="card m-2 bg-white text-black border border-warning col-md-3" style="width: 18rem;">
            <img width="200" class="card-img-top{{Storage::url($image->image)}}" alt="{{$image->name}}">
            <div class="card-body">
                <h5 class="card-title">{{$image->name}}</h5>
                <button class="btn btn-danger">like</button>
            </div>
        </div>
        @endforeach
    </main> --}}
    @auth
        <h1 style="text-align: center">Sup {{Auth::user()->name}} !</h1>
    @endauth
    <div class="d-flex justify-content-center">
            <div>
                {{-- Gambar 1 --}}
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('imgs/skadi.png') }}" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">Skadi</h5>
                      <p class="card-text">Skadi Bounty Hunter</p>
                        @auth
                            @if (Auth::user()->role == 'member') 
                        @endauth
                            <a href="#" class="like-counter">&hearts;Like</a><span class="click-text"><a id="clicks"></span>
                                <script>
                                    var clicks = 15;
                                    document.getElementById("clicks").innerHTML = clicks;
                                        $('.like-counter').click(function() {
                                        clicks += 1;
                                        document.getElementById("clicks").innerHTML = clicks;
                                        $('.like-counter').addClass("liked");
                                    });
                                </script>                             
                            @else
                            <div class="hoverlike">
                                <a href="#" class="like-counter">&hearts;Like</a><span class="click-text"><a id="clicks"></span>
                            </div>
                            @endif
                    </div>
                  </div>
    </div>
    <form action="/detailProduct">
        <div>
            {{-- Gambar 2 --}}
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('imgs/hehedino.png') }}" class="card-img-top" height="280">
                <div class="card-body">
                  <h5 class="card-title">Hehe Dino</h5>
                  <p class="card-text">Download Like a Dino in app store or playstore</p>
                  @auth
                    @if (Auth::user()->role == 'member')
                  @endauth
                  <a href="#" class="like-counterB">&hearts;Like</a><span class="click-textB"><a id="clicksB"></span>
                    <script>
                    var clicksB = 18;
                            document.getElementById("clicksB").innerHTML = clicksB;
                                $('.like-counterB').click(function() {
                                clicksB += 1;
                                document.getElementById("clicksB").innerHTML = clicksB;
                                $('.like-counterB').addClass("likedB");
                            });
                    </script>
                  @else
                        <div class="hoverlike">
                            <a href="#" class="like-counterB">&hearts;Like</a><span class="click-text"><a id="clicks"></span>
                        </div>
                  @endif
                  
                </div>
              </div>
        </div>
    </form>
</body>
</html>


@endsection