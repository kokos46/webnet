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
    <input type="text" name="name">
    <input type="password" name="password">
    <input type="submit" value="Sign in">
</form>
</body>
</html>
