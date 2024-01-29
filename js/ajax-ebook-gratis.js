//Input del Formulario de Ebook
const formulario = document.querySelector("#ebookform-grats");
const nombre = document.querySelector("#nombre");
const apellido = document.querySelector("#apellido");
const cargo = document.querySelector("#cargo");
const email = document.querySelector("#email");
const paises = document.querySelector("#try-pais");
const telefono = document.querySelector("#phone");

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
        const formularios = document.getElementById("ebookform-grats");
        
        formularios.addEventListener("submit", function (e) { 
            e.preventDefault();
    
            if (nombre.value === '' || apellido.value === '' || cargo.value === '' || email.value === '' || paises.value === '') {
                
                ui.alertaEbook("Hay Campos Vacios","danger");
                return;
            } 
            mandarFormularioCorreoPrincipal(this);
            mandarCorreoFormulario(this);
        });
    
    })

    function mandarFormularioCorreoPrincipal(formulario) { 

        let http = new XMLHttpRequest()
    
        http.open("POST","enviarcorreo-ebook-gratis.php");
    
        http.onload = function() { 
    
            if(this.readyState == 4 && this.status == 200){
    
                return true;
    
            }
    
        }
    
        http.send(new FormData(formulario))
    
    }
    
    function mandarCorreoFormulario(formulario) { 
    
        let http = new XMLHttpRequest()
    
        http.open("POST","enviarcorreo-ibook-dos-gratis.php");
    
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
    