<link rel="stylesheet" href="css/maintenances.css">
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ROLES</div>

                <div class="panel-body">
                    <div id="idu" clas="row">

                        <div class="col-md-4">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">Agregar</button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Agregar Rol</h4>
                              </div>
                              <div class="modal-body">
                                <form class="form-horizontal" role="form" method="POST" action="{{route('user_rol_create')}}">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Nombre del rol:</label>

                                        <div class="col-md-6">
                                            <input id="user_rol_name" type="text" class="form-control" name="user_rol_name" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </form>

                              </div>
                              <div class="modal-footer">

                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Editar Deporte</h4>
                              </div>
                              <div class="modal-body">
                                <form class="form-horizontal" role="form" method="POST" action="{{url('/try_outs/update/')}}">
                                    {{ csrf_field() }}

                                    
                                        <input type="text" name="sport_id" hidden="true" readonly id="sport_id" value=""/>

                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <label for="name" class="col-md-4 control-label">Nombre del rol :</label>

                                            <div class="col-md-6">
                                                <input id="new_user_rol_name" type="text" class="form-control" name="new_user_rol_name" value="" required>

                                                @if ($errors->has('name'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                    
                                </form>

                              </div>
                              <div class="modal-footer">

                              </div>
                            </div>
                          </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-10 col-md-offset-1">
                            <table class="table" id="sports">
                                <thead>
                                    <tr>
                                        <th>Rol</th>
                                        <th>A/E</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($user_rols as $user_rol)
                                        <tr>
                                            <td>{{$user_rol->user_rol_name}}</td>
                                                                                    
                                            <td>
                                                <a data-toggle="modal" href="#" class="open-Modal" data-id="{{$user_rol->user_rol_id}}" data-target="#updateModal">
                                                    
                                                    <span class="glyphicon glyphicon-cog" style="color:green" aria-hidden="true"></span>

                                                </a>
                                                |
                                                <a href="{{url('/user_rols/delete/'.$user_rol->user_rol_id)}}" 
                                                    onclick="return confirm('¿Eliminar {{$user_rol->user_rol_name}} del sistema?');">
                                                        
                                                        <span class="glyphicon glyphicon-remove" style="color:red" aria-hidden="true"></span> 
                                                </a>
                                            
                                                
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection