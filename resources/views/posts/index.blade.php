@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-9"><h3>Recent Posts</h3></div>
        <div class="col-md-3"><a class="btn btn-outline-primary float-right" href="/posts/create"><i class="fa fa-plus" aria-hidden="true"></i> New Post</a></div> 
    </div>
    <br>

        <div class="row">

            @foreach ($posts as $post)
            <div class="card col-12 shadow bg-white rounded m-md-2">
                
                <div class="card-body">
                    <h4 class="card-title">{{ $post->title }}</h4>
                    <p class="card-text"> Published: {{ $post->date_published }} by {{ $post->user->name }}  </p>
                    <div class="card-text">
                        <a class="btn btn-primary" href="/posts/{{ $post->id }}">Read More</a> 
                    </div>
                </div>                
                
            </div>
            @endforeach
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