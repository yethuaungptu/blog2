<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer Update</title>
</head>
<body>
    <h1>Customer Update</h1>
    <form action="/customers/update" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$customer->id}}">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{$customer->name}}"><p></p>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ $customer->email }}"><p></p>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" value="{{ $customer->password }}"><p></p>
        <input type="submit" value="Update">
    </form>
</body>
</html>
