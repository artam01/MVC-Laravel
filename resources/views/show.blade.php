<div class="post">
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->body }}</p>
    <p>Published on: {{ $post->created_at->format('F d, Y') }}</p>
</div>
