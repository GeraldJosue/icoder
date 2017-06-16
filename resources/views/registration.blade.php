<link rel="stylesheet" href="css/maintenances.css">
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">NOMBRE DEL DEPORTE</div>

                <div class="panel-body">
                    
                <form class="form-horizontal" role="form" method="POST">

                            <select class="form-control" id="all_cantons" readonly style="display:none">
                                @foreach($cantons as $canton)
                                    <option value="{{$canton->province_id}}">{{$canton->canton_name}}</option>
                                @endforeach
                            </select> 

                <div id="st_step">
                    <div id="buscar" class="col-md-12 form-group">
                        <div class="input-group col-md-5">
                            <input type="text" class="form-control" placeholder="Identificación">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Buscar</button>
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="" placeholder="Cédula" value="" required>            
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="" placeholder="Nacionalidad" value="" required>            
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="" placeholder="Fecha de Nacimiento" value="" required>
                        </div>             
                    </div>

                    <div class="form-group">
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="" placeholder="Nombre" value="" required>            
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="" placeholder="Primer Apellido" value="" required>            
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="" placeholder="Segundo Apellido" value="" required>          
                        </div>             
                    </div>

                    <div class="form-group">
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="" placeholder="Correo" value="" required>            
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="" placeholder="Teléfono" value="" required>            
                        </div>           
                    </div>

                     <div class="form-group">
                        <div class="col-md-offset-4 col-md-4">
                             <button class="btn btn-default col-md-12" id="next1" type="button">Siguiente</button>      
                        </div>
                    </div>
                </div>

                <div id="nd_step" hidden="true">

                    <div class="form-group">
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="" placeholder="Peso" value="" required>            
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="" placeholder="Altura" value="" required>            
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="" placeholder="Tipo de Samgre" value="" required>
                        </div>             
                    </div>

                    <div class="form-group">
                        <div class="col-md-4">
                            <select class="form-control" id="provinces">
                                @foreach($provinces as $province)
                                    <option value="{{$province->province_id}}">{{$province->province_name}}</option>
                                @endforeach
                            </select>           
                        </div>
                        <div class="col-md-4">
                            <select class="form-control" id="cantons">
                            </select>         
                        </div>
                        <div class="col-md-4">
                            <select class="form-control" id="user_rol">
                                @foreach($user_rols as $user_rol)
                                    <option value="{{$user_rol->user_rol_id}}">{{$user_rol->user_rol_name}}</option>
                                @endforeach
                            </select>  
                        </div>             
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="" placeholder="Dirección Exacta" value="" required>            
                        </div>         
                    </div>


                    <div class="form-group">
                        <div class="col-md-4 col-md-offset-2">
                             <button class="btn btn-default col-md-12" id="back2" type="button">Atrás</button>      
                        </div>
                        <div class="col-md-4">
                             <button class="btn btn-default col-md-12" type="button">Siguiente</button>      
                        </div>

                    </div>
                </div>

                </form>
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
