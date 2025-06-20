@extends('dashboard.master')

@section('content')

    @include('dashboard.fragment._errors-form')

    <form action={{route('post.update', $post->id)}} method="post" enctype="multipart/form-data">

        @method('PUT')

        @include('dashboard.post._form', [ 'task' => 'edit' ])
        
    </form>
@endsection