@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{ $title }}</h1>
        <p>This is the my first laravel application from the "Laravel from scratch" youtube series</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/signup" role="button">SignUp</a></p>
    </div>
@endsection