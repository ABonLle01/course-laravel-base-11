<div>
    <br>

    <h1>{{ $slot }}</h1>
    <h1>{{ $header }}</h1>

    @foreach ($posts as $post)
        <div class="card card-white mt-2">
            <h3>{{ $post->title }}</h3>

            <a href="{{ route('blog.show', $post) }}">Ir</a>

            <p>{{ $post->description }}</p>
        </div>
    @endforeach

    <br>

    <h1>{{ $extra }}</h1>
    <h1>{{ $footer }}</h1>


    {{ $posts->links() }}
</div>