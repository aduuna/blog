@extends('layout')

@section('content')
    <div class="container row">
        <a href="/posts/create"><div class="buttonn btn btn-dark"> Add new Post </div></a> 
    </div>
    @foreach ($posts as $post)
        <p> {{ $post->title }} </p>
        <p> {{ $post->author }} </p>
        <p> {{ $post->date_published }} </p>
        <p> {{ $post->body }} </p>
    @endforeach
@endsection