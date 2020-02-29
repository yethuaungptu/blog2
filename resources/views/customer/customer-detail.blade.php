<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer Detail</title>
</head>
<body>
    <h1>Customer detail here</h1>
    Name: {{ $customer->name }}<p></p>
    Email : {{ $customer->email }}<p></p>
    Password : {{ $customer->password }}<p></p>
    <a href="/customers/delete/{{ $customer->id }}"><button>Delete</button></a>
    <a href="/customers/update/{{ $customer->id }}"><button>Update</button></a>
</body>
</html>
