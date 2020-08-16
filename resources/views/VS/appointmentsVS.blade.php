<?php

?>
    <!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<h1>Hello, Vladimir</h1>
<div class="container-fluid"></div>
<table class="table table-dark table-hover">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Exam name</th>
        <th scope="col" class="text-center">Exam description</th>
        <th scope="col">Make an appointment</th>
    </tr>
    </thead>
    <tbody>
    @foreach($events as $d)
            <tr>
                <th>{{$d['id']}}</th>
                <td>{{$d['eventName'] ?? ''}}</td>
                <td>{{$d['description']}}</td>
                <td><a href="#" class="badge badge-primary">Make an appointment</a></td>
            </tr>
    @endforeach
    </tbody>
{{--    @foreach($summary ?? '' as $s)--}}
{{--        {{$s['appointmentDate']}}--}}
{{--        {{$s['eventName']}}--}}
{{--    @endforeach--}}
</table>
{{--@foreach($events as $d)--}}
{{--    <p>{{$d['eventName']}}</p>--}}
{{--    <p>{{$d['description']}}</p>--}}
{{--@endforeach--}}
{{--@foreach($appointments as $d)--}}
{{--    <p>{{$d['User']}}</p>--}}
{{--    <p>{{$d['appointmentDate']}}</p>--}}
{{--@endforeach--}}
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>

