@extends('blog.master')

@section('content')

    <x-card class="bg-white">Contenido dinamico</x-card>
    <x-card class="bg-yellow-600">Contenido dinamico</x-card>

    <x-blog.show :post="$post"></x-blog.show>



{{-- <div class="card card-white">
    <h1>{{ $post->title }}</h1>
    <span>{{ $post->category->title }}</span>

    <hr>

    {{ $post->content }}
</div> --}}

@endsection