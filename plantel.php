<?php
include "include/Conexion.php";
include "include/Acciones_P.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro_plantel</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container m-0 context-justify-center py-2">
        <div class="row text-center">
        <h1 class="text-success">plantel</h1>
        </div>
    <form id="registro" action="<?php echo $_SERVER['php_SELF']; ?>" Method="POST">
    <div class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <input type="text" name="Nombre_P" class="form_control" placeholder="plantel" requered>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <input type="text" name="clave" class="form_control" placeholder="clave del plantel" requered>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <textarea name="Direccion_P" class="form_control" placeholder="Direccion del plantel" requered> </textarea>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <input type="tel" name="Telefono_P" class="form_control" placeholder="55-55-55-55-55" requered>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <input type="text" name="responsable" class="form_control" placeholder="Responsable" requered>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <input type="submit" value="Registrar" name="btn" class="btn btn-success"  requered>
        </div>
    </div>
    <div  class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
        <a href="navbar.php"   class="link">Regresar</a>
        </div>

    </div>
    
</form>
 </div>
</body>
</html>