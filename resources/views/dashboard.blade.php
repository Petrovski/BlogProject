@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

                <div class="container text-center">
                    <a href="/posts/create" class="btn btn-success">Create New Post</a>
                    <h1 class="posts-heading">Your Blog Posts</h1>
                    @if(count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach ($posts as $post)
                                    <tr>
                                    <th>{{$post->title}}</th>
                                    <th><a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a></th>
                                    <th></th>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You have no posts yet!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
