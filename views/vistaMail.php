

    <form action="MailPagoPendiente.controlador1.php" method="post" target='_self' enctype="multipart/form-data" class="needs-validation" novalidate>        
      <div class="modal-body row">
        <div class="container px-md-4 mx-md-5">
        <h5>Cuentas Interbancarias: </h5>
        <h5 class="text-center">7878-7878-7878-78</h5>
          <div class="form-group">
            <label class="control-label" for="">Alumno</label>
            <input type="text" class="form-control" name="alumno" required>
          </div>
          <div class="form-group">
            <label class="control-label" for="">Código de alumno</label>
            <input type="text"class="form-control" name="codigo_alu"  required>
          </div>
          <div class="form-group">
            <label class="control-label" for="">Grado y sección</label>
            <input type="text" class="form-control" name="grado_seccion">
          </div>
          <div class="form-group">
            <label class="control-label" for="">Notas</label></br>
            <textarea  class="form-control" type="text" rows="5" name="notas"></textarea></br>
          </div>
          
          
          <div class="form-group">
          <label class="control-label"for="">Suba la foto de su voucher:</label>
          <div class="form-group">
            <button class="btn btn-primary" type="button" onclick="abrir('files')">Escoger archivos</button>
            <input onchange="addFiles(event,'glosaArchivos')" type="file" class=" d-none"  name='archivo1[]' multiple id="files">

            <span id="glosaArchivos">Ningun archivo seleccionado</span><i style="font-size:14px;"class="fas fa-images ml-2"></i>
            <ul class="text-center mt-2"  id = "listaArchivos" style="list-style:none;"></ul>
          </div>
          </div>
          
           
            
          </div>
        </div>
        
      </div>
     
      <div class="modal-footer d-flex justify-content-center">
          <button type="submit" class="btn btn-primary" >Enviar</button>
          <?php
        
            
          ?>
      </div>
      
    </form> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
    
    function abrir(id) {
    var file = document.getElementById(id);
    file.dispatchEvent(new MouseEvent('click', {
        view: window,
        bubbles: true,
        cancelable: true
    }));
  }
  /*
  function contar(elem, idGlosa) {
    var glosa = document.getElementById(idGlosa);
    glosa.innerText = "0 imágenes";
  
    if(elem.files.length == 0) {
        glosa.innerText = "0 imágenes";
    } else {
        glosa.innerText = elem.files.length + "";
    }
  }
  */

 let fileArray = [];
 let listaArchivos = $("#listaArchivos")[0];
 
  function clearFile(ev,idGlosa){
    const parent = ev.currentTarget.parentElement;

    const index = parseInt(parent.id.split("_")[1]);
    fileArray.splice(index, 1);

    listaArchivos.removeChild(parent);

    var glosa = document.getElementById(idGlosa);
    glosa.innerText = fileArray.length+"";
/*
    if(fileArray.length == 0){
        $("#files").val('');
    }
*/
}
function addFiles(ev, idGlosa){

    const fileList = ev.currentTarget.files;
    
    for(let file of fileList){
        fileArray.push(file);

        const newFile = document.createElement("li");
        const text = document.createTextNode(file.name);
        
        newFile.id = `file_${fileArray.length - 1}`;
        newFile.appendChild(text);

        const clearBtn = document.createElement("input");
        clearBtn.style.marginLeft = "20px";
        clearBtn.style.width = "20px";
        clearBtn.type = "button";
        clearBtn.value = "x";
        clearBtn.onclick = ev => clearFile(ev,idGlosa);

        newFile.appendChild(clearBtn);
        listaArchivos.appendChild(newFile);
    }
    var glosa = document.getElementById(idGlosa);
        glosa.innerText = fileArray.length+"";
        console.log("blablablabla");
}</script>
 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
<script src="https://checkout.culqi.com/js/v3"></script>
    <script src="vista/js/popper.min.js"></script>
    <script src="vista/js/bootstrap.min.js"></script>
    <script src="vista/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="vista/js/plugins/pace.min.js"></script>
    <script src="vista/js/plugins/bootstrap-notify.min.js"></script>

