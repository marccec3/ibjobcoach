<?php include 'listar.php'; ?>
<?php   
if(session_status()===PHP_SESSION_NONE){
    session_start();
}     
    if(!isset($_SESSION['usuario'])){
        header ('Location: login.php');
        session_destroy();
        //consulta usuario
    }
    $nombre_usuario1 = $_SESSION['usuario'];

    $sentencia3 = $connect->prepare("SELECT * FROM ibvirtuallicencias where correo = ?");
    $sentencia3->execute([$nombre_usuario1]);

    $persona3 = $sentencia3->fetch(PDO::FETCH_OBJ);

$conjunto = $persona->reclutadores;
$hi = "lleno";

if(empty($conjunto)) 
{
    $hi = "vacio";
    $b = $sentencia3->rowCount();
    $conjunto=$persona3->reclutadores;
    // $persona3['reclutadores']
}

$paginaActual=$_POST['pagina'];

if (empty($paginaActual)) 
	{
    	$paginaActual=1;
    }
    
$cantidadMostrar = 10;
$iniciar = ($paginaActual-1)* $cantidadMostrar;

$sql2 = "SELECT * FROM reclutadores";
$query2 = $connect->prepare($sql2);
$query2->execute();

                                                $query = $connect->prepare("SELECT * FROM reclutadores LIMIT $iniciar, $cantidadMostrar");
                                                $query->execute();
                                                $results = $query->fetchALL(PDO::FETCH_ASSOC);
                                                
$totalRespuestas=$query2->rowCount();

$nombrepagina="'Recluters.php'";
                                                                                                
$area="'#contenidoRecluters'";
                                                                                                
$anteriorpagina=$paginaActual-1;
                                                                                                
$siguientepagina=$paginaActual+1;
                                                                                                
$paginas = ceil($totalRespuestas/$cantidadMostrar);

                                                ?>
                                                <input type="hidden" class="hidden" value="25" id="recruiters-limit">
                                                <input type="hidden" class="hidden" value="214" id="recruiters-total">

                                                <?php 
                                                if ($query->rowCount() > 0) {
                                                    foreach ($results as $result) { ?>

                                                <div class="panel panel-default panel-recruiters">
                                                    <div class=" panel-heading <?php 
                                                        $variable = explode('|',$conjunto);
                                                        foreach ($variable as $var) {
                                                            echo ($var == $result['id'])?' checked-progress':'';
                                                        }
                                                    ?>" role="tab" id="heading-company-<?php echo $result['id']; ?>">
                                                        <h4 class="panel-title">
                                                            <div class="pull-right">


                                                                <span class="label label-default">
                                                                    <img src="./dna/img/bandeirinhas/peru.png" width="10px"> Perú
                                                                </span>


                                                            </div>
                                                            <div class="pull-left">
                                                                <form class="user_check" role="tablist">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="recruiter" id="<?php echo $result['id']; ?>" <?php 
                                                        $variable = explode('|',$conjunto);
                                                        foreach ($variable as $var) {
                                                            echo ($var == $result['id'])?'checked':'';
                                                        }
                                                    ?>>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <a role="button" data-toggle="collapse" data-parent="#recruiters-content" href="/#collapse-company-<?php echo $result['id']; ?>" aria-expanded="false" aria-controls="collapse-company-<?php echo $result['id']; ?>">
                                                                <span class="unicode-to-emoji"><?php echo $result['titulo']; ?></span>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse-company-<?php echo $result['id']; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-company-<?php echo $result['id']; ?>">
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-xs-2">


                                                                </div>
                                                                <div class="col-xs-5">
                                                                    <div>
                                                                        <i class="fas fa-fw fa-globe"></i>
                                                                        <strong>Site</strong>
                                                                    </div>
                                                                    <a href="<?php echo $result['sitio_empresa']; ?>" target="_blank"><?php echo $result['sitio_empresa']; ?></a>
                                                                </div>
                                                                <div class="col-xs-5">
                                                                    <div>
                                                                        <i class="fas fa-fw fa-phone"></i>
                                                                        <strong>Teléfono</strong>
                                                                    </div>
                                                                    <a href="tel:<?php echo $result['telefono_empresa']; ?>"><?php echo $result['telefono_empresa']; ?></a>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                <?php 
                                                                $var=$result['id']; 
                                                                $query1 = $connect->prepare("SELECT * FROM detalle_reclutadores where id_reclutador=$var");
                                                                $query1->execute();
                                                                $results1 = $query1->fetchALL(PDO::FETCH_ASSOC);
                                                                if ($query1->rowCount() > 0) {
                                                                    $hola = $query1->rowCount(); 
                                                                ?>
                                                                    <table class="table table-striped table-bordered" style="margin-top: 1em;">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Nombre </th>
                                                                                <th>Teléfono </th>
                                                                                <th>Celular </th>
                                                                                <th> Correo </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <?php foreach ($results1 as $result1) { ?>
                                                                            <tr>
                                                                                <td><?php echo $result1['nombre_completo']; ?></td>
                                                                                <td><a href="tel:<?php echo $result1['telefono']; ?>"><?php echo $result1['telefono']; ?></a></td>
                                                                                <td><a href="cel:<?php echo $result1['celular']; ?>"><?php echo $result1['celular']; ?></a></td>
                                                                                <td><a href="mailto:<?php echo $result1['correo']; ?>"><?php echo $result1['correo']; ?></a></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                    <?php }else{ ?>
                                                                        <div class="alert alert-info" style="margin-top: 1em;">
                                                                            Todavía no hay headhunters registrados en esta empresa.
                                                                        </div>
                                                                        <?php } ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                                    }
                                                }
                                            ?>

<nav style="display:flex; justify-content: center;"><ul class="pagination pagination-md">
 <?php if($paginaActual>1){ ?>
    <li class="page-item"><a class="page-link" href="javascript:paginacion(<?php echo $anteriorpagina ?>,<?php echo $nombrepagina?>,<?php echo $area?>);">Anterior</a></li>
  <?php }
    for($i=0; $i<$paginas; $i++){
        $resultado=$i+1;
        if($resultado==$paginaActual){ ?>
        <li class="page-item active"><a class="page-link" href="javascript:paginacion(<?php echo $resultado ?>,<?php echo $nombrepagina?>,<?php echo $area?>);"><?php echo $resultado ?></a></li>
<?php 
     }else{ ?>
        <li class="page-item"><a class="page-link" href="javascript:paginacion(<?php echo $resultado ?>,<?php echo $nombrepagina?>,<?php echo $area?>);"><?php echo $resultado ?></a></li>
<?php }}
 if($paginaActual<$paginas){ ?>
    <li class="page-item"><a class="page-link" href="javascript:paginacion(<?php echo $siguientepagina ?>,<?php echo $nombrepagina?>,<?php echo $area?>);">Siguiente</a></li>
 <?php }  ?>
 </ul></nav>

<script type="text/javascript">
  $("form.user_check").off();
	$("form.user_check").on("change", "input:checkbox", function() {
		var $this = $(this);
		var item_id = $this.attr("id");
		var area = $this.attr("value");
		var from_panel = $this.parents(".panel-heading")[0];
	
		var highlightLink = $("[data-area='" + area + "'][data-id='" + item_id + "'] ");
		var highlight = highlightLink.closest(".highlight-item");
		if(highlight.length) {
			if(!highlight.hasClass("clicked")) {
				highlight.addClass('clicked');
				$.post("../checkProgress/check", {"item_id":item_id, "area":area})
				.always(function() {
					$('#' + area + '-load').hide();
					unblockUI();
				});;
				fillCircle();
			}
		} else {
			$.post("../checkProgress/check", {"item_id":item_id, "area":area})
			.always(function() {
				$('#' + area + '-load').hide();
				unblockUI();
			});;
        }
        if(this.checked == true){
            from_panel.classList.add('checked-progress');
            
            if(area == "recruiter"){
				$.ajax({
				type: "POST",
				url: "reclutadores.php",
				data: {rc:item_id, tip:'addr'},
				
				success: function (response) {
					//alert(response);
				}
				});
            }
            var dado_from_banner = $(".num-dados-novos.margin-dados."+area);
            if(dado_from_banner.length > 0) dado_from_banner.text(parseInt(dado_from_banner.text())+1);
        }
		else {
			if(highlight.length){
				this.checked = true;
				
				var dado_from_banner = $(".num-dados-novos.margin-dados."+area);
				if(dado_from_banner.length) dado_from_banner.text(parseInt(dado_from_banner.text())+1);
			}
			else {
                from_panel.classList.remove('checked-progress');
                if(area == "recruiter"){
				$.ajax({
				type: "POST",
				url: "reclutadores.php",
				data: {rc:item_id, tip:'remover'},
				
				success: function (response) {
					//alert(response);
				}
				});
                }
                var dado_from_banner = $(".num-dados-novos.margin-dados."+area);
				if(dado_from_banner.length) dado_from_banner.text(parseInt(dado_from_banner.text())-1);
			}
		}
	});
</script>
