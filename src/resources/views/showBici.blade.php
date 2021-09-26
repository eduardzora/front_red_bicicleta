<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Ver bicicleta</title>
</head>

<body>
    <div class="container">
        <h2 class="text-center">Visualizar o Actualizar Bicicletas</h2>
        <div class="row">
            <div class="col-12">
                <form method="get" action="/bicicletas/{{ $bicicletas->_id }}/update">
                    <div class="form-group position-relative">
                        <input type="text" class="form-control is-valid" name="color" id="input1" value="{{$bicicletas->color}}">
                        <div class="valid-feedback feedback-icon"></div>
                        <input type="text" class="form-control is-valid" name="tipo" id="input2" value="{{$bicicletas->tipo}}">
                        <div class="valid-feedback feedback-icon"></div>
                        <input type="text" class="form-control is-valid" name="lactitud" id="input3" value="{{$bicicletas->lactitud}}">
                        <div class="valid-feedback feedback-icon"></div>
                        <input type="text" class="form-control is-valid" name="longitud" id="input4" value="{{$bicicletas->longitud}}">
                        <div class="valid-feedback feedback-icon"></div>
                    </div>
                    <!--<a class="btn btn-primary" href="/bicicletas/{{ $bicicletas->_id }}/update">Edit</a>-->
                    <input class="btn btn-primary text-center" type="submit" value="Actualizar">
                    <a class="btn btn-success" href="/show">Regresar</a>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>