<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>body {background-color: #454d55;}</style>
    <script>
        function add(id) {
            let url = '/movieList/reserveVisit/' + id
            let xhr = new XMLHttpRequest();
            xhr.open("GET", url)
            xhr.send();
        }
    </script>
    <title>Appointments</title>
</head>
<body style="width: 75%; margin: auto;">
<table class="table table-dark table-hover">
    <thead>
    <tr>
        <th scope="col">Release details</th>
        <th scope="col" >
            <div style="display: inline-block">Make reservation</div>
            <h4 style="display: inline-block; position: absolute; right: 15%; top: 1%;"><a href="/ma/movies" class="badge badge-light">Back to list</a></h4>
        </th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $d)
        <tr>
            <td>{{$d['appointmentDate'] ?? ''}}</td>
            @if($d['user'] == '')
                <td>
                    <form method="get" action="{{ action ([\App\Http\Controllers\maController::class, 'reserveVisit']) }}">
                        <div class="form-group" style="display: flex; align-content: center; vertical-align: center;">
                            <input type="text" size="1" name="nameInput" required class="form-control-inline" style="width: 50%; margin-right: 15px; border-radius: 5px;" id="exampleFormControlInput1" placeholder="Enter your name">
                            <input type="hidden" value="{{$d['id']}}" name="appointmentId"/>
                            <button type="submit" class="btn btn-primary btn-sm">Reserve</button>
                        </div>
                    </form>
                </td>
            @else
                <td>{{$d['user']}}</td>
            @endif
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>

