
<?php include 'listar.php'; ?>
<?php
$paginaActual=$_POST['pagina'];

if (empty($paginaActual)) 
	{
    	$paginaActual=1;
	}

$cantidadMostrar = 10;
$iniciar = ($paginaActual-1)* $cantidadMostrar;
$sql1 = "SELECT * FROM contenidos where idcategoria=3 order by  fechapublicacion DESC";
$query2 = $connect->prepare($sql1);
$query2->execute();
                                        $sql = "SELECT * FROM contenidos where idcategoria=3 order by  fechapublicacion DESC LIMIT $iniciar,$cantidadMostrar";
                                        $query = $connect->prepare($sql);
                                        $query->execute();
                                        $results = $query->fetchAll(PDO::FETCH_OBJ);
$totalRespuestas=$query2->rowCount();

$nombrepagina="'ContenidoLinkedIn.php'";

$area="'#ContenidosLinkedIn'";

$anteriorpagina=$paginaActual-1;

$siguientepagina=$paginaActual+1;

$paginas = ceil($totalRespuestas/$cantidadMostrar);
                                        if ($query->rowCount() > 0) {
                                            foreach ($results as $result) {
                                    ?>
                                    <div class="panel panel-default panel-library">
                                        <div class=" panel-heading" role="tab" id="heading-library-37-linkedin-content">
                                            <div class="pull-right">
                                                <span class="label label-default">
                                                    <img src="./dna/img/bandeirinhas/peru.png" width="10px"> Perú </span>
                                            </div>
                                            <div class="pull-left">
                                            </div>
                                            <!-- This is used to avoid same id/href reference in different areas-->
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#linkedin-content-content" href="/#<?php echo $result->idcontenido?>" aria-expanded="false" aria-controls="collapse-library-37" class="collapsed">
                                                    <?php echo $result->nombre;?> </a>
                                            </h4>
                                        </div>
                                        <div id="<?php echo $result->idcontenido?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-library-37" aria-expanded="true" style="">
                                            <div class="panel-body">
                                                <ul class="list-group list-user-links">
                                                    <li class="list-group-item">
                                                        <a href="<?php echo $result->url?>" target="_blank">
                                                            <i class="fa fa-external-link"></i>
                                                            <?php echo $result->descripcion; ?></a>
                                                        <span class="link hidden-xs"><br><?php echo $result->url;?></span>

                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <?php  }}?>

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