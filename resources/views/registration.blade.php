<link rel="stylesheet" href="css/maintenances.css">
@extends('layouts.app')
@section('content')
<div class="container" style="margin: 0">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">Inscripciones Parciales</div>
                <div class="panel-body">
                    <form>
                        <table>
                            <thead>
                                <tr>
                                    <th>Dni</th>
                                    <th>Nombre</th>
                                    <th>Editar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($enrolles as $enrolle)
                                            <tr>
                                                <td>{{$enrolle->dni}}</td>
                                                <td>{{$enrolle->name}}</td>
                                                <td>
                                                    <input type="radio" name="enrolles" value="{{$enrolle->person_id}}"><br>
                                                </td>
                                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <button class="btn btn-default" id="edit" type="button">Editar</button>
                    </form>
                </div>
                
            </div>
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">{{$sport->sport_name}}</div>
                <div class="panel-heading">TIPOS DE DATOS</div>

                <div class="panel-body">

                    
                <select class="form-control" id="all_cantons" readonly style="display:none">
                    @foreach($cantons as $canton)
                        <option id="{{$canton->canton_id}}" value="{{$canton->province_id}}">{{$canton->canton_name}}</option>
                    @endforeach
                </select> 

        <form class="form-horizontal" role="form" method="POST" action="{{route('enrolle_create')}}" enctype="multipart/form-data"> 
                
                {{ csrf_field() }}

                <input type="text" name="canton_id" readonly value="{{Auth::user()->canton_id}}" style="display:none">
                <input type="text" id="sport_id" name="sport_id" readonly value="{{$sport->sport_id}}" style="display:none">
                <input type="text" id="gender" name="gender" readonly value="" style="display:none">
                <div id="buscar" class="col-md-12 form-group">
                        <div class="input-group col-md-5">
                            <input type="text" class="form-control" id="finder" name="finder" placeholder="Identificación">
                            <span class="input-group-btn">
                                <button class="btn btn-default" id="find" type="button">Buscar</button>
                            </span>
                        </div>
                </div>

                <div id="st_step" hidden="true">

                    <div class="form-group">
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="dni" id="dni" placeholder="Cédula" readonly value="">            
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="nationality" id="nationality" placeholder="Nacionalidad" readonly value="">            
                        </div>
                        <div class="col-md-4">
                            <input type="date" class="form-control" name="birthdate" id="birthdate" placeholder="Fecha de Nacimiento" readonly value="">
                        </div>             
                    </div>

                    <div class="form-group">
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Nombre" readonly value="">            
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Primer Apellido" readonly value="">            
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Segundo Apellido" readonly value="">          
                        </div>             
                    </div>

                    <div class="form-group">
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="person_email" id="person_email" placeholder="Correo" value="">
                        </div>
                        <div class="col-md-4">
                            <input type="tel" pattern="[0-9]{8}" class="form-control" name="tel_number" id="tel_number" placeholder="Teléfono (8 dígitos)" value="">
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
                            <input type="text" class="form-control" name="weight" id="weight" placeholder="Peso (kg)" value="">            
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="height" id="height" placeholder="Estatura (cm)" value="">            
                        </div>
                        <div class="col-md-4">
                            <select name="blood_type" id="blood_type" class="form-control">
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                            </select>
                        </div>             
                    </div>

                    <div class="form-group">
                        <div class="col-md-4">
                            <select name="provinces" id="provinces" class="form-control">
                              @foreach($provinces as $province)
                                <option value="{{$province->province_id}}">{{$province->province_name}}</option>
                              @endforeach
                            </select>         
                        </div>
                        <div class="col-md-4">
                            <select name="cantons" id="cantons" class="form-control">
                                <option value="" disabled="true">Cantones</option>
                            </select>              
                        </div>
                        <div class="col-md-4">
                            <select name="user_rol" id="user_rol" class="form-control">
                              @foreach($user_rols as $user_rol)
                                <option value="{{$user_rol->user_rol_id}}">{{$user_rol->user_rol_name}}</option>
                              @endforeach
                            </select> 
                        </div>             
                    </div>


                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="town" id="town" placeholder="Dirección exacta" value="">
                        </div>
                              
                    </div>



                    <div class="form-group">

                        <div class="col-md-offset-2 col-md-4">
                             <button class="btn btn-default col-md-12" id="back2" type="button">Atrás</button>      
                        </div>
                        <div class=" col-md-4">
                             <button class="btn btn-default col-md-12" id="next2" type="button">Siguiente</button>      
                        </div>
                    </div>
                </div>

                <div id="rd_step" hidden="true">

                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-1" id="try_outs_checks">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-4">
                             <button class="btn btn-default col-md-12" id="back3" type="button">Atrás</button>      
                        </div>
                        <div class=" col-md-4">
                             <button class="btn btn-default col-md-12" id="next3" type="button">Siguiente</button>      
                        </div>
                    </div>        
                </div>

                <div id="th_step" hidden="true">
                    <div class="col-md-6 form-group">
                        <div class="input-group col-md-11">
                            <span class="input-group-addon">Foto pasaporte<input type="file" id="personal" name="personal" style="position: absolute; opacity: 0; left: 0px; top: 7px; z-index: 2"></span>
                            <input type="text" class="form-control" id="personalname" placeholder="Imagen" readonly>
                        </div>
                    </div>

                    <div class="col-md-6 form-group">
                        <div class="input-group col-md-11">
                            <span class="input-group-addon">Copia cédula frontal<input type="file" id="front" style="position: absolute; opacity: 0; left: 0px; top: 7px; z-index: 2" name="front"/></span>
                            <input type="text" class="form-control" id="frontname" placeholder="Imagen" readonly>
                        </div>
                    </div>

                    <div class="col-md-6 form-group">
                        <div class="input-group col-md-11">
                            <span class="input-group-addon">Copia cédula reverso<input type="file" id="back" style="position: absolute; opacity: 0; left: 0px; top: 7px; z-index: 2" name="back"/></span>
                            <input type="text" class="form-control" id="backname" placeholder="Imagen" readonly>
                        </div>
                    </div>

                    <div class="col-md-6 form-group">
                        <div class="input-group col-md-11">
                            <span class="input-group-addon">Boleta de inscripción<input type="file" id="enroll" style="position: absolute; opacity: 0; left: 0px; top: 7px; z-index: 2" name="enroll"/></span>
                            <input type="text" class="form-control" id="enrollname" placeholder="Imagen" readonly>
                        </div>
                    </div>

                    <div class="col-md-12 form-group">
                        <div class="input-group col-md-11">
                            <span class="input-group-addon">Pase cantonal<input type="file" id="pass" style="position: absolute; opacity: 0; left: 0px; top: 7px; z-index: 2" name="pass"/></span>
                            <input type="text" class="form-control" id="passname" placeholder="Imagen" readonly>
                        </div>
                    </div>

                    <div class="form-group">

                        <div class="col-md-offset-2 col-md-4">
                             <button class="btn btn-default col-md-12" id="back4" type="button">Atrás</button>      
                        </div>
                        <div class=" col-md-4">
                             <button class="btn btn-default col-md-12" id="next4" type="button">Inscribir</button>      
                        </div>
                    </div>        
                </div>

                <div class="form-group">
                    <div class="col-md-offset-4 col-md-4">
                        <button type="submit" class="btn btn-primary col-md-12" id="savetemp" disabled="true">Guardar Registro Temporal</button>
                    </div>
                </div>
        </form>

                <div class="col-md-offset-2 col-md-8">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" id="pr_bar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">1/4</div>
                        </div>
                </div>

                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
