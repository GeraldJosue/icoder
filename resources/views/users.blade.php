<link rel="stylesheet" href="css/maintenances.css">
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">USUARIOS</div>

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
                                <h4 class="modal-title" id="myModalLabel">Agregar Usuario</h4>
                              </div>
                              <div class="modal-body">
                                <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre de usuario:</label>

                            <div class="col-md-6">
                                <input id="nickname" type="text" class="form-control" name="nickname" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Cantón:</label>

                                        <div class="col-md-6">
                                            {{-- <select class="form-control" name="canton_id" id="canton_id">
                                                @foreach($cantons as $canton)
                                                    <option value="{{$canton->canton_id}}">{{$canton->canton_name}}</option>
                                                @endforeach

                                            </select> --}}
                                        </div>
                                    </div>
:
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Tipo:</label>

                            <div class="col-md-6">
                                    <select class="form-control" name="user_type" id="user_type">
                                            <option value="1">Administrador</option>
                                            <option value="2">Representante</option>
                                            <option value="3">Super Admin</option>

                                    </select>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Correo:</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
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

                        <!-- Modal -->
                        <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Editar Categoría</h4>
                              </div>
                              <div class="modal-body">
                                

                              </div>
                              <div class="modal-footer">

                              </div>
                            </div>
                          </div>
                        </div>

                    <div class="row">

                        <div class="col-md-10 col-md-offset-1">
                            <table class="table" id="sports">
                                <thead>
                                    <tr>
                                        <th>Nombre de usuario</th>
                                        <th>Correo</th>
                                        <th>Canton</th>
                                        <th>Permisos</th>
                                        <th>A/E</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{$user->nickname}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->canton_id}}</td>
                                            
                                            @if($user->user_type == 1)
                                                <td>Administrador</td>
                                            @elseif($user->user_type == 2)
                                                <td>Representante</td>
                                            @else
                                                <td>Super Admin</td>
                                            @endif()
                                                                                    
                                            <td>
                                                <a data-toggle="modal" href="#" class="open-Modal" data-id="{{$user->id}}" data-target="#updateModal">
                                                    
                                                    <span class="glyphicon glyphicon-cog" style="color:green" aria-hidden="true"></span>

                                                </a>
                                                |
                                                <a href="{{url('/users/delete/'.$user->id)}}" 
                                                    onclick="return confirm('¿Eliminar {{$user->nickname}} del sistema?');">
                                                        
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
<script type="text/javascript" src="js/category.js"></script>
@endsection
