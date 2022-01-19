@extends('navigation.master')


@section('content')

<h1 style="text-align: center">Login</h1>
<div class="d-flex justify-content-center">
    <form action="/loginUser" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Email" 
        value="{{Cookie::get('email') != null? Cookie::get('email') : ""}}">
        <br>
        <input type="password" name="password" placeholder="Password"
        value="{{Cookie::get('password') != null? Cookie::get('password') : ""}}">
        <br>
        <input type="checkbox" name="remember" id=""> Remember Me
        <br>
        @if ($errors ->any())
            <span style="color:red">
                {{$errors->first( )}}
            </span>
         @endif
        <br>
        <input class="btn btn-dark text-light" type="submit" value="Login">
    </form>

</div>


@endsection