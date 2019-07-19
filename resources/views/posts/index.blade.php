@extends('layout')

@section('content')
    <div class="container row">
        <a href="/posts/create"><div class="button btn btn-dark"> Add new Post </div></a> 
    </div>
    <br>

    

    @foreach ($posts as $post)
    <div class="card-group">
        <div class="card">
            <div class="card-body">
                <a href="/posts/{{ $post->id }}"><h4 class="card-title">{{ $post->title }}</h4></a>
                <p class="card-text"> Published: {{ $post->date_published }} by {{ $post->author }}  </p>
            </div>
        </div>
        <br>
    </div>
    <br>
    @endforeach
@endsection