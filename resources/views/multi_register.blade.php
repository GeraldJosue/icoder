<link rel="stylesheet" href="css/maintenances.css">
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$sport->sport_name}}</div>

                    <div class="panel-body">


                    <form class="form-horizontal" role="form" method="POST" action="{{route('import')}}" enctype="multipart/form-data">

                        {{ csrf_field() }}

                            <input type="text" name="canton_id" readonly value="{{Auth::user()->canton_id}}" style="display:none">
                            <input type="text" name="sport_id" readonly value="{{$sport->sport_id}}" style="display:none">
                            <input type="text" name="sport_name" readonly value="{{$sport->sport_name}}" style="display:none">
                            <div class="col-md-12 form-group">
                                <div class="input-group col-md-10">
                                    <span class="input-group-addon">Archivo de Excel<input type="file" id="excelf" style="position: absolute; opacity: 0; left: 0px; top: 7px; z-index: 2" name="excelf"/></span>
                                    <input type="text" class="form-control" id="excelname" placeholder="Imagen" readonly>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-offset-4 col-md-4">
                                    <button type="submit" class="btn btn-primary col-md-12">Registrar</button>
                                </div>
                            </div>
                            
                    </form>
                    </div>         
            </div>
        </div>
    </div>
</div>
@endsection