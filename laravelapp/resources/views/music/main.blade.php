<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>予約するとこ</title>
</head>
<body>
    @if(Auth::check())
    <p>login </p>
    @else
    <p>pless login</p> <a href="/music/login">login</a>
    @endif
    <form action="{{url('/main')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="date" name ="date" value="" ><br>
        <p>使用するスタジオ<br>
        <input type="radio" name ="place" value="1" >1<br>
        <input type="radio" name ="place"  value="2">2<br>
        <input type="radio" name ="place"  value="3">3<br>
        </p>
        <p> 予約時間<br>
        <input type="time" name ="time" min="09:00" max="22:30" step="1800" value=""><br>
        </p>
        <tr><th></th><td><i type="submit" ></td></tr>
    </form>
</body>
</html>