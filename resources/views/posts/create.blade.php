CREATE
<html>
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/posts" method="POST">
    @csrf
    <input type="text" placeholder="Title.." name="title">
    <input type="text" placeholder="Description.." name="description">
    <button type="submit"> Add</button>
</form>
</body>
</html>

