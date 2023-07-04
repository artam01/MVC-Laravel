<!DOCTYPE html>
<html>

<head>
    <title>Posts</title>
</head>

<body>
    <h1>Posts</h1>

    @foreach ($posts as $post)
        <div class="post">
            <h2><a href="{{ route('show', $post->id) }}">{{ $post->title }}</a></h2>
            <p>{{ $post->excerpt }}</p>
            <p>Published on: {{ $post->created_at->format('F d, Y') }}</p>
        </div>
    @endforeach

</body>

</html>
