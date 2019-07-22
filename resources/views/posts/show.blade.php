@extends('layout')

@section('content')
    <div class="container">
        <div class="row float-right">
            <a href="/posts/{{ $post->id }}/edit"><div class="button btn btn-primary"> edit </div></a> 
            <form action="/posts/{{ $post->id }}" method="post">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <input type=submit class="button btn btn-danger" value="delete"> 
            </form>
        </div>
    </div>
    <br>
    <h2> {{ $post->title }} </h2>
    <h6> {{ $post->author }} </h6>
    <p> {{ $post->date_published }} </p>
    <p> {{ $post->body }} </p>

    <div class="jumbotron">
        <div class="container">
            <h3 style="text-decoration:underline">Comments</h3>
            <br>
            @foreach ($post->comments as $comment)
            <div class="card">
                {{-- <img class="card-img-top" src="holder.js/100x180/" alt=""> --}}
                <div class="card-body">
                <h4 class="card-title">{{ $comment->username }}</h4>
                <p class="card-text">{{ $comment->body }}</p>

                <div class="bar">
                    <div class="float-left">
                        <i class="fa fa-thumbs-up" aria-hidden="true"> 0 </i>
                        <i class="fa fa-thumbs-down" aria-hidden="true"> 0 </i>
                    </div>
                    <div class="float-right">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                        <span> </span>
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </div>
                </div>

                </div>
            </div>
            <br>
            @endforeach     
            
            <form action="/posts/{{ $post->id }}/comments" method="post">
                @csrf
                <div class="form-group form-inline row">
                    <input type="text" name="comment" id="comment" class="form-control col-11" placeholder="Add a comment" aria-describedby="helpId">
                    <button type="submit" class="btn btn-info">Submit</button>
                    @if ($errors->any())
                    <small class="form-text text-danger">{{ $errors->all()[0] }}</small>
                    @endif
                </div>
            </form>
        </div>
    </div>

@endsection