<?php include 'listar.php'; ?>
<?php
$paginaActual=$_POST['pagina'];

if (empty($paginaActual)) 
	{
    	$paginaActual=1;
    }
    
$limita = 10;     
$cantidadMostrar = 20;
$iniciar = ($paginaActual-1)* $limita; 

$sql1 = "SELECT * FROM contenidos where idcategoria=14 and descripcion='video' order by  fechapublicacion DESC";
$query1 = $connect->prepare($sql1);
$query1->execute();

$sql2 = "SELECT * FROM contenidos where idcategoria=14 and descripcion='archivo' order by  fechapublicacion DESC";
$query2 = $connect->prepare($sql2);
$query2->execute();

                                            $sql = "SELECT * FROM contenidos where idcategoria=14 and descripcion='video' order by  fechapublicacion DESC LIMIT $iniciar,$limita";
                                            $query = $connect->prepare($sql);
                                            $query->execute();                                           
                                            $results = $query->fetchAll(PDO::FETCH_OBJ);

$totalRespuestas=$query2->rowCount();

$nombrepagina="'ConocimientoPersonal.php'";
                                            
$area="'#conocimientoPers'";
                                            
$anteriorpagina=$paginaActual-1;
                                            
$siguientepagina=$paginaActual+1;
                                            
$paginas = ceil($totalRespuestas/$limita);






                                            if ($query->rowCount() > 0) {
                                                foreach ($results as $result) {
                                        ?>
                                    <div class="panel panel-default panel-library">
                                        <div class=" panel-heading" role="tab" id="heading-library-32-conhecimento-pessoal">
                                            <div class="pull-right">
                                                <span class="label label-default">
                                                    <img src="./dna/img/bandeirinhas/peru.png" width="10px"> Perú </span>
                                            </div>
                                            <div class="pull-left">
                                            </div>
                                            <!-- This is used to avoid same id/href reference in different areas-->
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#conhecimento-pessoal-content" href="/#<?php echo $result->idcontenido?>" aria-expanded="false" aria-controls="collapse-library-32">
                                                    <?php echo $result->nombre;?> </a>
                                            </h4>
                                        </div>
                                        <div id="<?php echo $result->idcontenido?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-library-32">
                                            <div class="panel-body">
                                                <input type="hidden" value="<?php echo $result->url?>">
                                                <div class="embed-responsive embed-responsive-16by9">
                                                    <iframe src="<?php echo $result->url?>" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }}?>

                                    <?php
                                            $sql = "SELECT * FROM contenidos where idcategoria=14 and descripcion='archivo' order by  fechapublicacion DESC LIMIT $iniciar,$limita";
                                            $query = $connect->prepare($sql);
                                            $query->execute();
                                            $results = $query->fetchAll(PDO::FETCH_OBJ);

                                            if ($query->rowCount() > 0) {
                                                foreach ($results as $result) {
                                        ?>
                                    <div class="panel panel-default panel-library">
                                        <div class=" panel-heading" role="tab" id="heading-library-50-conhecimento-pessoal">
                                            <div class="pull-right">
                                                <span class="label label-default">
                                                    <img src="./dna/img/bandeirinhas/peru.png" width="10px"> Perú </span>
                                            </div>
                                            <div class="pull-left">
                                            </div>
                                            <!-- This is used to avoid same id/href reference in different areas-->
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#conhecimento-pessoal-content" href="/#<?php echo $result->idcontenido?>" aria-expanded="false" aria-controls="collapse-library-50">
                                                    <?php echo $result->nombre;?> </a>
                                            </h4>
                                        </div>
                                        <div id="<?php echo $result->idcontenido?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-library-50">
                                            <div class="panel-body">
                                                <ul class="list-group list-user-links">
                                                    <li class="list-group-item">
                                                        <a href="<?php echo $result->url?>" target="_blank">
                                                            <i class="fa fa-external-link"></i><?php echo $result->nombre?>r </a>
                                                        <span class="link hidden-xs"><br><?php echo $result->url?></span>
                                                    </li>
                                                </ul>
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