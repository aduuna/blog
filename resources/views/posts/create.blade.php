@extends('layout')

@section('content')
<div class="container">
    <div class="form">
        <form action="/posts/store/" method="post">
            {{ csrf_field() }}

            <div class="form-group">
            <label for="title">Title</label>
                <input class="form-control" type="text" name="title" id="title">
            </div>

            <div class="form-group">
                <label for="author">Author</label>
                <input class="form-control" type="text" name="author" id="author">
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" name="body" id="" cols="30" rows="10"></textarea>
            </div>
            
            <div class="form-group">
                <input class="btn btn-success" type="submit" value="Save Post">
            </div>
        </form>
    </div>
</div>
@endsection