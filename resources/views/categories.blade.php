<link rel="stylesheet" href="css/maintenances.css">
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">CATEGORIAS</div>

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
                                <h4 class="modal-title" id="myModalLabel">Agregar Categoría</h4>
                              </div>
                              <div class="modal-body">
                                <form class="form-horizontal" role="form" method="POST" action="{{route('category_create')}}">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Nombre de la categoría:</label>

                                        <div class="col-md-6">
                                            <input id="category_name" type="text" class="form-control" name="category_name" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Género:</label>

                                        <div class="col-md-6">
                                                <select class="form-control" name="gender" id="gender">
                                                        <option value="F">Femenino</option>
                                                        <option value="M">Masculino</option>
                                                        
                                                </select>

                                            
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Año Mínimo:</label>

                                        <div class="col-md-6">
                                            <input id="initial_year" type="text" class="form-control" name="initial_year" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Año Límite:</label>

                                        <div class="col-md-6">
                                            <input id="final_year" type="text" class="form-control" name="final_year" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Deporte:</label>

                                        <div class="col-md-6">
                                            <select class="form-control" name="sport_id" id="sport_id">
                                                @foreach($sports as $sport)
                                                    <option value="{{$sport->sport_id}}">{{$sport->sport_name}}</option>
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

                        <!-- Modal -->
                        <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Efitar Categoría</h4>
                              </div>
                              <div class="modal-body">
                                <form class="form-horizontal" role="form" method="POST" action="{{route('category_update')}}">
                                    {{ csrf_field() }}

                                    <input type="text" name="category_id" hidden="true" readonly id="category_id" value="2"/>

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Nombre de la categoría:</label>

                                        <div class="col-md-6">
                                            <input id="new_category_name" type="text" class="form-control" name="new_category_name" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Género:</label>

                                        <div class="col-md-6">
                                                <select class="form-control" name="new_gender" id="new_gender">
                                                        <option value="F">Femenino</option>
                                                        <option value="M">Masculino</option>
                                                        
                                                </select>

                                            
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Año Mínimo:</label>

                                        <div class="col-md-6">
                                            <input id="new_initial_year" type="text" class="form-control" name="new_initial_year" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Año Límite:</label>

                                        <div class="col-md-6">
                                            <input id="new_final_year" type="text" class="form-control" name="new_final_year" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Deporte:</label>

                                        <div class="col-md-6">
                                            <select class="form-control" name="new_sport_id" id="new_sport_id">
                                                @foreach($sports as $sport)
                                                    <option value="{{$sport->sport_id}}">{{$sport->sport_name}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>

                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary">Actualizar</button>
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
                                        <th>Categoría</th>
                                        <th>Género</th>
                                        <th>Año Min</th>
                                        <th>Año Max</th>
                                        <th>Deporte</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $category)
                                        <tr>
                                            <td>{{$category->category_name}}</td>
                                            
                                            @if($category->gender == 'F')
                                                <td>Femenino</td>
                                            @else
                                                <td>Masculino</td>
                                            @endif

                                            <td>{{$category->initial_year}}</td>
                                            <td>{{$category->final_year}}</td>

                                            @foreach($sports as $sport)

                                                @if($sport->sport_id == $category->sport_id)
                                                    <td>{{$sport->sport_name}}</td>
                                                @else
                                                @endif

                                            @endforeach   


                                            <td>

                                                <a data-toggle="modal" href="#" class="edit-Category" data-id="{{$category->category_id}}" data-target="#updateModal">
                                                    
                                                    <span class="glyphicon glyphicon-cog" style="color:green" aria-hidden="true"></span>

                                                </a>
                                                </td>
                                                <td>
                                                <a href="{{url('/categories/delete/'.$category->category_id)}}" 
                                                    onclick="return confirm('¿Eliminar {{$category->category_name}} del sistema?');">
                                                        
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
