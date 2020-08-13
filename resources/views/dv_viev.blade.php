<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/DV_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/DV_style.css') }}">
    <title>Ивенты</title>

</head>
<body>

<h1>Список концертов</h1>

<div class="sort" id="{{$sortData}}"><a href="/derevoxp/sortByDate">Sort by date</a></div>
<div class="sort" id="{{$sortName}}"><a href="/derevoxp/sortByName">Sort by name</a></div>

@foreach($data as $p)
    <div class="event" id="e{{$p['id']}}">
        <input type="datetime-local" value="{{str_replace(' ', 'T', $p['date'])}}">
        <b>{{$p['group_id']}}</b>
        <button onclick="bindEvent({{$p['id']}})">Забронировать</button>
        <p>------------------------------</p>
    </div>
@endforeach

<script src="{{ asset('script/DV_script.js') }}"></script>

</body>
</html>
