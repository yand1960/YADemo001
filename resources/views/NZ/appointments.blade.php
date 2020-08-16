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

<h1>{{$eventName}}</h1>
<h3>Appointments</h3>
<a href="/nz/events">Back to events</a>
<div class="container-fluid"></div>
<table class="table table-striped table-hover">
    <thead>
    <tr>
        <th scope="col">Time</th>
        <th scope="col" class="text-center">Name</th>
    </tr>
    </thead>
    <tbody>
    @foreach($appointments as $a)
            <tr>
                <td>{{$a['date']}}</td>
                <td>
                    @if($a['name'])
                        {{$a['name']}}
                    @else
                        <a href="/nz/appointments/edit/{{$a['id']}}" class="btn btn-primary">Make an appointment</a>
                    @endif
                </td>
            </tr>
    @endforeach
    </tbody>
</table>

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
