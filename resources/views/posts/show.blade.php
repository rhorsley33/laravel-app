@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default mt-2">Go Back</a>
    <h1>{{$post->title}}</h1>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
@endsection