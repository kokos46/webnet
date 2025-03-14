<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<form action="/login" method="post">
    @csrf
    <input type="text" name="name" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" value="Sign in">
</form>
<a href="{{ route('register') }}">Create account</a>
<a href="{{ route('logout') }}">Log out</a>
</body>
</html>
