<link rel="stylesheet" href="css/maintenances.css">
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">SELECCIONE EL DEPORTE Y TIPO DE INSCRIPCION</div>

                    <div class="panel-body">
                    <form class="form-horizontal" role="form" method="GET" action="{{route('registration')}}">
                    {{ csrf_field() }}

                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                <select name="sports" id="sports" class="form-control">
                                    <option value="" selected="true" disabled="true">Deporte</option>
                                  @foreach($sports as $sport)
                                    <option value="{{$sport->sport_id}}">{{$sport->sport_name}}</option>
                                  @endforeach
                                </select>         
                            </div>
                        </div>

                        <div id="options" hidden="true">
                            <div class="form-group">
                                <div class="col-md-4 col-md-offset-4">
                                    <select name="register_type" id="register_type" class="form-control">
                                        <option value="" selected="true" disabled="true">Tipo de Inscripcion</option>
                                        <option value="1">Individual</option>
                                        <option value="2">Grupal</option>
                                    </select>         
                                </div>
                            </div>                            
                        </div>

                        <div class="form-group" enable="false">
                            <div class="col-md-offset-4 col-md-4">
                                <button type="submit" class="btn btn-primary col-md-12" id="savetemp" disabled="true">Inscripcion</button>
                            </div>
                        </div>
                    </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection