<link rel="stylesheet" href="css/maintenances.css">
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">PRUEBAS</div>

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
                                <h4 class="modal-title" id="myModalLabel">Agregar Prueba</h4>
                              </div>
                              <div class="modal-body">
                              
                                <form class="form-horizontal" role="form" method="POST" action="{{route('try_out_create')}}">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Nombre de la prueba:</label>

                                        <div class="col-md-6">
                                            <input id="try_out_name" type="text" class="form-control" name="try_out_name" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Categoría:</label>

                                        <div class="col-md-6">
                                         
                                                 <select class="form-control" name="category_id" id="category_id">
                                                        @foreach($categories as $category)
                                                            <option value="{{$category->category_id}}">{{$category->category_name}}</option>
                                                        @endforeach()
                                                        
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
                                <h4 class="modal-title" id="myModalLabel">Editar Prueba</h4>
                              </div>
                              <div class="modal-body">
                                <form class="form-horizontal" role="form" method="POST" action="{{url('/try_outs/update/')}}">
                                    {{ csrf_field() }}

                                    
                                        <input type="text" name="try_out_id" hidden="true" readonly id="try_out_id" value=""/>

                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <label for="name" class="col-md-4 control-label">Nombre de la prueba:</label>

                                            <div class="col-md-6">
                                                <input id="new_try_out_name" type="text" class="form-control" name="new_try_out_name" value="" required>

                                                @if ($errors->has('name'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <label for="name" class="col-md-4 control-label">Categoría:</label>

                                            <div class="col-md-6">
                                             
                                                     <select class="form-control" name="new_category_id" id="new_category_id">
                                                            @foreach($categories as $category)
                                                                <option value="{{$category->category_id}}">{{$category->category_name}}</option>
                                                            @endforeach()
                                                            
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
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Prueba</th>
                                        <th>Categoría</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($try_outs as $try_out)
                                        <tr>
                                            <td>{{$try_out->try_out_name}}</td>
                                            
                                            @foreach($categories as $category)
                                                @if($category->category_id == $try_out->category_id)
                                                    <td>{{$category->category_name}}</td>
                                                @endif

                                            @endforeach()
                                                                                    
                                            <td>
                                                <a data-toggle="modal" href="#" class="edit-Try_out" data-id="{{$try_out->try_out_id}}" data-target="#updateModal">
                                                    
                                                    <span class="glyphicon glyphicon-pencil" style="color:blue" aria-hidden="true"></span>

                                                </a>
                                                </td>
                                                <td>
                                                <a href="{{url('/try_outs/delete/'.$try_out->try_out_id)}}" 
                                                    onclick="return confirm('¿Eliminar {{$try_out->try_out_name}} del sistema?');">
                                                        
                                                        <span class="glyphicon glyphicon-trash" style="color:red" aria-hidden="true"></span>
                                                    
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