@extends('layouts.app')

{{-- @section('head')
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>    
@endsection --}}

@section('content')
<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <br>
        <p> Please Correct the following errors: </p>
        <div style="margin-left: 10%">
            <ul>
            @foreach ($errors->all() as $error)
                <li> {{ $error }} </li>
            @endforeach
            </ul>
        </div> 
        <br>
    </div>
    <br>
    @endif
    <div class="form">
        <form action="/posts" method="POST">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Title</label>
                <input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}">
            </div>

            <div id="form group">
                <label for="body">Body</label>
                <textarea class="form-control" name="body" id="body" cols="30" rows="10">{{ old('body') }}</textarea>
            </div>
            
            <br>
            
            <div class="form-group">
                <input class="btn btn-success" type="submit" value="Save Post">
            </div>
        </form>
    </div>

    {{-- <div id="editor"></div>
    
    <!-- Initialize CK editor -->
    <script>
        CKEDITOR.replace( 'editor' );
    </script> --}}
</div
@endsection