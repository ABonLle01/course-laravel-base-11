@extends('dashboard.master')

@section('content')

    <a href="{{ route('post.create') }}">Create</a>

    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Title</td>
                <td>Posted</td>
                <td>Category</td>
                <td>Options</td>
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
                        <a href="{{ route('post.show', $post) }}">Show</a>
                        <a href="{{ route('post.edit', $post) }}">Edit</a>
                        <form action="{{ route('post.destroy', $post) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}

@endsection