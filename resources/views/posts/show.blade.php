@extends('layout')

@section('content')
    <div class="container row">
        <a href="/posts/{{ $post->id }}/edit"><div class="button btn btn-primary"> edit </div></a> 
        <form action="/posts/{{ $post->id }}" method="post">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <input type=submit class="button btn btn-danger" value="delete"> 
        </form>
    </div>
    <br>
    <h2> {{ $post->title }} </h2>
    <h6> {{ $post->author }} </h6>
    <p> {{ $post->date_published }} </p>
    <p> {{ $post->body }} </p>
@endsection