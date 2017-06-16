<link rel="stylesheet" href="css/maintenances.css">
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ROLES</div>

                    <div class="panel-body">
                    <div id="buscar" class="col-md-12">
                        <div class="input-group col-md-5">
                             <input type="text" class="form-control" placeholder="Search for...">
                             <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Buscar</button>
                             </span>
                        </div>
                    </div>

                    <div class="formulario" class="col-md-12">
                        
                        <div class="col-md-4">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Cédula" aria-describedby="basic-addon1">
                                <input type="text" class="form-control" placeholder="Nacionalidad" aria-describedby="basic-addon1">
                                <input type="text" class="form-control" placeholder="Telefono" aria-describedby="basic-addon1">
                            </div>
                        </div>            

                        <div class="col-md-4">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Nombre" aria-describedby="basic-addon1">
                                <input type="text" class="form-control" placeholder="Fecha de Nacimiento" aria-describedby="basic-addon1">
                                <div class="col-md-12">
                                    <button class="atras" class="btn btn-default" type="button">Atrás</button>
                                </div>
                            </div>
                        </div> 

                        <div class="col-md-4">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Apellidos" aria-describedby="basic-addon1">
                                <input type="text" class="form-control" placeholder="Correo" aria-describedby="basic-addon1">
                                <div class="col-md-12">
                                    <button class="siguiente" class="btn btn-default" type="button">Siguiente</button>
                                </div>
                            </div>
                        </div> 


                    </div>

                    <div class="col-md-offset-2 col-md-8">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 33.3%;">1/3</div>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection