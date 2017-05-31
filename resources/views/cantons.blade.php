<link rel="stylesheet" href="css/maintenances.css">
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">CANTONES</div>

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
                                <h4 class="modal-title" id="myModalLabel">Agregar Canton</h4>
                              </div>
                              <div class="modal-body">
                                <form class="form-horizontal" role="form" method="POST">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Nombre del canton:</label>

                                        <div class="col-md-6">
                                            <input id="canton_name" type="text" class="form-control" name="canton_name" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Provincia:</label>

                                        <div class="col-md-6">
                                            <select class="form-control" name="province_id" id="province_id">
                                                @foreach($provinces as $province)
                                                    <option value="{{$province->province_id}}">{{$province->province_name}}</option>
                                                @endforeach

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
                                <h4 class="modal-title" id="myModalLabel">Editar Canton</h4>
                              </div>
                              <div class="modal-body">
                                <form class="form-horizontal" role="form" method="POST" action="{{route('canton_update')}}">
                                    {{ csrf_field() }}

                                    <input type="text" name="canton_id" hidden="true" readonly id="canton_id" value=""/>

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Nombre del canton:</label>

                                        <div class="col-md-6">
                                            <input id="new_canton_name" type="text" class="form-control" name="new_canton_name" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Provincia:</label>

                                        <div class="col-md-6">
                                            <select class="form-control" name="new_province_id" id="new_province_id">
                                                @foreach($provinces as $province)
                                                    <option value="{{$province->province_id}}">{{$province->province_name}}</option>
                                                @endforeach

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
                    </div>

                    <div class="row">

                        <div class="col-md-10 col-md-offset-1">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Canton</th>
                                        <th>Provincia</th>                                        
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cantons as $canton)
                                        <tr>
                                            <td>{{$canton->canton_name}}</td>

                                            @foreach($provinces as $province)

                                                @if($province->province_id == $canton->province_id)
                                                    <td>{{$province->province_name}}</td>
                                               @endif

                                            @endforeach  

                                            <td>
                                                <a data-toggle="modal" href="#" class="edit-Canton" data-id="{{$canton->canton_id}}" data-target="#updateModal">
                                                    
                                                    <span class="glyphicon glyphicon-cog" style="color:green" aria-hidden="true"></span>

                                                </a>
                                                </td>
                                                <td>
                                                <a href="{{url('/cantons/delete/'.$canton->canton_id)}}" 
                                                    onclick="return confirm('¿Eliminar {{$canton->canton_name}} del sistema?');">
                                                        
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
