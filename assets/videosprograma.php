<?php include 'listar.php'; ?>

<?php

$paginaActual=$_POST['pagina'];

if (empty($paginaActual)) 
	{
    	$paginaActual=1;
	}

$cantidadMostrar = 10;
$iniciar = ($paginaActual-1)* $cantidadMostrar;


$sentencia = "SELECT * FROM contenidos where idcategoria=9 and descripcion='video' order by  fechapublicacion ASC";
$query1 = $connect->prepare($sentencia);
$query1->execute();

$sql = "SELECT * FROM contenidos where idcategoria=9 and descripcion='video' order by  fechapublicacion ASC LIMIT $iniciar,$cantidadMostrar";
$query = $connect->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);

$totalRespuestas=$query1->rowCount();

$nombrepagina="'videosprograma.php'";

$area="'#videos-content'";

$anteriorpagina=$paginaActual-1;

$siguientepagina=$paginaActual+1;

$paginas = ceil($totalRespuestas/$cantidadMostrar);

if ($query->rowCount() > 0) {
foreach ($results as $result) {
    ?>
                                    <div class="panel panel-default panel-videos">
                                        <div class=" panel-heading" role="tab" id="heading-videos-2429">
                                            <div class="pull-right">
                                                <span class="label label-default">
                                                    <img src="./dna/img/bandeirinhas/peru.png" width="10px"> Perú </span>
                                            </div>
                                            <div class="pull-left">
                                                <form class="user_check" role="tablist">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="video" id="2429">
                                                    </div>
                                                </form>
                                            </div>
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#videos-content" aria-content-id="2429" href="/#<?php echo $result->idcontenido ?>" aria-expanded="false" aria-controls="collapse-videos-2429" class="collapsed">
                                                    <?php echo $result->nombre; ?>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="<?php echo $result->idcontenido ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-videos-2429" aria-expanded="false" style="height: 0px;">
                                            <div class="panel-body">
                                                <input type="hidden" value="<?php echo $result->url?>">
                                                <div class="embed-responsive embed-responsive-16by9">
                                                <iframe width="560" height="315" src="<?php echo $result->url?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }}?>

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
    <li class="page-item"><a class="page-link" href="javascript:paginacion(<?php echo $siguientepagina ?>,<?php echo $nombrepagina?>,<?php echo $area?>);" >Siguiente</a></li>
 <?php }  ?>
 </ul></nav>