<link rel="stylesheet" href="css/maintenances.css">
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">DEPORTES</div>

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
                                <h4 class="modal-title" id="myModalLabel">Agregar Deporte</h4>
                              </div>
                              <div class="modal-body">
                                <form class="form-horizontal" role="form" method="POST">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Nombre del deporte:</label>

                                        <div class="col-md-6">
                                            <input id="sport_name" type="text" class="form-control" name="sport_name" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Tipo de deporte:</label>

                                        <div class="col-md-6">
                                         
                                                 <select class="form-control" name="sport_type" id="sport_type">

                                                        <option value="1">Individual</option>
                                                        <option value="2">Grupal</option>
                                                        <option value="3">Individual y Grupal</option>
                                                        
                                                </select>

                                            
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
                                <form class="form-horizontal" role="form" method="POST" action="{{url('/sports/update/')}}">
                                    {{ csrf_field() }}

                                    
                                        <input type="text" name="sport_id" hidden="true" readonly id="sport_id" value=""/>

                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <label for="name" class="col-md-4 control-label">Nombre del deporte:</label>

                                            <div class="col-md-6">
                                                <input id="new_sport_name" type="text" class="form-control" name="new_sport_name" value="" required>

                                                @if ($errors->has('name'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <label for="name" class="col-md-4 control-label">Tipo de deporte:</label>

                                            <div class="col-md-6">
                                                <select class="form-control" name="new_sport_type" id="new_sport_type">

                                                        <option value="1">Individual</option>
                                                        <option value="2">Grupal</option>
                                                        <option value="3">Individual y Grupal</option>

                                                </select>
                                                
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
                                        <th>Deporte</th>
                                        <th>Tipo</th>
                                        <th>A/E</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($sports as $sport)
                                        <tr>
                                            <td>{{$sport->sport_name}}</td>
                                            
                                            @if($sport->sport_type == 1)
                                                <td>Individual</td>
                                            @elseif($sport->sport_type == 2)
                                                <td>Grupal</td>
                                            @else
                                                <td>Individual y Grupal</td>
                                            @endif
                                                                                    
                                            <td>
                                                <a data-toggle="modal" href="#" class="open-Modal" data-id="{{$sport->sport_id}}" data-target="#updateModal">
                                                    
                                                    <span class="glyphicon glyphicon-cog" style="color:green" aria-hidden="true"></span>

                                                </a>
                                                |
                                                <a href="{{url('/sports/delete/'.$sport->sport_id)}}" 
                                                    onclick="return confirm('¿Eliminar {{$sport->sport_name}} del sistema?');">
                                                        
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
