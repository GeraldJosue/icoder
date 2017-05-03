<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ICODER</title>

        <!-- Fonts -->
        <!--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> -->
        <!-- Styles -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">

    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Inscripciones</a></li>
                        <li><a href="#">Reportes</a></li>
                    </ul>
                    <form class="navbar-form navbar-right">
                        <div class="form-group">
                            <input type="text" class="form-control" disabled="true" placeholder="Usuario, Cantón">
                        </div>
                        <div class="form-group">
                            <ul class="nav navbar-nav">
                                <li><a href="#">Salir</a></li>
                            </ul>
                        </div>
                    </form>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div id="deporte" class="col-md-12">DEPORTE</div>

        <div id="buscar" class="col-md-12">
            <div class="input-group col-md-5">
                 <input type="text" class="form-control" placeholder="Search for...">
                 <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Buscar</button>
                 </span>
            </div>
        </div>

        <div class="formulario" class="col-md-12">
            
            <div class="col-md-4">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cédula" aria-describedby="basic-addon1">
                    <input type="text" class="form-control" placeholder="Nacionalidad" aria-describedby="basic-addon1">
                    <input type="text" class="form-control" placeholder="Telefono" aria-describedby="basic-addon1">
                </div>
            </div>            

            <div class="col-md-4">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Nombre" aria-describedby="basic-addon1">
                    <input type="text" class="form-control" placeholder="Fecha de Nacimiento" aria-describedby="basic-addon1">
                    <div class="col-md-12">
                        <button class="atras" class="btn btn-default" type="button">Atrás</button>
                    </div>
                </div>
            </div> 

            <div class="col-md-4">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Apellidos" aria-describedby="basic-addon1">
                    <input type="text" class="form-control" placeholder="Correo" aria-describedby="basic-addon1">
                    <div class="col-md-12">
                        <button class="siguiente" class="btn btn-default" type="button">Siguiente</button>
                    </div>
                </div>
            </div> 


        </div>

        <div class="col-md-offset-2 col-md-8"">
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 33.3%;">1/3</div>
            </div>
        </div>
        
        <footer class ="col-md-12">
            <div class="mmedia-right">
                 <img class="media-right" src="imgs/pie_icoder.png" style="float: right;" alt="ICODER">
            </div>
        </footer>
    </body>
</html>
