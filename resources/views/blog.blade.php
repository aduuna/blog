@extends('layout')

@section('content')
    <p> Blog </p>
    @foreach ($posts as $post)
        <p> {{ $post }} </p>
    @endforeach
    
@endsection