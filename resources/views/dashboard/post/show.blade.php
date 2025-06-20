@extends('dashboard.master')

@section('content')

    @include('dashboard.fragment._errors-form')

    <h1>{{$post->title}}</h1>
    <span>{{ $post->posted }}</span>
    <span>{{ $post->category->title }}</span>
    <div>{{ $post->description }}</div>
    <div>{{ $post->content }}</div>
    <img src="/uploads/posts/{{ $post->image }}" width="250px" alt="{{ $post->image }}">
@endsection