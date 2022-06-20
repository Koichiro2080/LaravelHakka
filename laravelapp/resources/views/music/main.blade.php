<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if(Auth::check())
    <p>login </p>
    @else
    <p>pless login</p> <a href="/music/login">login</a>
    @endif
    <form action="/music/main" method="post">
        <input type="date" name date><br>
        <p>使用するスタジオ
        <input type="radio" name ="place" value="1">1<br>
        <input type="radio" name ="place" value="2">2<br>
        <input type="radio" name ="place" value="3">3<br>
        </p>
        
    </form>
</body>
</html>