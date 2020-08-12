<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ивенты</title>

    <script>
        function bindEvent(e) {
            console.log('bind - ok! id = ', e);
        }
    </script>

    <style>

        .event{
            display: block;
            color: darkgreen;
        }

    </style>

</head>
<body>

<h1>Список концертов</h1>

@foreach($data as $p)
    <div class="event" id="e{{$p['id']}}">
        <p>{{$p['date']}}
            <b>{{$p['group_id']}}</b>
        </p>
        <button onclick="bindEvent({{$p['id']}})">Забронировать</button>
        <p>------------------------------</p>
    </div>
@endforeach

</body>
</html>
