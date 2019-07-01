@extends('layouts.app')
@section('content')

    <div class="container">
    <div class="jumbotron">
    <div class="panel panel-primary">
        <div >
            <h1>Производители </h1>
        </div>
        <div class="text-right">
            <a class="pull-right btn btn-primary btn-block" href="/proizv/create">Добавить производителя</a>
        </div>
        <div class="panel-body">

            <ul class="list-group">
                @foreach($proizv as $proizvoditeli)
                    <li class="list-group-item"> <a href="/proizv/{{$proizvoditeli -> id}}"> {{$proizvoditeli -> name}} </a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
        <footer class="footer" style="flex: 0 0 auto;">
            <div class="container">
                <p class="text-muted">Компания Re-start, 2019</p>
            </div>
        </footer>
    </div>
@endsection
