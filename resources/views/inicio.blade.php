
<?php
session_start();
?>

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
        <header>
           <img src="imgs/pie_icoder.png">                   
        </header>
        <div class="col-md-12">
            <div class="col-md-offset-4 col-md-4">
            <form>
                <div class="formulario" class= "input-group">
                   
                    <input type="text" class="form-control" placeholder="Usuario" aria-describedby="sizing-addon2">
                   
                    <input type="text" class="form-control" placeholder="Contraseña" aria-describedby="sizing-addon2">  
                    <button class="atras" class="btn btn-default" onclick="location.href='{{route('sport')}}'" type="button">Ingresar</button>      
                </div>
            </form>
            </div>
        </div>
        <div class="container">
            <div class="row"></div>
        </div>
        <footer>
            
        </footer>
    </body>
</html>
