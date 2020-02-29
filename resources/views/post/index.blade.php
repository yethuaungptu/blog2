<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post List</title>
</head>
<body>
    <h1>Post list</h1>
    <table>
        <thead>
            <th>Title</th>
            <th>Content</th>
            <th>Author</th>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></td>
                <td>{{ $post->content }}</td>
                <td>{{ $post->author }}</td>
            </tr>
        @endforeach
        </tbody>

    </table>
</body>
</html>
