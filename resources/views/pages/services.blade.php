@extends('layouts.app')
        
@section('content')

        <h1 class="posts-heading">{{$title}}</h1>
        <hr>
        @if(count($services) > 0)
                <ul class="list-group">
                @foreach($services as $services)
                        <li class="list-group-item">{{$services}}</li>
                @endforeach
                </ul>
        @endif

@endsection
