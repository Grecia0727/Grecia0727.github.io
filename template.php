<!doctype html>
<html lang="en">
<head>
    <title>Empleados</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand navbar-light bg-light">
    <div class="nav navbar-nav">
        <a class="nav-item nav-link active" href="#">aplicacion <span class="visually-hidden">(current)</span></a>
        <a class="nav-item nav-link" href="?controlador=paginas&accion=inicio">inicio</a>
        <a class="nav-item nav-link" href="?controlador=empleados&accion=inicio">Empleados</a>
    </div>
</nav>


<div class="container">
    <div class="row">
        <div class="col-12">
            <?php include_once("ruteador.php"); ?>
        </div>
    </div>
</div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
    integrity="sha384-IQsoLXl5PILFhosVNubqE6xHPC6N92gkStzRpko5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
    integrity="sha384-cVKIPhG81r6SCp3y5l5ZLZb1z0O3Cw5vbh7F5dO6DL4sX1CkaZJEN5lPbsLG1zE4" crossorigin="anonymous"></script>
</body>
</html>