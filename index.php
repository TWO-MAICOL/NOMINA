
 <?php
    require("conexion.php");
   
    
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Nomina</title>
   
</head>
<body>
    

    <div class="container">  
 
        <div class="contenido-form"> 

            <form  action="index.php" method="POST">  
            
                <label > Documento </label> <input type="text" placeholder="Ingrese su documento" name="documento" id="documento" required >
                <label > Nombre </label><input type="text" placeholder="Ingrese su nombre" name="nombre" id="nombre" required>
                <label > Sueldo Basico  </label>  <input type="text" placeholder="salario basico" name="basico" id="basico" >
                <label > Dias trabajados </label> <input type="text" placeholder="Dias trabajados"  name="diasTrabajados" id="diasTrabajados" required>
                <label > Salario </label>  <input type="text" placeholder="Sueldo" name="sueldo" id="sueldo" readonly  >
                <label > Aux.Transporte </label>  <input type="text" placeholder="Aux Transporte" name="auxTransport" id="auxTransport" readonly  >
        </div>     

        <div class="container-horas-extras">  

                <label  > Horas Extras </label> 
                <label > Seleccione el tipo de hora</label>  
            
                   <select name="opciones" id="opciones">
                        <option value="0" disabled selected>Seleccione</option>
                        <option value="1">Diurnas</option>
                        <option value="2">Nocturnas</option>
                        <option value="3">Festivas diurnas</option>
                        <option value="4"> Festivas nocturnas</option>
                    </select>

                <input class=" ocultar ver" type="text" placeholder="Ingrese horas diurnas" name="numeroHorasExtraD" id="numeroHorasExtraD"  >
                <input class=" ocultar ver" type="text" placeholder="Ingrese horas nocturnas" name="numeroHorasExtraN" id="numeroHorasExtraN"  >
                <input class=" ocultar ver" type="text" placeholder="Ingrese horas festivas diurnas" name="numeroHorasExtraFd" id="numeroHorasExtraFd"  >
                <input class=" ocultar ver" type="text" placeholder="Ingrese horas festivas nocturnas" name="numeroHorasExtraFn" id="numeroHorasExtraFn"  >
                <label > Total Devengado </label>  <input type="text" placeholder="Resultado" name="resultado" id="resultado"  readonly>
       
        </div>


        <div class="container-buttons">   

                <!-- botton for send the form -->
                <input id="boton1" type="submit"  value="Enviar base de datos " name="submit">
                
                <!-- bottons for show  records and calculate the payment  of user  -->
                <input id="calcular" type="button" value="Calcular pago" >
                <input id="prueba" type="button" value="Mostrar registros"> 
                    
        </div>

               
            
        </form>

            
        
        
        
    
        

    </div>
    <div class="barra-final"> </div>



    
   <script src="pa.js"></script>
</body>
</html>