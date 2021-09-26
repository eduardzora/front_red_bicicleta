<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Bicicletas</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a class="btn btn-primary" href="/newBici"><i class="fas fa-bicycle"></i> Nueva Bicicleta</a>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Color</th>
                            <th>Tipo</th>
                            <th>Lactitud</th>
                            <th>Longitud</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bicicletas as $bici)
                        <tr>
                            <td>{{$bici->color}}</td>
                            <td>{{$bici->tipo}}</td>
                            <td>{{$bici->lactitud}}</td>
                            <td>{{$bici->longitud}}</td>
                            <td>
                                <a class="btn btn-primary" href="/bicicletas/{{ $bici->_id }}"><i class="fas fa-edit"></i></a>
                                <a class="btn btn-danger" href="/bicicletas/{{ $bici->_id }}/delete"><i class="fas fa-trash-alt"></i></a>
                            </td>
                            <!--<td><a href="/bicicletas/{{ $bici->_id }}/update">Actualizar</a></td>-->
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Bootstrap core JS-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>