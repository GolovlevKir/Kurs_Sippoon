@extends('layouts.app')
@section('content')

    <div class="row col-md-9 col-lg-9 col-sm-9 pull-left">
    <div class="container">
        <!-- Jumbotron -->
        <div class="jumbotron">
            <h1>Производитель: {{$proizvoditeli -> name}}</h1>
        </div>

        <!-- Example row of columns -->
        <div class="row" style="background: white; margin: 10px">

            @foreach($proizvoditeli -> ystroistva as $ystroistva)
            <div class="col-lg-4 col-md-4 col-sm-4">
                <h2>Тип: {{$ystroistva->name}}</h2>
                <p><a class="btn btn-primary" href="/ystroistva/{{$ystroistva->id}}" role="button">Выбрать &raquo;</a></p>
            </div>
            @endforeach
        </div>

        <footer class="footer" style="flex: 0 0 auto;">
            <div class="container">
                <p class="text-muted">Компания Re-start, 2019</p>
            </div>
        </footer>
    </div> <!-- /container -->
    </div>

    <div class="col-sm-3 col-md-3 col-lg-3 pull-right">
        <!--<div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
        </div>-->
        <div class="sidebar-module">
            <h4>Действия</h4>
            <ol class="list-unstyled">
                <li><a class="pull-right btn btn-primary btn-block" style="" href="/proizv/{{$proizvoditeli -> id}}/edit">Изменить</a></li>
                <li><a class="pull-right btn btn-primary btn-block" href="#"
                    onclick="var result = confirm('Вы точно хотите удалить производителя?');
                            if (result){
                                event.preventDefault();
                                document.getElementById('delete-form').submit();
                            }
                            "
                       }
                    >Удалить</a>
                <form id="delete-form" action="{{route('proizv.destroy',[$proizvoditeli->id])}}"
                      method="post" style="display: none">
                    <input type="hidden" name="_method" value="delete">
                    {{csrf_field()}}
                </form>
                </li>
                <li><a class="pull-right btn btn-primary btn-block" href="/proizv/create">Добавить производителя</a></li>
                <li><a class="pull-right btn btn-primary btn-block" href="#">Добавить тип устройства</a></li>
                <li><a class="pull-right btn btn-primary btn-block" href="/proizv">Производители</a></li>
            </ol>
        </div>
        <!--<div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
                <li><a href="#">March 2014</a></li>
                <li><a href="#">February 2014</a></li>
                <li><a href="#">January 2014</a></li>
                <li><a href="#">December 2013</a></li>
                <li><a href="#">November 2013</a></li>
                <li><a href="#">October 2013</a></li>
                <li><a href="#">September 2013</a></li>
                <li><a href="#">August 2013</a></li>
                <li><a href="#">July 2013</a></li>
                <li><a href="#">June 2013</a></li>
                <li><a href="#">May 2013</a></li>
                <li><a href="#">April 2013</a></li>
            </ol>
        </div>-->

    </div>
@endsection