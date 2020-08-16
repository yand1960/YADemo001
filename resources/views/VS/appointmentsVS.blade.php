 <!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body {
            background-color: #454d55;
        }
    </style>
    <script>
        function add(id) {
            console.log('clicked')
            let url = '/vs/examList/makeAppointment/' + id
            let xhr = new XMLHttpRequest();
            xhr.open("GET", url)
            xhr.send();
        }
    </script>
    <title>Document</title>
</head>
<body>
<table class="table table-dark table-hover">
    <thead>
    <tr>
{{--        <th scope="col">#</th>--}}
        <th scope="col">Exam time</th>
        <th scope="col">Make an appointment</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $d)
        <tr>
            <td>{{$d['appointmentDate'] ?? ''}}</td>
            @if($d['User'] == '')
                <td>
                    <form method="get" action="{{ action('VSController@makeAppointment') }}">
                        <div class="form-group">
                            <input type="text" size="1" name="nameInput" required class="form-control-inline" style="width: 50%" id="exampleFormControlInput1" placeholder="Enter your name to make an appointment">
                            <input type="hidden" value="{{$d['id']}}" name="appointmentId"/>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </td>
            @else
                <td>{{$d['User']}}</td>
            @endif

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

