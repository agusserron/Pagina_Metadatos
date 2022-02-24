//alert("Hola mundo\nEsta es otra línea");



/* PEDIR DATOS 
var valor = prompt("Dime la contraseña", "");
if( valor == "33PPXX" )
{
    alert("La contraseña es correcta");
}
else
{
    alert("Contraseña no válida: [" + valor + "]");
}
*/

// VALIDAR QUE SE INGRESAN TODOS LOS DATOS NECESARIOS EN EL FORMULARIO 
function validar()
             {
                 var ok = true;
 
                 if(document.getElementById("titulo").value == "")
                 {
                     alert("Introduzca todos los datos");
                     ok = false;
                 }
 
               
}

var titulo, id, descripcion, proposito;


function obtenerDatos(){
 titulo = document.getElementById("titulo").value;
 id = document.getElementById("id").value;
 descripcion = document.getElementById("descripcion").value;
 proposito = document.getElementById("proposito").value;


    var r = [titulo, id, descripcion, proposito];
    return r;
}
/* CONFIRMAR DATOS 
var ok = confirm("¿Enviar los datos?");
if( ok == true )
{
    ...
}
else
{
    ...
}
*/
