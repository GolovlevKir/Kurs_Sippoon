@extends('layouts.app')
@section('content')
    <div class="row col-md-9 col-lg-9 col-sm-9 pull-left">
        <div class="container">
            <!-- Jumbotron -->
            <div class="jumbotron">
                <h1>Изменение компании </h1>
            </div>
            <!-- Example row of columns -->
            <div class="row" col-md-12 col-sm-12 col-lg-12 style="background: white; margin: 10px">
                <form method="post" action="{{route('proizv.store')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for = "proizvoditeli-name">Наименование<span class="required">*</span></label>
                        <input  placeholder="Введите нового производителя" id = "proiz-name" required
                                name="name" spellcheck="false" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Добавить">
                    </div>
                </form>


            </div> <!-- /container -->
        </div>
    </div>

    <div class="col-sm-3 col-md-3 col-lg-3 pull-right">
        <!--<div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
        </div>-->
        <div class="sidebar-module">
            <h4>Действия</h4>
            <ol class="list-unstyled">
                <li><a href="/proizv">Производители</a></li>
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

    <footer class="footer" style="flex: 0 0 auto;">
        <div class="container">
            <p class="text-muted">Компания Re-start, 2019</p>
        </div>
    </footer>
@endsection