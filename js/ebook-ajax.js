
//Input del Formulario de Ebook
const formulario = document.querySelector("#ebookform-paypal");
const nombre = document.querySelector("#nombre");
const apellido = document.querySelector("#apellido");
const tipo = document.querySelector("#tipo");
const carnet = document.querySelector("#carnet");
const pais = document.querySelector("#pais");
const departamento = document.querySelector("#departamento");
const provincia = document.querySelector("#provincia");
const distrito = document.querySelector("#distrito");
const direccion = document.querySelector("#direccion");
const email = document.querySelector("#email");
const politicas = document.querySelector("#politicas");
const file = document.querySelector("#file");
const ebook = document.querySelector("#ebook");


class UI{
    alertaEbook(mensaje, color){

        const alert = document.createElement('div');

        alert.classList.add("alert","mb-2","text-white");

        alert.innerText = mensaje;

        if (color === 'danger') {
            
            alert.classList.add("bg-danger");

        }else{

            alert.classList.add("bg-warning")

        }

        document.querySelector("#contenedor").insertBefore(alert, formulario);

        setTimeout(() => {
            alert.remove();
        }, 3000);

    }
}

const ui = new UI();

document.addEventListener("DOMContentLoaded", function() {
//Formulatio de Ebook
    const formulario = document.getElementById("ebookform-paypal");
    
    formulario.addEventListener("submit", function (e) { 
        e.preventDefault();

        if (nombre.value === '' || apellido.value === '' || tipo.value === '' || carnet.value === '' || email.value === '' || departamento.value === '' || provincia.value === ''.value === '' || distrito.value === '' || direccion.value === '' || file.value === '' || ebook.value === '') {
            ui.alertaEbook("Hay Campos Vacios","danger");
            return; 
        }

        if (!politicas.checked) {
            ui.alertaEbook("Acepte las Politicas de Privacidad","danger");
            return; 
        }

        const ComprobarCarnet = carnet.value;

        if (tipo.value === 'Ruc') {
            if (ComprobarCarnet.length > 11 || ComprobarCarnet.length < 11 ) {
                ui.alertaEbook("El ruc debe tener solo 11 digitos","danger");
                return; 
            }
        }else if (tipo.value === 'Carnet Extranjeria') {
            if (ComprobarCarnet.length > 8 || ComprobarCarnet.length < 8 ) {
                ui.alertaEbook("El Carnet Extranjeria debe tener solo 8 digitos","danger");
                return; 
            }
        }else if (tipo.value === 'Dni') {
            if (ComprobarCarnet.length > 8 || ComprobarCarnet.length < 8 ) {
                ui.alertaEbook("El Dni debe tener solo 8 digitos","danger");
                return; 
            }
        }

        if (isNaN(ComprobarCarnet)) {
            ui.alertaEbook("El Carnet debe ser solo numeros");
            return; 
        }
        
        const emailProvar = email.value;
        const comprobar = emailProvar.split('@');
        if (comprobar[1] === 'outlook.com' || comprobar[1] === 'hotmail.com' || comprobar[1] === 'hotmail.es' || comprobar[1] === 'outlook.com') {
            ui.alertaEbook("Solo se permite por ahora correo de gmail y yahoo","danger");
            return; 
        }

        mandarFormularioCorreoPrincipal(this);
        mandarCorreoFormulario(this);

    });

})


MediaStreamAudioDestinationNode

function mandarFormularioCorreoPrincipal(formulario) { 

    let http = new XMLHttpRequest()

    http.open("POST","enviarcorreo-ebook.php");

    http.onload = function() { 

        if(this.readyState == 4 && this.status == 200){

            return true;

        }

    }

    http.send(new FormData(formulario))

}

function mandarCorreoFormulario(formulario) { 

    let http = new XMLHttpRequest()

    http.open("POST","enviarcorreo-ibook-dos.php");

    http.onreadystatechange = function() { 

        if(this.readyState == 4 && this.status == 200){

            if(this.responseText == 'Mensaje enviado'){
                Swal.fire({
                    icon: 'success',
                    title: 'Correcto',
                    text: 'Se Registro correctamente sus datos, porfavor revise su correo'
                })
                formulario.reset();
            }

        }

    }

    http.send(new FormData(formulario))

}


// setInterval(() => {
//    
// }, 120000);