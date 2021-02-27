<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Пример веб-страницы</title>
</head>
<body>
<h1>Авторы</h1>

<a href="/admin/login">В админку</a>

@foreach($users as $key => $user)
    <ul><b> <a href='author.php?id={{$user->id}}}'>{{$user->firstname}} {{$user->lastname}}</a></b>
    </ul>
@endforeach



</body>
</html>
