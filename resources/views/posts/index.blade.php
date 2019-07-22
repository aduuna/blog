@extends('layouts.app')

@section('content')
    <div class="container row">
        <div class="col-md-10"><h3>Recent Posts</h3></div>
        <a href="/posts/create"><div class="col btn btn-success"> Add new Post </div></a> 
    </div>
    <br>

    <div class="card-deck">
        <div class="row">

            @foreach ($posts as $post)
            <div class="card col-md-4">
                
                <div class="card-body">
                    <h4 class="card-title">{{ $post->title }}</h4>
                    <p class="card-text"> Published: {{ $post->date_published }} by {{ $post->user->name }}  </p>
                </div>
                <a class="btn btn-primary" href="/posts/{{ $post->id }}">Read More</a>
                
            </div>
            
            @endforeach
        </div>
    </div>
@endsection
{{-- 
<div class="card-deck">
    <div class="card">
        <img class="card-img-top" src="holder.js/100x180/" alt="">
        <div class="card-body">
            <h4 class="card-title">Title</h4>
            <p class="card-text">Text</p>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="holder.js/100x180/" alt="">
        <div class="card-body">
            <h4 class="card-title">Title</h4>
            <p class="card-text">Text</p>
        </div>
    </div>
</div> --}}