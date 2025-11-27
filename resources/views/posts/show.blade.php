<html>
<head>
    <title>Post Details</title>
</head>
<body>
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->text }}</p>
    <p>Category: {{ $post->category->name }}</p>
    <p>Tags:
        @foreach($post->tags as $tag)
            <span>{{ $tag->name }}</span>
        @endforeach
    </p>
    
</html>