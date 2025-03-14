<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
@foreach($posts as $post)
    <div id="post_container">
        <p>from {{App\Models\User::where('id', $post->user_id)->value('name')}}</p>
        <h1>{{$post->title}}</h1>
        <p>{{$post->text}}</p>
    </div>
@endforeach
</body>
</html>
