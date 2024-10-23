<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $note->title }}</title>
</head>
<body>
    <h1>{{ $note->title }}</h1>
    <h2>{{ $note->content }}</h2>
    <a href="/update/{{ $note->id }}">update</a>
    <a href="/delete/{{ $note->id }}">delete</a>
</body>
</html>