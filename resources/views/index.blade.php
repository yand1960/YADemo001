@extends('layouts.app')
@section('title')
    Экзамены
@endsection
@section('content')
    <div class="jumbotron jumbotron-fluid bg-danger p-1">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="display-1 text-white">Записи на экзамен</h1>
                    <p class="lead text-white">Веб-приложение для создания записи на экзамен</p>
                </div>
                <div class="col-md-6">
                    <img src="img/event.jpg" alt="event">
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-between align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>Экзамены</h2>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="/events/create" class="btn btn-sm btn-primary">Добавить мероприятие</a>
        </div>
    </div>
    <div class="table-responsive shadow rounded">
        <table class="table table-sm table-striped table-hover">
            <tr>
                <th>#</th>
                <th>Имя</th>
                <th>Предмет</th>
                <th>Назначено на</th>
                <th></th>
            </tr>
            @foreach($events as $event)
                <tr>
                    <td>{{++$loop->index}}</td>
                    <td>{{$event->student_name}}</td>
                    <td>{{$event->subject}}</td>
                    <td>{{$event->scheduled_for}}</td>
                    <td class="text-center">
                        <a href="{{route('events.edit',["event"=>$event])}}"
                           class="btn btn-sm btn-primary">Править</a>
                        <form class="d-inline" action="{{route('events.delete',["event"=>$event])}}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <nav aria-label="Pagination">
            <ul class="pagination pagination-sm justify-content-center">
                <form class="form-inline mr-1" method="GET" action="" role="form">
                    <div class="form-group">
                        <label for="perPage">Элементы на странице</label>
                        <select name="perPage" id="perPage" class="form-control form-control-sm ml-1" onchange="this.form.submit()">
                            <option value="5" @if($events->perPage() == 5) selected @endif>5</option>
                            <option value="10" @if($events->perPage() == 10) selected @endif>10</option>
                            <option value="15" @if($events->perPage() == 15) selected @endif>15</option>
                        </select>
                    </div>
                </form>
                {{$events->appends(['perPage' => $events->perPage()])->links()}}
            </ul>
        </nav>
{{--        <div class="ml-l">--}}
{{--            {{$events->links()}}--}}
{{--        </div>--}}
    </div>
@endsection
