<?php include 'listar.php'; ?>
<?php

$paginaActual=$_POST['pagina'];

if (empty($paginaActual)) 
	{
    	$paginaActual=1;
    }
     
$cantidadMostrar = 10;
$iniciar = ($paginaActual-1)* $cantidadMostrar; 

$sql1 = "SELECT * FROM alumni";
$query2 = $connect->prepare($sql1);
$query2->execute();

                                            $sql = "SELECT * FROM alumni LIMIT $iniciar,$cantidadMostrar";
                                            $query = $connect->prepare($sql);
                                            $query->execute();
                                            $results = $query->fetchAll(PDO::FETCH_OBJ);

$totalRespuestas=$query2->rowCount();

$nombrepagina="'AlumniUsuarios.php'";
                                                                                        
$area="'#alumni-content'";
                                                                                        
$anteriorpagina=$paginaActual-1;
                                                                                        
$siguientepagina=$paginaActual+1;
                                                                                        
$paginas = ceil($totalRespuestas/$cantidadMostrar);

                                            if ($query->rowCount() > 0) {
                                                foreach ($results as $result) {
                                        ?>
                                    <div class="panel panel-default panel-alumnus">
                                        <div class="panel-heading" role="tab" id="heading-alumnus-238">
                                            <h4 class="panel-title">
                                                <div class="pull-right">
                                                    <span class="label label-default">
                                                        <img src="./dna/img/bandeirinhas/peru.png" width="10px"> Perú </span>
                                                </div>
                                                <a role="button" data-toggle="collapse" data-parent="#alumni-content" href="/#<?php echo $result->idalumni?>" aria-expanded="false" aria-controls="collapse-alumnus-238" class="collapsed">
                                                    <span class="unicode-to-emoji"><?php echo $result->nombre;?></span>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="<?php echo $result->idalumni?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-alumnus-238" aria-expanded="false">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <img src="admin/examples/foto/<?php echo $result->name?>" class="img-responsive img-circle center-block" style="max-height: 90px;">
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div>
                                                                    <i class="fas fa-fw fa-building"></i>
                                                                    <strong>Empresa Actual</strong>
                                                                </div>
                                                                <?php echo $result->empresa;?>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div>
                                                                    <i class="fas fa-fw fa-briefcase"></i>
                                                                    <strong>Posición Actual</strong>
                                                                </div>
                                                                <?php echo $result->posicion;?>
                                                            </div>
                                                        </div>
                                                        <div class="row" style="margin-top: 1.5em;">
                                                            <div class="col-md-6">
                                                                <div>
                                                                    <i class="fas fa-fw fa-at"></i>
                                                                    <strong>Correo</strong>
                                                                </div>
                                                                <a href="<?php echo $result->email?>"><?php echo $result->email;?></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
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