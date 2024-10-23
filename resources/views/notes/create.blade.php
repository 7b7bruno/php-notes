<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create note</title>
</head>
<body>
    <h1>Create note</h1>
    <form action="{{ route('notes.create') }}" method="post">
        @csrf
        <input type="text" name="title" id="title">
        <textarea name="content" id="content"></textarea>
        <button type="submit">Create</button>
    </form>
</body>
</html>