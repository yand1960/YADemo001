<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/DV_style.css') }}">
    <title>Ивенты</title>

</head>
<body>

@if ($token == 'admin')
    <a class="nav" href="/derevoxp/admin">admin</a>
@endif
@if (!$token)
    <a class="nav" href="/derevoxp/register">Регистрация / Вход</a>
@else
    <a class="nav" href="/derevoxp/logout">Выйти</a>
@endif

<h1>Список концертов</h1>

<div class="sort" id="{{$sortData ?? ''}}"><a href="/derevoxp/sortByDate">Sort by date</a></div>
<div class="sort" id="{{$sortName ?? ''}}"><a href="/derevoxp/sortByName">Sort by name</a></div>
<div class="sort"><a href="/derevoxp">Clear filter</a></div>

<div class="container">
    @foreach($data as $p)
        <div class="event" id="e{{$p['id']}}">
            <input type="datetime-local" value="{{str_replace(' ', 'T', $p['date'])}}">
            <div class="groupTitle"><p>Играет группа: </p><h2>{{$p['group_id']}}</h2></div>
            @if ($token)
                <button onclick="bindEvent({{$p['id']}})">Забронировать</button>
            @endif
        </div>
    @endforeach
</div>

<script src="{{ asset('script/DV_script.js') }}"></script>

</body>
</html>
