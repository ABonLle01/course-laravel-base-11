@extends('dashboard.master')

@section('content')

    <a href="{{ route('category.create') }}">Create</a>

    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Title</td>
                <td>Options</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                
                <tr>
                    <td>
                        {{ $category->id }}
                    </td>
                    <td>
                        {{ $category->title }}
                    </td>
                    <td>
                        <a href="{{ route('category.show', $category) }}">Show</a>
                        <a href="{{ route('category.edit', $category) }}">Edit</a>
                        <form action="{{ route('category.destroy', $category) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $categories->links() }}

@endsection