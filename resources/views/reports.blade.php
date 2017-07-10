<link rel="stylesheet" href="css/maintenances.css">
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Reportes</div>

                <div class="panel-body">

                    <form class="form-horizontal" role="form" method="POST" action="{{route('save_pdf')}}" enctype="multipart/form-data"> 
                    
                        {{ csrf_field() }}

                    <div clas="row">


                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <div class="col-md-4">
                                        <select class="form-control" name="sport" id="sport">
                                            @foreach($sports as $sport)
                                                <option value="{{$sport->sport_id}}">{{$sport->sport_name}}</option>
                                            @endforeach
                                        </select>                                        
                                    </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <div class="col-md-4">
                                        <select class="form-control" name="category" id="category">

                                        </select>                                        
                                    </div>
                            </div>
                    </div>

                    <div class="row">

                        <div class="col-md-10 col-md-offset-1">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Cédula</th>
                                        <th>Nombre</th>
                                        <th>Nacimiento</th>
                                        <th>Canton</th>
                                        <th>Correo</th>
                                        <th>Telefono</th>
                                        <th>Deporte</th>
                                        <th>Categoria</th>
                                    </tr>
                                </thead>
                                <tbody id="table_body">
                                    
                                </tbody>
                            </table>
                        </div>

                    </div>

                    <div class="row">
                        
                        <div class="form-group">
                            <div class="col-md-offset-4 col-md-4">
                                 <button type="submit" class="btn btn-default col-md-12" id="save_pdf" type="button">Guardar PDF</button>      
                            </div>
                        </div>

                    </div>

                    <form> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection