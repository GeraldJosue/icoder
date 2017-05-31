<link rel="stylesheet" href="css/maintenances.css">
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">EDICIONES</div>

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
                                <h4 class="modal-title" id="myModalLabel">Agregar Edicion</h4>
                              </div>
                              <div class="modal-body">
                                <form class="form-horizontal" role="form" method="POST">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Nombre de la edicion:</label>

                                        <div class="col-md-6">
                                            <input id="edition_name" type="text" class="form-control" name="edition_name" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Año de la edicion:</label>

                                        <div class="col-md-6">
                                            <input id="edition_year" type="text" class="form-control" name="edition_year" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Lugar de la edicion:</label>

                                        <div class="col-md-6">
                                            <input id="edition_place" type="text" class="form-control" name="edition_place" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Fecha de inicio:</label>

                                        <div class="col-md-6">
                                            <input id="initial_date" type="text" class="form-control" name="initial_date" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Fecha final:</label>

                                        <div class="col-md-6">
                                            <input id="final_date" type="text" class="form-control" name="final_date" value="{{ old('name') }}" required autofocus>

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
                                <h4 class="modal-title" id="myModalLabel">Editar Edicion</h4>
                              </div>
                              <div class="modal-body">
                                <form class="form-horizontal" role="form" method="POST" action="{{url('/editions/update/')}}">
                                    {{ csrf_field() }}

                                    
                                        <input type="text" name="edition_id" hidden="true" readonly id="edition_id" value=""/>

                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <label for="name" class="col-md-4 control-label">Nombre de la Edicion:</label>

                                            <div class="col-md-6">
                                                <input id="new_edition_name" type="text" class="form-control" name="new_edition_name" value="" required>

                                                @if ($errors->has('name'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
    
                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <label for="name" class="col-md-4 control-label">Año de la Edicion:</label>

                                            <div class="col-md-6">
                                                <input id="new_edition_year" type="text" class="form-control" name="new_edition_year" value="" required>

                                                @if ($errors->has('name'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <label for="name" class="col-md-4 control-label">Lugar de la Edicion:</label>

                                            <div class="col-md-6">
                                                <input id="new_edition_place" type="text" class="form-control" name="new_edition_place" value="" required>

                                                @if ($errors->has('name'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <label for="name" class="col-md-4 control-label">Fecha de inicio:</label>

                                            <div class="col-md-6">
                                                <input id="new_initial_date" type="text" class="form-control" name="new_initial_date" value="" required>

                                                @if ($errors->has('name'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <label for="name" class="col-md-4 control-label">Fecha final:</label>

                                            <div class="col-md-6">
                                                <input id="new_final_date" type="text" class="form-control" name="new_final_date" value="" required>

                                                @if ($errors->has('name'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                                @endif
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
                            <table class="table" id="editions">
                                <thead>
                                    <tr>
                                        <th>Edicion</th>
                                        <th>Año</th>
                                        <th>Lugar</th>
                                        <th>Fecha inicial</th>
                                        <th>Fecha final</th>
                                        <th>A/E</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($editions as $edition)
                                        <tr>
                                            <td>{{$edition->edition_name}}</td>
                                            <td>{{$edition->edition_year}}</td>
                                            <td>{{$edition->edition_place}}</td>
                                            <td>{{$edition->initial_date}}</td>
                                            <td>{{$edition->final_date}}</td>
                                            
                                                                                    
                                            <td>
                                                <a data-toggle="modal" href="#" class="open-Modal" data-id="{{$edition->edition_id}}" data-target="#updateModal">
                                                    
                                                    <span class="glyphicon glyphicon-cog" style="color:green" aria-hidden="true"></span>

                                                </a>
                                                |
                                                <a href="{{url('/editions/delete/'.$edition->edition_id)}}" 
                                                    onclick="return confirm('¿Eliminar {{$edition->edition_name}} del sistema?');">
                                                        
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
