<?php
$server = "localhost";
$userName = "root";
$pasword = "";
$database = "nomina";

$conexion = mysqli_connect("$server", "$userName", "$pasword","$database");

// if ($conexion == true) {
//     echo" Connnection successful";

// }else{
//     echo" Connnection successful";

// }

if (isset($_POST["submit"])) {

    $documento = $_POST["documento"];    
    $nombre = $_POST["nombre"];
    $basico = $_POST["basico"];
    $diasTrabajados = $_POST["diasTrabajados"];  
    $sueldo = $_POST["sueldo"]; 
    
    // Auxilio de Transporte

    $auxilio = $_POST["auxTransport"];

    // Horas extra

    $horaDiruna = $_POST["numeroHorasExtraD"];
    $horaNocturna = $_POST["numeroHorasExtraN"];
    $horaFd = $_POST["numeroHorasExtraFd"];
    $horaFn = $_POST["numeroHorasExtraFn"];

    // Total Devengado 

    $totalDevengado = $_POST["resultado"];

    // if auxilio of transport

    if ($auxilio == "NO" ) { 

        $auxilio = "NO";
    
        
    }else{

        $auxilio = "SI";

    }

    // if hours extras

    if (empty($horaDiruna)) {

        $horaDiruna = "NO";

    } 
    if (empty($horaNocturna)) {

        $horaNocturna = "NO"; 

    }

    if (empty($horaFd)) {
       
        $horaFd = "NO"; 

    }
    if (empty($horaFn)){

        $horaFn ="NO";

    }
    
    // insert info to the database

    $insertarDatos = "INSERT INTO `devengado`(`documento`, `nombre`, `basico`, `diasTrabajados`, `sueldo`, `AuxilioT`, `Num_diurna`, `Num_nocturna`, `Num_F_diurna`, `Num_F_nocturna`, `toral_devengado`)

    VALUES ('$documento','$nombre','$basico','$diasTrabajados','$sueldo','$auxilio','$horaDiruna','$horaNocturna','$horaFd','$horaFn','$totalDevengado')";  
    
    $conexion->query($insertarDatos);  


     





}





  




                    



?>