
 <?php
    require("conexion.php");
   
    
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLA</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    
    <table  border="1">
        <tr>
            <td id="encabezado">Documento</td>
            <td id="encabezado">Nombre</td>
            <td id="encabezado">Basico</td>
            <td id="encabezado">Dias Trabajados</td>
            <td id="encabezado">Sueldo</td>
            <td id="encabezado">Aux Transporte</td>
            <td id="encabezado">Horas Diurnas</td>
            <td id="encabezado">Horas Nocturnas</td>
            <td id="encabezado">Horas F Diurnas</td>
            <td id="encabezado">Horas F Nocturnas</td>
            <td id="encabezado">Total Devengado</td>
            
        </tr>

         <?php
            // Se realiza the consult to the database 
            $consulta = "SELECT * FROM devengado";
            $resultado = mysqli_query($conexion,$consulta);

            while ($row = $resultado->fetch_array()) {
                $document = $row["documento"];
                $namer = $row["nombre"];
                $basic = $row["basico"];
                $dLaborados = $row["diasTrabajados"];
                $money = $row["sueldo"]; 
                    
                // auxilio
                $auxilioTrans = $row["AuxilioT"]; 
                // hours extras
                $hDiurna = $row["Num_diurna"]; 
                $hNocturna = $row["Num_nocturna"]; 
                $hFestivaDiurna = $row["Num_F_diurna"]; 
                $hFestivaNocturna = $row["Num_F_nocturna"]; 
                $totalDeveng = $row["toral_devengado"];            ?>
                    
            <tr> 
                <td id="table-boody"> <?php  echo $document ?> </td> 
                <td id="table-boody"> <?php echo $namer ?> </td> 
                <td id="table-boody"> <?php echo $basic ?> </td> 
                <td id="table-boody"> <?php echo $dLaborados ?> </td> 
                <td id="table-boody"> <?php echo $money ?>  </td>                                                             
                <td id="table-boody"> <?php echo $auxilioTrans ?>  </td> 
                <td id="table-boody"> <?php echo $hDiurna ?>  </td> 
                <td id="table-boody"> <?php echo $hNocturna ?>  </td> 
                <td id="table-boody"> <?php echo $hFestivaDiurna ?>  </td> 
                <td id="table-boody"> <?php echo $hFestivaNocturna ?>  </td> 
                <td id="table-boody"> <?php echo $totalDeveng ?>  </td> 
            </tr>
             
        <?php  } ?>
               
     </table>






 
























</body>
</html>
    



     



