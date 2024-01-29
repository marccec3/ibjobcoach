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

$conjunto = $persona->jobs;
$hi = "lleno";

if(empty($conjunto)) 
{
    $hi = "vacio";
    $conjunto=$persona3->jobs;
    //$persona3['jobs']
}

$paginaActual=$_POST['pagina'];
$busqueda = $_POST['busqueda'];
$accion = $_POST['accion'];

if (empty($paginaActual)) 
	{
    	$paginaActual=1;
    }
    
$cantidadMostrar = 10;
$iniciar = ($paginaActual-1)* $cantidadMostrar;


if(empty($accion)){

$consulta1 = $connect->prepare("SELECT * FROM trabajo");
$consulta1->execute();

?>                                                               
                                                                <input type="hidden" class="hidden" value="10" id="jobs-limit">
                                                                <input type="hidden" class="hidden" value="76" id="jobs-total">
                                            

                                                                <!---->
                                                                <?php
                                                                    $consulta = $connect->prepare("SELECT * FROM trabajo LIMIT $iniciar, $cantidadMostrar");
                                                                    $consulta->execute();
                                                                    $trabajos =$consulta->fetchALL(PDO::FETCH_ASSOC);

$totalRespuestas=$consulta1->rowCount();

$nombrepagina="'job.php'";
                                                                                                                    
$area="'#jobs-content'";
                                                                                                                    
$anteriorpagina=$paginaActual-1;
                                                                                                                    
$siguientepagina=$paginaActual+1;
                                                                                                                    
$paginas = ceil($totalRespuestas/$cantidadMostrar);

                                                                ?>

                                                                <?php
                                                                foreach ($trabajos as $trabajo) {
                                                                    $pais = strtolower($trabajo['pais']);
                                                                    if($pais === 'perú')
                                                                    {
                                                                        $pais= 'peru';
                                                                    }
                                                                    ?>
                                                                    <div class="panel panel-default panel-job pan-areas">
                                                                    <div class="panel-heading <?php 
                                                                            $variable = explode('|',$conjunto);
                                                                            foreach ($variable as $var) {
                                                                                if($var == "250".$trabajo['idtrabajo'])
                                                                                {
                                                                                    echo "checked-progress";
                                                                                }else "";
                                                                            }
                                                                        ?>" role="tab" id="heading-jobs-250<?php echo $trabajo['idtrabajo']; ?>">
                                                                        <div class="pull-left">
                                                                            <form class="user_check" role="tablist">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" value="job" id="250<?php echo $trabajo['idtrabajo'];?>" <?php 
                                                                            $variable = explode('|',$conjunto);
                                                                            foreach ($variable as $var) {
                                                                                echo ($var == '250'.$trabajo['idtrabajo'])?'checked':'';
                                                                            }
                                                                        ?>>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        <h4 class="panel-title">
                                                                            <a role="button" data-toggle="collapse" data-parent="#jobs-content" href="/#collapse-jobs-25<?php echo $trabajo['idtrabajo']; ?>" aria-expanded="false" aria-controls="collapse-jobs-250850">
                                                                                <?php 
                                                                                    echo $trabajo['empresa'] .": ". $trabajo['nombre_puesto'];
                                                                                ?>
                                                                            </a>
                                                                            <span class="label label-default pull-right">
                                                                                <img src="./dna/img/bandeirinhas/<?php echo $pais; ?>.png" width="10px">
                                                                                <?php echo $pais; ?></span> </h4>
                                                                    </div>
                                                                    <div id="collapse-jobs-25<?php echo $trabajo['idtrabajo']; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-jobs-250<?php echo $trabajo['idtrabajo']; ?>">
                                                                        <div class="panel-body">
                                                                            <div class="row">
                                                                                <div class="col-md-8">
                                                                                    <b>Descripción: </b>
                                                                                    <p>
                                                                                        <?php 
                                                                                        echo $trabajo['descripcion'];
                                                                                        ?>
                                                                                    </p>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <ul class="list-group">
                                                                                        <li class="list-group-item">
                                                                                            <strong>
                                                                                                Publicado en:
                                                                                                <br></strong> 28/05/2020
                                                                                        </li>
                                                                                        <li class="list-group-item">
                                                                                            <strong>
                                                                                                Expira en: <br></strong>
                                                                                            No informado </li>
                                                                                    </ul>

                                                                                    <div class="btn-group-vertical block" role="group" aria-label="Job Actions">


                                                                                        <a href="<?php echo $trabajo['link']; ?>" class="btn btn-primary" target="_blank">
                                                                                            Sepa Más <i class="fas fa-external-link"></i>
                                                                                        </a>



                                                                                        <button type="button" class="btn btn-primary" data-toggle="job-test-user" disabled="">
                                                                                            Contacto <i class="fas fa-envelope"></i>
                                                                                        </button>


                                                                                    </div>


                                                                                    <ul class="list-group">
                                                                                        <li class="list-group-item " id="job-alerting-250<?php echo $trabajo['idtrabajo']; ?>">
                                                                                            La oferta de trabajo <b>no
                                                                                                está vigente</b> o ya
                                                                                            <b>expiró</b>? Avísanos <a href="javascript:void(0);" onclick="expireJob(250<?php echo $trabajo['idtrabajo']; ?>);">
                                                                                                acá</a>.
                                                                                        </li>
                                                                                        <li class="list-group-item hide" id="job-expired-250<?php echo $trabajo['idtrabajo']; ?>">
                                                                                            Gracias, su aviso ya fue
                                                                                            enviado a los
                                                                                            administradores. </li>
                                                                                        <li class="list-group-item hide" id="job-sending-250<?php echo $trabajo['idtrabajo']; ?>">
                                                                                            <img src="admin/img/loading-spinner-grey.gif">
                                                                                            <spam>Enviando</spam>
                                                                                        </li>
                                                                                    </ul>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <?php
                                                                }
                                                                ?>

<nav style="display:flex; justify-content: center;"><ul class="pagination pagination-md">
 <?php if($paginaActual>1){ ?>
    <li class="page-item"><a class="page-link" href="javascript:paginacion(<?php echo $anteriorpagina ?>,<?php echo $nombrepagina?>,<?php echo $area?>);" onclick="apllyCheckEvents();">Anterior</a></li>
  <?php }
    for($i=0; $i<$paginas; $i++){
        $resultado=$i+1;
        if($resultado==$paginaActual){ ?>
        <li class="page-item active"><a class="page-link" href="javascript:paginacion(<?php echo $resultado ?>,<?php echo $nombrepagina?>,<?php echo $area?>);" onclick="apllyCheckEvents();"><?php echo $resultado ?></a></li>
<?php 
     }else{ ?>
        <li class="page-item"><a class="page-link" href="javascript:paginacion(<?php echo $resultado ?>,<?php echo $nombrepagina?>,<?php echo $area?>);" onclick="apllyCheckEvents();"><?php echo $resultado ?></a></li>
<?php }}
 if($paginaActual<$paginas){ ?>
    <li class="page-item"><a class="page-link" href="javascript:paginacion(<?php echo $siguientepagina ?>,<?php echo $nombrepagina?>,<?php echo $area?>);" onclick="apllyCheckEvents();">Siguiente</a></li>
 <?php }  ?>
 </ul></nav>
 <?php }  else{ 

$consulta1 = $connect->prepare("SELECT * FROM trabajo WHERE nombre_puesto LIKE '%".$busqueda."%' OR empresa LIKE '%".$busqueda."%' OR area LIKE '%".$busqueda."%' OR descripcion LIKE '%".$busqueda."%' OR pais LIKE '%".$busqueda."%'");
$consulta1->execute();
?>

                                                <input type="hidden" class="hidden" value="10" id="jobs-limit">
                                                <input type="hidden" class="hidden" value="76" id="jobs-total">
 <?php


                                                $consulta = $connect->prepare("SELECT * FROM trabajo WHERE nombre_puesto LIKE '%".$busqueda."%' OR empresa LIKE '%".$busqueda."%' OR area LIKE '%".$busqueda."%' OR descripcion LIKE '%".$busqueda."%' OR pais LIKE '%".$busqueda."%' LIMIT $iniciar, $cantidadMostrar");
                                                $consulta->execute();
                                                $trabajos =$consulta->fetchALL(PDO::FETCH_ASSOC);

$totalRespuestas=$consulta1->rowCount();

$nombrepagina="'job.php'";
                                                                                                                    
$area="'#jobs-content'";
                                                                                                                    
$anteriorpagina=$paginaActual-1;
                                                                                                                    
$siguientepagina=$paginaActual+1;
                                                                                                                    
$paginas = ceil($totalRespuestas/$cantidadMostrar);

                                                                ?>

                                                                <?php
                                                                foreach ($trabajos as $trabajo) {
                                                                    $pais = strtolower($trabajo['pais']);
                                                                    if($pais === 'perú')
                                                                    {
                                                                        $pais= 'peru';
                                                                    }
                                                                    ?>
                                                                    <div class="panel panel-default panel-job pan-areas">
                                                                    <div class="panel-heading <?php 
                                                                            $variable = explode('|',$conjunto);
                                                                            foreach ($variable as $var) {
                                                                                if($var == "250".$trabajo['idtrabajo'])
                                                                                {
                                                                                    echo "checked-progress";
                                                                                }else "";
                                                                            }
                                                                        ?>" role="tab" id="heading-jobs-250<?php echo $trabajo['idtrabajo']; ?>">
                                                                        <div class="pull-left">
                                                                            <form class="user_check" role="tablist">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" value="job" id="250<?php echo $trabajo['idtrabajo'];?>" <?php 
                                                                            $variable = explode('|',$conjunto);
                                                                            foreach ($variable as $var) {
                                                                                echo ($var == '250'.$trabajo['idtrabajo'])?'checked':'';
                                                                            }
                                                                        ?>>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        <h4 class="panel-title">
                                                                            <a role="button" data-toggle="collapse" data-parent="#jobs-content" href="/#collapse-jobs-25<?php echo $trabajo['idtrabajo']; ?>" aria-expanded="false" aria-controls="collapse-jobs-250850">
                                                                                <?php 
                                                                                    echo $trabajo['empresa'] .": ". $trabajo['nombre_puesto'];
                                                                                ?>
                                                                            </a>
                                                                            <span class="label label-default pull-right">
                                                                                <img src="./dna/img/bandeirinhas/<?php echo $pais; ?>.png" width="10px">
                                                                                <?php echo $pais; ?></span> </h4>
                                                                    </div>
                                                                    <div id="collapse-jobs-25<?php echo $trabajo['idtrabajo']; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-jobs-250<?php echo $trabajo['idtrabajo']; ?>">
                                                                        <div class="panel-body">
                                                                            <div class="row">
                                                                                <div class="col-md-8">
                                                                                    <b>Descripción: </b>
                                                                                    <p>
                                                                                        <?php 
                                                                                        echo $trabajo['descripcion'];
                                                                                        ?>
                                                                                    </p>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <ul class="list-group">
                                                                                        <li class="list-group-item">
                                                                                            <strong>
                                                                                                Publicado en:
                                                                                                <br></strong> 28/05/2020
                                                                                        </li>
                                                                                        <li class="list-group-item">
                                                                                            <strong>
                                                                                                Expira en: <br></strong>
                                                                                            No informado </li>
                                                                                    </ul>

                                                                                    <div class="btn-group-vertical block" role="group" aria-label="Job Actions">


                                                                                        <a href="<?php echo $trabajo['link']; ?>" class="btn btn-primary" target="_blank">
                                                                                            Sepa Más <i class="fas fa-external-link"></i>
                                                                                        </a>



                                                                                        <button type="button" class="btn btn-primary" data-toggle="job-test-user" disabled="">
                                                                                            Contacto <i class="fas fa-envelope"></i>
                                                                                        </button>


                                                                                    </div>


                                                                                    <ul class="list-group">
                                                                                        <li class="list-group-item " id="job-alerting-250<?php echo $trabajo['idtrabajo']; ?>">
                                                                                            La oferta de trabajo <b>no
                                                                                                está vigente</b> o ya
                                                                                            <b>expiró</b>? Avísanos <a href="javascript:void(0);" onclick="expireJob(250<?php echo $trabajo['idtrabajo']; ?>);">
                                                                                                acá</a>.
                                                                                        </li>
                                                                                        <li class="list-group-item hide" id="job-expired-250<?php echo $trabajo['idtrabajo']; ?>">
                                                                                            Gracias, su aviso ya fue
                                                                                            enviado a los
                                                                                            administradores. </li>
                                                                                        <li class="list-group-item hide" id="job-sending-250<?php echo $trabajo['idtrabajo']; ?>">
                                                                                            <img src="admin/img/loading-spinner-grey.gif">
                                                                                            <spam>Enviando</spam>
                                                                                        </li>
                                                                                    </ul>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <?php
                                                                }
                                                                ?>

<nav style="display:flex; justify-content: center;"><ul class="pagination pagination-md">
 <?php if($paginaActual>1){ ?>
    <li class="page-item"><a class="page-link" href="javascript:paginacionjobs(<?php echo $anteriorpagina ?>,<?php echo $nombrepagina?>,<?php echo $area?>);" onclick="apllyCheckEvents();">Anterior</a></li>
  <?php }
    for($i=0; $i<$paginas; $i++){
        $resultado=$i+1;
        if($resultado==$paginaActual){ ?>
        <li class="page-item active"><a class="page-link" href="javascript:paginacionjobs(<?php echo $resultado ?>,<?php echo $nombrepagina?>,<?php echo $area?>);" onclick="apllyCheckEvents();"><?php echo $resultado ?></a></li>
<?php 
     }else{ ?>
        <li class="page-item"><a class="page-link" href="javascript:paginacionjobs(<?php echo $resultado ?>,<?php echo $nombrepagina?>,<?php echo $area?>);" onclick="apllyCheckEvents();"><?php echo $resultado ?></a></li>
<?php }}
 if($paginaActual<$paginas){ ?>
    <li class="page-item"><a class="page-link" href="javascript:paginacionjobs(<?php echo $siguientepagina ?>,<?php echo $nombrepagina?>,<?php echo $area?>);" onclick="apllyCheckEvents();">Siguiente</a></li>
 <?php }  ?>
 </ul></nav>

 <?php } ?>

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
            
            if(area == "job"){
				$.ajax({
				type: "POST",
				url: "jobs-cont.php",
				data: {jb:item_id, tipojb:'addjb'},
				
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
                if(area == "job"){
					$.ajax({
					type: "POST",
					url: "jobs-cont.php",
					data: {jb:item_id, tipojb:'removejb'},
					
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