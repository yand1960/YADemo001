<h1>Events</h1>
<a href="/nz/events/desc">Сортировать по убыванию</a>
<a href="/nz/events/asc">Сортировать по возрастанию</a>

@foreach($events as $e)
    <p>{{$e->created_at}}
        <span>{{$e->name}}</span>
    </p>
@endforeach
