// alert("¡Vinculación exitosa!");

////////////////////////////////
//  VALIDACIONES FORMULARIO   //
// PARA LA COMPRA DE TICKETS: //
////////////////////////////////

// VARIABLES GLOBALES:

const nombre = document.getElementById("nombre");

const apellido = document.getElementById("apellido");

const email = document.getElementById("email");

const cantidad = document.getElementById("cantidad");

const categoria = document.getElementById("categoria");


const pMensajeNombre = document.getElementById("mensajeNombre");

const pMensajeApellido = document.getElementById("mensajeApellido");

const pMensajeEmail = document.getElementById("mensajeEmail");

const pMensajeCantidad = document.getElementById("mensajeCantidad");

const pMensajeCategoria = document.getElementById("mensajeCategoria");


const botonEnviar = document.getElementById("enviar");


const expRegular = /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,4})+$/;


// VALIDACIONES DE CAMPOS:

function validarNombre(){
    if (nombre.value.length < 3) {
        pMensajeNombre.innerHTML = "Ingrese un nombre válido";
    } else {
        pMensajeNombre.innerHTML = "¡Nombre correcto!";
    }
}

function validarApellido(){
    if (apellido.value.length < 3) {
        pMensajeApellido.innerHTML = "Ingrese un apellido válido";
    } else {
        pMensajeApellido.innerHTML = "¡Apellido correcto!";
    }
}

function validarEmail(){
    if(expRegular.test(email.value)) {
        pMensajeEmail.innerHTML = "¡Email correcto!";
    } else {
        pMensajeEmail.innerHTML = "El email no es válido";
    }
}

function validarCantidad(){
    if (cantidad.value == 0) {
        pMensajeCantidad.innerHTML = "Ingrese la cantidad";
    } else {
        pMensajeCantidad.innerHTML = "¡Cantidad correcta!";
    }
}

function validarCategoria(){
    if (categoria.value === "seleccione") {
        pMensajeCategoria.innerHTML = "Ingrese la categoría";
    } else {
        pMensajeCategoria.innerHTML = "¡Categoría correcta!";
    }
}


botonEnviar.addEventListener("click", validarNombre);

botonEnviar.addEventListener("click", validarApellido);

botonEnviar.addEventListener("click", validarEmail);

botonEnviar.addEventListener("click", validarCantidad);

botonEnviar.addEventListener("click", validarCategoria);


///////////////////////////////
// MOSTRAR EL TOTAL A PAGAR: //
/////////////////////////////// 

function validarResultado() {
    mensajePagar.innerHTML = "Total a Pagar: $ " + categoria.value * cantidad.value;
}

botonEnviar.addEventListener("click", validarResultado);

const mensajePagar = document.getElementById("mensajePagar");


// BOTÓN BORRAR:

const botonBorrar = document.getElementById("borrar");

function reset() {
    mensajePagar.innerHTML = "Total a Pagar: $";
}

botonBorrar.addEventListener("click", reset);


////////////////////////////////
//  VALIDACIONES FORMULARIO   //
//      PARA SER ORADOR:      //
////////////////////////////////

// VARIABLES GLOBALES:

const nombreOrador = document.getElementById("nombreOrador");

const apellidoOrador = document.getElementById("apellidoOrador");

const textoOrador = document.getElementById("floatingTextarea2");


// VALIDACIONES DE CAMPOS:

const pValidacionNombre = document.getElementById("validacionNombre");

const pValidacionApellido = document.getElementById("validacionApellido");

const pValidacionTexto = document.getElementById("validacionTexto");


const botonSubmit = document.getElementById("submit");
console.log(botonSubmit);


function validarNombreOrador(){
    if (nombreOrador.value.length < 3) {
        pValidacionNombre.innerHTML = "Ingrese un nombre válido";
    } else {
        pValidacionNombre.innerHTML = "¡Nombre correcto!";
    }
}

function validarApellidoOrador(){
    if (apellidoOrador.value.length < 3) {
        pValidacionApellido.innerHTML = "Ingrese un apellido válido";
    } else {
        pValidacionApellido.innerHTML = "¡Apellido correcto!";
    }
}

function validarTextoOrador(){
    if (textoOrador.value.length < 10) {
        pValidacionTexto.innerHTML = "Escriba su comentario";
    } else {
        pValidacionApellido.innerHTML = "¡El texto es correcto!";
    }
}


botonSubmit.addEventListener("click", validarNombreOrador);

botonSubmit.addEventListener("click", validarApellidoOrador);

botonSubmit.addEventListener("click", validarTextoOrador);


/////////////////////////////////
//     BOTONES APLICAR DTO     //
//  + ACTIVACIÓN DE CATEGORÍA  //
/////////////////////////////////

/*
const btnDtoEte = document.getElementById("aplicarEte");
const btnDtoTra = document.getElementById("aplicarTra");
const btnDtoJnr = document.getElementById("aplicarJnr");

function aplicar() {
    categoria.value.;
}
*/