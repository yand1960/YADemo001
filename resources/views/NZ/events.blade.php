<h1>Events</h1>
@foreach($events as $e)
    <p>{{$e->created_at}}
        <span>{{$e->name}}</span>
    </p>
@endforeach
