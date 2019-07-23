@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row float-right">
            @can('update', $post)
                <a href="/posts/{{ $post->id }}/edit"><div class="button btn btn-primary mr-md-2"><i class="fa fa-pencil-square" aria-hidden="true"> </i> edit </div></a>
            @endcan
            @can('delete', $post)
                <form action="/posts/{{ $post->id }}" method="post">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button class="btn btn-danger" type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i> delete</button>
                </form>
            @endcan
        </div>
    </div>
    <br>
    <h2> {{ $post->title }} </h2>
    <h6> {{ $post->author }} </h6>
    <p> {{ $post->date_published }} </p>
    <p> {{ $post->body }} </p>

    <div class="jumbotron">
        <div class="container">
            <h3>Comments <i class="fa fa-comment" aria-hidden="true"></i></h3>
            <hr>
            <br>
            @foreach ($post->comments as $comment)
            <div class="card">
                {{-- <img class="card-img-top" src="holder.js/100x180/" alt=""> --}}
                <div class="card-body">
                    <small class="text-info"><i class="fa fa-at" aria-hidden="true"></i> {{ $comment->user->name }}</small>
                    <p class="card-text">{{ $comment->body }}</p>

                <div class="bar">
                    <div class="float-left">
                        <i class="fa fa-thumbs-up" aria-hidden="true"> 0 </i>
                        <i class="fa fa-thumbs-down" aria-hidden="true"> 0 </i>
                    </div>
                    @can('update', $comment)
                    <div class="float-right">
                        <i class="fa fa-pencil text-info" aria-hidden="true"></i>
                        <span> </span>
                        <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                    </div>
                    @endcan
                </div>

                </div>
            </div>
            <br>
            @endforeach     
            
            <form action="/posts/{{ $post->id }}/comments" method="post">
                @csrf
                <div class="form-group form-inline row">
                    <input type="text" name="comment" id="comment" class="form-control col-11" placeholder="Add a comment" aria-describedby="helpId">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    @if ($errors->any())
                    <small class="form-text text-danger">{{ $errors->all()[0] }}</small>
                    @endif
                </div>
            </form>
        </div>
    </div>

@endsection