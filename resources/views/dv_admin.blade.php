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

<a class="nav" href="/derevoxp">home</a>

@if ($token == 'admin')

    <h1>Список концертов (admin)</h1>

    <form class="container" method="POST" action="/derevoxp/admin/set">
        @csrf
        <p>Добавьте событие</p>
        <input name="newDataSet" id="newDataSet" type="datetime-local"/><br/>
        <input name="newGroupIdSet" id="newGroupIdSet" placeholder="Введите название группы"/><br/>
        <input type="submit" value="Добавить"/><br/>
    </form>

    {{$indicator ?? ''}}

    <br/>
    <br/>

    <div class="container">
        @foreach($data as $p)
            <div class="event">
                <input type="datetime-local" value="{{str_replace(' ', 'T', $p['date'])}}">
                <b>{{$p['group_id']}}</b>
                <button onclick="deleteEvent({{$p['id']}})">Delete</button>
            </div>
        @endforeach
    </div>

@else

    <h1>Добавление событий доступно только администратору!</h1>

@endif

<script src="{{ asset('script/DV_script.js') }}"></script>

</body>
</html>
