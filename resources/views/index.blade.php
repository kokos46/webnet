<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
@guest
    Not logged in
@endguest
@auth
    <h1>{{Auth::user()->name}}</h1>
@endauth
<a href="{{route('login')}}">Sign in</a>
<a href="{{route('register')}}">Register</a>
<a href="{{route('logout')}}">Log out</a>
</body>
</html>
