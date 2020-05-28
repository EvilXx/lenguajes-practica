
//Función que se ejecuta cuando hacemos click en el botón Ingresar.
function ingresarDinero(){
    //Mostramos CampoIngreso, BotónConfirmarIngreso y BotónVolverPantallaOperar.
    document.getElementById("CampoIngreso").style.display="block";
    document.getElementById("BotonConfirmarIngreso").style.display="block";
    document.getElementById("BotonVolverPantallaOperar").style.display="block";
    //Ocultamos BotonIngresar.
    document.getElementById("BotonIngresar").style.display="none";
    //Ocultamos botones Retirar y Consultar.
    document.getElementById("BotonRetirar").style.display="none";
    document.getElementById("BotonConsultar").style.display="none";

}


//Función que se ejecuta cuando hacemos click en el botón Retirar.
function retirarDinero(){
    //Mostramos CampoRetirada, BotónConfirmarRetirada y BotónVolverPantallaOperar.
    document.getElementById("CampoRetirada").style.display="block";
    document.getElementById("BotonConfirmarRetirada").style.display="block";
    document.getElementById("BotonVolverPantallaOperar").style.display="block";
    //Ocultamos BotonRetirar.
    document.getElementById("BotonRetirar").style.display="none";
    //Ocultamos botones Ingresar y Consultar.
    document.getElementById("BotonIngresar").style.display="none";
    document.getElementById("BotonConsultar").style.display="none";

}
