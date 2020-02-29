<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post Create</title>
</head>
<body>
    <h1>Post created here!!</h1>
    <form action="/posts" method="post">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" id="title"><p></p>
        <label for="content">Content</label>
        <input type="text" name="content" id="content"><p></p>
        <lable for="author">Author</lable>
        <input type="text" name="author" id="author"><p></p>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
