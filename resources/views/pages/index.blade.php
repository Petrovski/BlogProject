@extends('layouts.app')
        
@section('content')

    <div class="jumbotron text-center">
        <h1 class="jumbo-heading">Welcome to my Blog</h1>
        <p class="jumbo-text"><strong style="text-decoration:underline">Login</strong> or <strong style="text-decoration:underline">Create an Account</strong> to start creating your own posts with images!</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
    </div>
@endsection