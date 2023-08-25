<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIBRO</title>
    <link rel="stylesheet" href="buscador.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="tabla.css">
    
</head>
<body>
        <!--buscador de la pagina-->
        <div class="buscad">
        <input type="text" placeholder="buscar">
        <div class="btn">
            <i class="fa fa-search"></i>
        </div>
    </div>

    <?php
        include("conex_prest.php");
        $prestamo = "SELECT * FROM prestamo";
    ?>
    <div class="tabla_general">

        <div class="subtitulos">ID</div>
        <div class="subtitulos">TITULO</div>
        <div class="subtitulos">AUTOR</div>
        <div class="subtitulos">DESCRIPCION</div>
        <div class="subtitulos">ESTADO</div>
        <div class="subtitulos">FECHA</div>
        <div class="subtitulos">DNI ESTUDIANTE</div>
        <div class="subtitulos">NOMBRE DEL ESTUDIANTE</div>
        <div class="subtitulos"><a href="prest_nuev.html"> <button type="button" class="a1">nuevo</button> </a></div>
        <?php  $result = mysqli_query($conex1, $prestamo);
        while($row=mysqli_fetch_assoc($result)) {?>
        <div class="informacion"><?php  echo $row["id_prest"];?></div>
        <div class="informacion"><?php  echo $row["titulo1"];?></div>
        <div class="informacion"><?php  echo $row["autor1"];?></div>
        <div class="informacion"><?php  echo $row["descripcion1"];?></div>
        <div class="informacion"><?php  echo $row["estado"];?></div>
        <div class="informacion"><?php  echo $row["fecha"];?></div>
        <div class="informacion"><?php  echo $row["dni_est"];?></div>
        <div class="informacion"><?php  echo $row["nombre"];?></div>
        <div class="informacion"><a href="eliminacion.php?id=<?php echo $row["id_prest"]; ?>"><button type="button" class="a2 ">eliminar</button> </a></div>
        <?php } ?>
    </div>
</body>
</html>
