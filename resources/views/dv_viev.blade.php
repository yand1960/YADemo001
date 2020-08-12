<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ивенты</title>
</head>
<body>

<script>

    function bindEvent() {
        console.log('bind - ok!');
    }

</script>

<h1>Список концертов</h1>

@foreach($data as $p)
    {{$p['date']}}
    {{$p['group_id']}}
    <button onclick="bindEvent()">Забронировать</button>
    <br/>
    <br/>
@endforeach

</body>
</html>
