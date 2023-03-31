<?php 
include "include/Conexion.php";
include "include/query.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Tabla Dinamica</title>
</head>
<body>
    

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id_lugar</th>
      <th scope="col">NombreL</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Telefono</th>
      <td scope="col">Email</td>
      <td scope="col">Facebook</td>
      <td scope="col">Horario</td>
    </tr>
  </thead>
  <tbody>
  <?php while ($rowtabla = $ejecuta->fetch_assoc());{?>
    <tr>
    <th <?php echo $rowtabla['n_lugar']; ?>></th>
    <th <?php echo $rowtabla['descripcion']; ?>></th>
    <th <?php echo $rowtabla['telefono']; ?>></th>
    <th <?php echo $rowtabla['email']; ?>></th>
    <th <?php echo $rowtabla['facebook']; ?>></th>
    <th <?php echo $rowtabla['horario']; ?>></th>
    </tr>
    <?php } ?>
  </tbody>
</table>


<script scr="js/bootstrap.min.js"></script>
</body>
</html>
