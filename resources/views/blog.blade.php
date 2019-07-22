@extends('layouts.app')

@section('content')
    <p> Blog </p>
    @foreach ($posts as $post)
        <p> {{ $post }} </p>
    @endforeach
    
@endsection