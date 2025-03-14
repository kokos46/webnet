<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<form action="{{route('registerNewUser')}}" method="post">
    @csrf
    <input type="email" name="email" placeholder="Email">
    <input type="text" name="name" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" value="Register">
</form>
</body>
</html>
