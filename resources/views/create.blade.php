@extends('layouts.app')
@section('title')
    Создать мероприятие
@endsection
@section('content')
    <div class="d-flex justify-content-between align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>Создать новое мероприятие</h2>
    </div>
    <form action="{{route('events.store')}}" method="post">
        @csrf
        <div class="row form-group">
            <div class="col-md-12">
                <label for="">Имя: </label>
                <input type="text" name="student_name" class="form-control" required>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
                <label for="">Предмет: </label>
                <input type="text" name="subject" class="form-control" required>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
                <label for="">Назначено на: </label>
                <input type="date" name="scheduled_for" class="form-control" required>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
                <button type="submit" class="btn btn-success w-50 float-right">Создать</button>

            </div>
        </div>
    </form>

@endsection
