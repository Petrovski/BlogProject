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

                    You are logged in! Welcome to your dashboard, <strong>{{ Auth::user()->name }}</strong>
                </div>

                <div class="container text-center">
                    <a href="/posts/create" class="btn btn-success">Create New Post</a>
                    <h1 class="posts-heading">Your Blog Posts</h1>
                    @if(count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Post Title</th>
                                <th>Edit Post</th>
                                <th>Delete Post</th>
                            </tr>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a></td>
                                    <td>
                                        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </td>
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
