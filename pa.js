
//  redireccionar a la pagina de la tabla 
function redireccionar() {
    location.href = "tabla.php";
   
}

// nomina
function nomina() {
    // cal salay basic
    var salarioBasico = document.getElementById("basico").value;
    var diasTrabajados = document.getElementById("diasTrabajados").value;
    var salario = parseFloat((salarioBasico/30)* diasTrabajados);
    document.getElementById("sueldo").value=salario.toFixed(2);
   
    // Auxilio de transporte    
    const auxilio =(117172/30);

    if (salarioBasico < 2000000) {   
        // si tiene derecho
        pagoAuxilio = parseFloat(diasTrabajados* auxilio);
        document.getElementById("auxTransport").value="Si";

    } else{
        // no tiene derecho
        pagoAuxilio = 0;
        document.getElementById("auxTransport").value="NO";
      
    }

     if (salarioBasico ==""){
        document.getElementById("auxTransport").value="  ";
        
    }

// horas extras  
const valorHora = salarioBasico/240;

    // hora diurna
    const valorHoraDiurna = 1.25;
    
    var numerod = document.getElementById("numeroHorasExtraD").value;
    var pagoHoraDiruna = parseFloat(numerod * valorHora * valorHoraDiurna);
    
    // validar si esta vacio el campo
    if (numerod == "") {
        
        pagoHoraDiruna = 0; 
        
    } else{
        alert("El valor de las horas diurnas trabajados son: "+ " " + pagoHoraDiruna);
        
    }

    
    // hora nocturna
    const valorHoraNocturna = 1.75;

    var numeron = document.getElementById("numeroHorasExtraN").value;
    var pagoHoraNoc = parseFloat(numeron * valorHora * valorHoraNocturna);
    
    
   // validar si esta vacio el campo
    if (numeron == "") { 
        
        pagoHoraNoc = 0; 
        
    } else{
      alert("El valor de las horas norturnas trabajados son: "+ " " + pagoHoraNoc);
      
        
    }


    // hora festiva diurna
    const valorHoraFdiur = 2;

    var numerFd = document.getElementById("numeroHorasExtraFd").value;
    var pagoHoraFdiur = parseFloat(numerFd * valorHora * valorHoraFdiur);
   
   
    // validar si esta vacio el campo
    if (numerFd == "") {
        
        pagoHoraFdiur = 0; 
        
    } else{
        alert("El valor de las horas festivas diurnas trabajados son: "+ " " + pagoHoraFdiur);
        
    }


    // hora festiva nocturna
    const valorHoraFnoc = 2.5;

    var numerFn = document.getElementById("numeroHorasExtraFn").value;
    var pagoHoraFnoc = parseFloat(numerFn * valorHora * valorHoraFnoc);
    // alert("El valor de las horas trabajados son:"+ " " + pagoHoraFnoc);  
    
    // validar si esta vacio el campo
    if (numerFn == "") {
        
        pagoHoraFnoc = 0; 
        
    } else{
        alert("El valor de las horas festivas nocturnas trabajados son: "+ " " + pagoHoraFnoc);
        
    }

    salarioFinal = salarioFinal + pagoAuxilio + salario + pagoHoraDiruna + pagoHoraNoc + pagoHoraFdiur + pagoHoraFnoc;
    document.getElementById("resultado").value = salarioFinal.toFixed(2);
    
} 

// know option select for the usser
function opcionMarcada() {  
    var opcionSelect = opcion.options[opcion.selectedIndex];
    console.log(opcionSelect.text);
    var opcValor = opcionSelect.value;

    // 1 Diurna
    // 2 Nocturna
    // 3 Festiva diurna
    // 4 Festiva Nocturna 
    
    // agarar los respectivos inputs 
    if (opcValor == 1 ) {
        
        var numeroHd = document.querySelector("#numeroHorasExtraD");
        numeroHd.classList.toggle("ocultar");

    } else if (opcValor == 2) {
      
        var numeroHd = document.querySelector("#numeroHorasExtraN");
        numeroHd.classList.toggle("ocultar");
  
    }else if (opcValor == 3) {
        var numeroHfd = document.querySelector("#numeroHorasExtraFd");
        numeroHfd.classList.toggle("ocultar");

    }else{
        var numeroHfn = document.querySelector("#numeroHorasExtraFn");
        numeroHfn.classList.toggle("ocultar");

    }

}


// acumulador para calcular el pago del trabajador
var salarioFinal = 0;

 
// Evento mandar a la tabla base de datos
var boton = document.getElementById("prueba");
boton.addEventListener("click",redireccionar);


// Evento calcular basico
var calcular = document.getElementById("calcular");
calcular.addEventListener("click",nomina);

// Event for know the option select for the usser 
var opcion = document.querySelector("#opciones");
opcion.addEventListener("change",opcionMarcada);


