<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kakuninn</title>
</head>
<body>
    <table>
        @csrf
        @foreach ($items as $item)
        <tr><th>date</th><th>{{$item->date}}</th></tr>
        <tr><th>place</th><th>{{$item->place}}</th></tr>
        <tr><th>time</th><th>{{$item->time}}</th></tr>
        @endforeach
    </table>
</body>
</html>