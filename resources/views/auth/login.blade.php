@extends('layouts.guest')
@section("head")
    <link rel="stylesheet" href="{{ asset('css/siginin.css') }}">
@endsection
@section("content")
    <h3>Login Page</h3>
    <hr>
    <form method="post" autocomplete="off">
        {{ csrf_field() }}
        @if ($errors->any())
            <div class="alert alert-danger" style="margin-bottom: 0; padding-bottom: 0">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <hr>
        @endif

        <label for="email" class="visually-hidden">Email address</label>

        <input id="email" name="email" type="text"
               class="form-control" placeholder="Email" value="" autofocus>
        <label for="password" class="visually-hidden">Password</label>
        <input id="password" name="password" type="password"
               class="form-control" placeholder="Password">


        <button type="submit" class="w-100 btn btn-lg btn-primary">
            Login
        </button>
    </form>
@endsection
@section("javascripts")
@endsection
