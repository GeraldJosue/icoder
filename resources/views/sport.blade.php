
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
            <div class="dropdown">
                  <button class="btn btn-default dropdown-toggle" onclick="location.href='{{route('registration')}}'" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Deportes
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#">Atletismo</a></li>
                    <li><a href="#">Futbol</a></li>
                    <li><a href="#">Futbol Sala</a></li>
         
                  </ul>
            </div>

        </div>
            
        <footer>
            
        </footer>
    </body>
</html>