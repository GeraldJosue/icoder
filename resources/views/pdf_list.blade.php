<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>
    <div style="text-align: center">
        <img src="imgs/pie_icoder.png">
        <h3>REPORTE DE INSCRIPCIONES</h3>
        <p>Juegos Nacionales 2017
        </p>

        <table style="text-align: center; width: 100%; border: 1px solid">
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
            <tbody>
                @foreach($enrolles as $enrolle)
                    <tr>
                        <th>{{$enrolle->dni}}</th>
                        <th>{{$enrolle->name}}</th>
                        <th>{{$enrolle->birthdate}}</th>
                        <th>{{$enrolle->canton_id}}</th>
                        <th>{{$enrolle->person_email}}</th>
                        <th>{{$enrolle->tel_number}}</th>
                        <th>{{$enrolle->sport_id}}</th>
                        <th>{{$enrolle->category_id}}</th>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
</body>
</html>