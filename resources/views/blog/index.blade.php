@extends('blog.master')

@section('content')
    <x-blog.post.index :posts='$posts'>
        
        Post List

        @slot('header')
            Header Content
        @endslot

        @slot('extra')
            Extra
        @endslot

        @slot('footer')
            Footer Content
        @endslot
    </x-blog.post.index>
@endsection