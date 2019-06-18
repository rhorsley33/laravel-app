@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default mt-2">Go Back</a>
    <h1>{{$post->title}}</h1>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-info" style="width: 10%;">Edit</a>

    {{ Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-md-right']) }}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
    {{ Form::close()}}
@endsection