<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Events</title>
    <style>body{background-color: #454d55;}</style>
</head>
<body>
<h1 style="text-align: center; color: white;">Movies</h1>
<div class="container" style="display: flex; justify-content: space-between; flex-wrap: wrap; ">
    @foreach($events as $d)
        <div class="card text-white bg-dark mb-3 border-light" style="width: 25%; margin: 25px;">
            <img class="card-img-top" src="{{ $d['eventImage'] }}" alt="Card image cap">
            <div class="card-body" style="display: flex; flex-wrap: wrap;">
                <h5 class="card-title"> {{$d['eventName'] ?? ''}} </h5>
                <p class="card-text"> {{$d['eventDescription']}} </p>
                <a href="/ma/movies/selectedMovie/{{$d['id']}}" class="btn btn-primary">Details</a>
            </div>
        </div>
    @endforeach
</div>
</body>
</html>

