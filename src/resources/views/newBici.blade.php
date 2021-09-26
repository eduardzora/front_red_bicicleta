<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Nueva Bicicleta</title>
</head>
<body>
<div class="container">
        <h2 class="text-center">Agregar nueva Bicicleta <i class="fas fa-bicycle"></i></h2>
        <div class="row">
            <div class="col-12">
                <form method="get" action="/bicicletasNew">
                    <div class="form-group position-relative">
                        <input type="text" class="form-control is-valid" name="ncolor" id="ninput1" value="" placeholder="Color">
                        <div class="valid-feedback feedback-icon"></div>
                        <input type="text" class="form-control is-valid" name="ntipo" id="ninput2" value="" placeholder="Tipo">
                        <div class="valid-feedback feedback-icon"></div>
                        <input type="text" class="form-control is-valid" name="nlactitud" id="ninput3" value="" placeholder="Lactitud">
                        <div class="valid-feedback feedback-icon"></div>
                        <input type="text" class="form-control is-valid" name="nlongitud" id="ninput4" value="" placeholder="Longitud">
                        <div class="valid-feedback feedback-icon"></div>
                    </div>
                    <input class="btn btn-primary text-center" type="submit" value="Crear">
                    <a class="btn btn-success" href="/show">Regresar</a>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>
</html>