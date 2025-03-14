<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <h1>{{ $user->name }}</h1>
    <p>{{ $user->email }}</p>
    <form action="{{ route('updatePage', ['id'=>$user->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="htmlpage">
        <input type="submit" value="Update user page">
    </form>
</body>
</html>
