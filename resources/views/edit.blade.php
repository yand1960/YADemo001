<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title></title>
</head>
<body>
<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <form action="{{route("events.update", ["event"=>$event])}}" method="post">
                @csrf
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="">Имя: </label>
                        <input type="text" name="student_name" class="form-control" value="{{$event->student_name}}">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="">Предмет: </label>
                        <input type="text" name="subject" class="form-control" value="{{$event->subject}}">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="">Назначено на: </label>
                        <input type="date" name="scheduled_for" class="form-control" value="{{$event->scheduled_for}}">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-block btn-success">Править</button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
