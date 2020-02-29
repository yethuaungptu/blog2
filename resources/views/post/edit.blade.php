<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Post</title>
</head>
<body>
    <h1>Update Post</h1>
    <form action="/posts/{{$post->id}}" method="post">
        @method('PATCH')
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{$post->title}}"><p></p>
        <label for="content">Content</label>
        <input type="text" name="content" id="content" value="{{ $post->content }}"><p></p>
        <lable for="author">Author</lable>
        <input type="text" name="author" id="author" value="{{ $post->author }}"><p></p>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
