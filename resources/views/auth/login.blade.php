<link rel="stylesheet" href="css/login.css">
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <img id="logo" src="imgs/pie_icoder.png">          
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default" id="panel_container">
                <div class="panel-heading" style="border-top: 0px; border-left: 0px; border-right: 0px;">
                    Sistema de Inscripciones Juegos Nacionales 2017
                </div>
                <div class="panel-body" id="panel_body" style="border-style: none">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            

                            <div class="col-md-offset-2 col-md-8">
                                
                                <input id="email" type="email" name="email" value="{{ old('email') }}" required placeholder="Correo" style="border-top: 0px; border-left: 0px; border-right: 0px; border-bottom-color: blue">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="col-md-offset-2 col-md-8">
                                
                                <input id="password" type="password" name="password" required placeholder="Contraseña" style="border-top: 0px; border-left: 0px; border-right: 0px; border-bottom-color: blue">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Ingresar
                                </button>
                                <br>
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    ¿Olvidó su contraseña?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
