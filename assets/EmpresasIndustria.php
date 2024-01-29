<?php
 include 'listar.php'; ?>

<?php
 $paginaActual=$_POST['pagina'];

if (empty($paginaActual)) 
	{
    	$paginaActual=1;
	}

$cantidadMostrar = 20;
$iniciar = ($paginaActual-1)* $cantidadMostrar;

$sql1 = "SELECT * FROM contenidos where idcategoria=2";
$query2 = $connect->prepare($sql1);
$query2->execute();

                                    $sql = "SELECT * FROM contenidos where idcategoria=2 LIMIT $iniciar,$cantidadMostrar";
                                    $query = $connect->prepare($sql);
                                    $query->execute();
                                    $results = $query->fetchAll(PDO::FETCH_OBJ);

$totalRespuestas=$query2->rowCount();

$nombrepagina="'EmpresasIndustria.php'";

$area="'#companies-content'";

$anteriorpagina=$paginaActual-1;
                                    
$siguientepagina=$paginaActual+1;
                                    
$paginas = ceil($totalRespuestas/$cantidadMostrar);

                                    if ($query->rowCount() > 0) {
                                        foreach ($results as $result) { ?>
                                    <div class="panel panel-default panel-industry">
                                        <div class="panel-heading" role="tab" id="heading-industry-72">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#companies-content" href="/#<?php echo $result->idcontenido?>" aria-expanded="false" aria-controls="<?php echo $result->idcontenido?>" class="collapsed"><?php echo $result->nombre;?> </a>
                                            </h4>
                                        </div>
                                        <div id="<?php echo $result->idcontenido?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-industry-72" aria-expanded="true" style="height: 0px;">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <table class="table table-striped table-bordered" style="margin-top: 1em;">
                                                            <thead>
                                                                <tr>
                                                                    <th class="col-xs-4">Nombre </th>
                                                                    <th class="col-xs-8">Url </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><?php echo $result->nombre; ?> </td>
                                                                    <td>
                                                                        <a href="<?php echo $result->url ?>" target="_blank" data-toggle="popover" data-title="URL" data-trigger="hover" data-placement="top" data-content="<?php echo $result->url?>">
                                                                            <i class="fas fa-external-link"></i>
                                                                            <?php echo $result->url; ?> </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        }
                                        }
                                    ?>
<nav style="display:flex; flex-direction:row; justify-content: center;"><ul class="pagination pagination-md">
 <?php if($paginaActual>1){ ?>
    <li class="page-item"><a class="page-link" href="javascript:paginacion(<?php echo $anteriorpagina ?>,<?php echo $nombrepagina?>,<?php echo $area?>);">Anterior</a></li>
  <?php } ?>
  <li class="page-item"><a class="page-link" onclick="izquierda();"><<</a></li>
  </ul>
  <div class="scroll_dinamico" style="overflow:hidden; width:360px; margin:0px 4px;">
  <ul class="pagination pagination-md" style=" width:1406px;">
  <?php  for($i=0; $i<$paginas; $i++){
        $resultado=$i+1;
        if($resultado==$paginaActual){ ?>
        <li class="page-item active marca"><a class="page-link" href="javascript:paginacion(<?php echo $resultado ?>,<?php echo $nombrepagina?>,<?php echo $area?>);"><?php echo $resultado ?></a></li>
<?php 
     }else{ ?>
        <li class="page-item marca"><a class="page-link" href="javascript:paginacion(<?php echo $resultado ?>,<?php echo $nombrepagina?>,<?php echo $area?>);"><?php echo $resultado ?></a></li>
<?php }} ?>
</ul>
</div>
<ul class="pagination pagination-md">
    <li class="page-item"><a class="page-link" onclick="derecha();" >>></a></li>
 <?php if($paginaActual<$paginas){ ?>
    <li class="page-item"><a class="page-link" href="javascript:paginacion(<?php echo $siguientepagina ?>,<?php echo $nombrepagina?>,<?php echo $area?>);" onclick="derechasig();" >Siguiente</a></li>
 <?php }  ?>
 </ul></nav>

 <script>
 const fila = document.querySelector('.scroll_dinamico');

 function derecha(){
    fila.scrollLeft += 300;
 }
 function izquierdaant(){
     
}
 function izquierda(){
    fila.scrollLeft -= 300;
    }
 </script>