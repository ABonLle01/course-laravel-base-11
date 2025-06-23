@extends('dashboard.master')

@section('content')

    <a class="btn btn-primary my-3" href="{{ route('post.create') }}">Create</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Posted</th>
                <th>Category</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                
                <tr>
                    <td>
                        {{ $post->id }}
                    </td>
                    <td>
                        {{ $post->title }}
                    </td>
                    <td>
                        {{ $post->posted }}
                    </td>
                    <td>
                        {{ $post->category->title }}
                    </td>
                    <td>
                        <a class="btn btn-success mt-2" href="{{ route('post.show', $post) }}">Show</a>
                        <a class="btn btn-warning mt-2" href="{{ route('post.edit', $post) }}">Edit</a>
                        <form action="{{ route('post.destroy', $post) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger mt-2" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-2"></div>
    {{ $posts->links() }}

@endsection