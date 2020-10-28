<?php
session_start();

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <title>Nuevo Curso</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<?php include 'header.php'; ?>

<body>
    <div style="margin-left: 20%; margin-right: 20%; margin-top:50px">
        <h1 style="text-align: center;">INSERTAR NUEVO HECHO</h1>
        <form>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Titulo</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="titulo" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Fecha </label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="fecha" required>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Descripcion</label>
                <textarea class="form-control" name="decripcion" rows="3" required></textarea>
            </div>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                    <label class="custom-file-label" for="inputGroupFile04">Elegir Archivo</label>
                </div>
            </div>
            <input type="text" class="form-control" id="duracionid" name="duracion" style="display: none;">
            <button type="submit" class="btn btn-primary mb-2" style="margin-left: 45%;">Publicar</button>
        </form>
    </div>
</body>

</html>

<script>
    function calcularDuracion() {
        var fechaini = new Date(document.getElementById('FInicio').value);
        var fechafin = new Date(document.getElementById('FFin').value);
        var diasdif = fechafin.getTime() - fechaini.getTime();
        var contdias = Math.round(diasdif / (1000 * 60 * 60 * 24));

        document.getElementById('duracionid').value = contdias;
    }
</script>