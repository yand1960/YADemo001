<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ивенты</title>

    <script>

        function sortLight() {
            document.getElementById("{{$sort}}").style.backgroundColor = 'gray';
        }

        function bindEvent(e) {
            console.log('bind - ok! id = ', e);
        }

    </script>

    <style>

        .sort{
            display: inline-block;
            border: 1px solid black;
            width: 150px;
            height: 30px;
            text-align: center;
            color: black;
        }

        a{
            text-decoration: none;
        }

        .event{
            display: block;
            color: darkgreen;
        }

    </style>

</head>
<body>

<h1>Список концертов</h1>

<div class="sort" id="dataSort"><a href="/derevoxp/sortByDate">Sort by date</a></div>
<div class="sort" id="nameSort"><a href="/derevoxp/sortByName">Sort by name</a></div>

@foreach($data as $p)
    <div class="event" id="e{{$p['id']}}">
        <input type="datetime-local" value="{{str_replace(' ', 'T', $p['date'])}}">
        <b>{{$p['group_id']}}</b>
        <button onclick="bindEvent({{$p['id']}})">Забронировать</button>
        <p>------------------------------</p>
    </div>
@endforeach

<script>
    sortLight();
</script>

</body>
</html>
