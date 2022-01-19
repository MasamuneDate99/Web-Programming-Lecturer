@extends('navigation.master')

@section('title', 'Register')

@section('content')
<div class="container p-3 bg-white">
    <h2 class="text-info text-dark">Register</h2>
    <form action="/user" enctype="multipart/form-data" method="POST">
        @csrf
        <input id="txtFullName" type="text" name="fullName" placeholder="Full Name" class="form-control"><br>

        <input id="txtEmail" type="text" name="email" placeholder="Email" class="form-control"><br>

        <input id="txtPassword" type="password" name="password" placeholder="Password" class="form-control"><br>

        <input id="txtConfPassword" type="password" name="confPassword" placeholder="Confirm Password" class="form-control"><br>

        <input id="boxAgreement" type="checkbox" name="agreement">
        <label for="boxAgreement">I agree with terms & conditions</label><br>

        <input type="submit" value="Register Now" class="bg-dark text-light">
    </form>
    @if($errors->hasBag('insert'))
        <label for="error" style="color: red">
            {{$errors->insert->first()}}
        </label>
     @endif
@endsection