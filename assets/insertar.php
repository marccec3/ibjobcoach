<?php
session_start();
$_isPost = false;
$_isRespuesta = false;
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    //consulta usuario
}
include 'listar.php';

$paginaActual = $_POST['paginas'];





$idforo = $_POST['idforo'];
$autor = $_POST['idusuario'];
$mensaje = $_POST['txtrespuesta'];

$cantidadMostrar = 10;
$iniciar = ($paginaActual-1)* $cantidadMostrar;


$sentencia = $connect->prepare("INSERT INTO respuestas(idforo,idusuario,respuesta) VALUES (?,?,?)");
$resultado = $sentencia->execute([$idforo, $autor, $mensaje]);
if ($resultado === TRUE) {

    $nombreUsuario = $_SESSION['name_user'];
    $apellido = $_SESSION['last_name'];
    $licenciaid = $_SESSION['idlicencia'];
    // $jsondata=array();



    /*$query = "SELECT nombrecliente.ibvirtuallicencias as autor, respuestas.texto as texto from respuestas 
                                         inner JOIN foro on respuestas.idforo = foro.idforo 
                                         INNER JOIN ibvirtuallicencias on respuestas.idusuario = usuario.idlicencia where foro.idforo='$idforo'";
                                         
         $sentencia =$connect->query($query);
         $respuestas = $sentencia->fetch(PDO::FETCH_OBJ);
     */
    //codigo para mostrar el foro seleccionado
    $sentencia2 = $connect->prepare("SELECT f.idforo as idforo,f.autor as autor, f.descripcion as descripcion,f.fecha as fecha, ib.nombrecliente as nombrecliente,ib.apellidocliente as apellido,r.fecha as fecharespuesta,r.respuesta as respuesta 
    from respuestas r 
    right JOIN foro f on r.idforo = f.idforo 
    left JOIN ibvirtuallicencias ib on r.idusuario = ib.idlicencia WHERE f.idforo=?");
    $sentencia2->execute([$idforo]);

    $sentencia = $connect->prepare("SELECT f.idforo as idforo,f.autor as autor, f.descripcion as descripcion,f.fecha as fecha,f.vistas as vistas, ib.nombrecliente as nombrecliente,ib.apellidocliente as apellido,r.fecha as fecharespuesta,r.respuesta as respuesta 
    from respuestas r 
    right JOIN foro f on r.idforo = f.idforo 
    left JOIN ibvirtuallicencias ib on r.idusuario = ib.idlicencia WHERE f.idforo=? LIMIT $iniciar,$cantidadMostrar");
    $sentencia->execute([$idforo]);

    $respuestas = $sentencia->fetch(PDO::FETCH_OBJ);

    $totalRespuestas=$sentencia2->rowCount();

    $anteriorpagina=$paginaActual-1;
    $siguientepagina=$paginaActual+1;
    $paginas = ceil($totalRespuestas/$cantidadMostrar);

    $consultac=$connect->prepare("SELECT COUNT(*) FROM(respuestas) WHERE idforo=?");
    $consultac->execute([$idforo]);
    $conrespuesta=$consultac->fetchColumn();

    $consultaa=$connect->prepare("SELECT COUNT(idrespuesta) FROM(respuestas) ");
    $consultaa->execute();
    $consulRespuestaa=$consultaa->fetchColumn();

    $text = '$("#forum-post-form, .forum-reply-form")';

    echo '<script>'.
    'var id_rpta = "Rptas'.$idforo.'";'.
     'var respuesta_foro = '.$consulRespuestaa.';'.
    'var rptas_foro = '.$conrespuesta.'; </script>';
    //foro
    $mensaje = '
<li class="list-group-item">
<div class="row">
<div class="col-md-4">
<div class="avatar">
<img src="dna/img/avatar1.png"  alt="Imagen de Perfil para Caio Bittencourt" class="img-circle profile-pic">
</div>
<h4 class="list-group-item-heading">
<a href="" title="Eventos de Recursos Humanos no Brasil" id=""></a>
</h4>
<p class="metadata">
<span class="author">
<i class="fas fa-fw fa-user text-muted"></i>' . $respuestas->autor . '</span>
<span class="date"><i class="fas fa-fw fa-clock-o text-muted"></i>' . $respuestas->fecha . '
</span>
</p>
</div>
<div class="col-md-6">
<div>
<h3 class="list-group-item-heading">' . $respuestas->descripcion . '</h3>

</div>
</div>
<div class="col-md-2">
<div class="numbers">
<p class="answers">Respuestas:<span class="number">'.$conrespuesta.'</span>
</p>
<p class="visits">Visitas:<span class="number">'.$respuestas->vistas.'</span>
</p>

</div>
</div>
</div>
</li> </br>';

    //respuestas
    if ($respuestas->respuesta != null) {
        $mensaje .= '<li class="list-group-item">
<div class="row">
<div class="col-md-3">
<div class="panel">
<div class="panel-body">
<div class="avatar">
<img src="dna/img/avataru.png" alt="Imagen de Perfil para Caio Bittencourt" class="img-circle profile-pic">
</div>                      
<h4 class="list-group-item-heading">

<a href="" title="Eventos de Recursos Humanos no Brasil" id="">

</a>
</h4>
<p class="metadata">
<span class="author">
<i class="fas fa-fw fa-user text-muted"></i>
 ' . $respuestas->nombrecliente . '
</span>
<span class="date">
<i class="fas fa-fw fa-clock-o text-muted"></i>
</span>
</p>
</div>
</div>
</div>
<div class="col-md-9">

<div>
<p>' . $respuestas->respuesta . '</p>
</div>
</div>
</div>

</li>';
        while ($fila = $sentencia->fetch(PDO::FETCH_OBJ)) {
            $mensaje .= '
<li class="list-group-item">
<div class="row">
<div class="col-md-3">
<div class="panel"> 
<div class="panel-body">
<div class="avatar">
<img src="dna/img/avataru.png" alt="Imagen de Perfil para Caio Bittencourt" class="img-circle profile-pic">
</div>

<h4 class="list-group-item-heading">

<a href="" title="Eventos de Recursos Humanos no Brasil" id="">

</a>
</h4>
<p class="metadata">
<span class="author">
<i class="fas fa-fw fa-user text-muted"></i>
 ' . $fila->nombrecliente . " " . $fila->apellido . '
</span>
<span class="date">
<i class="fas fa-fw fa-clock-o text-muted"></i>' . $fila->fecharespuesta . ' 
</span>
</p>
</div>
</div > 
</div>
<div class="col-md-9">

<div>
<p>' . $fila->respuesta . '</p>
</div>
</div>
</div>

</li>';
        }
    }

    $mensaje.='<nav style="display:flex; justify-content: center;"><ul class="pagination pagination-md">';
    if($paginaActual>1){
       $mensaje .='<li class="page-item"><a class="page-link" href="javascript:paginationUltimo('.$idforo.','.$anteriorpagina.')">Anterior</a></li>';
}
   for($i=0; $i<$paginas; $i++){
       $resultado=$i+1;
       if($resultado==$paginaActual){
           $mensaje .='<li class="page-item active">
       <a class="page-link" 
       href="javascript:paginationUltimo('.$idforo.','.$resultado.');">
       '.$resultado.'</a></li>';

    }else{
       $mensaje .='<li class="page-item"><a class="page-link" href="javascript:paginationUltimo('.$idforo.','.$resultado.');">'.$resultado.'</a></li>';
}}
if($paginaActual<$paginas){
   $mensaje .='<li class="page-item"><a class="page-link" href="javascript:paginationUltimo('.$idforo.','.$siguientepagina.');" >Siguiente</a></li>';
}  
$mensaje.='</nav></ul><br>';

    //apartado respuesta
    $mensaje .= '
<div class="box box-primary thread-post">
<div class="box-header with-border">
<h3 class="box-title">
<i class="fas fa-pencil-square-o"></i>
Añadir respuesta </h3>
</div>
<div class="box-body">
<div class="row">
<div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
<div class="panel panel-default thread-user-info">
<div class="panel-body">
<div class="avatar">
    <img src="dna/img/avataru.png" alt="Imagen de Perfil para Pablo Perez" class="img-responsive">
</div>
<div class="name" id="nombreusuario">' . $nombreUsuario . " " . $apellido . ' </div>
</div>
</div>
</div>
<div class="col-lg-10 col-md-9 col-sm-8 col-xs-6 not-relative">
<form action="insertar.php" method="post" class="forum-reply-form">
<input type="hidden" name="parent_id" value="3">
<div class="row">
<div class="col-md-12">
<input type="hidden" name="idusuario" value="' . $licenciaid . '" >
<input type="hidden" name="idforo" value="' . $idforo . '" >
<div class="form-group">
    <textarea class="form-control" style="height: 158px;"  name="txtrespuesta"></textarea>
</div>
</div>
</div>
<div class="row">
<div class="col-md-9">
<div id="subscription-status">
    <div class="is-subscribed">
        <i class="fas fa-check-circle text-success"></i>
            Usted recibirá notificaciones por correo cuando haya respuestas en este tópico. <a href="/online/forum/cancel/3" data-forum-subscription-cancellation="3">Cancelar notificações</a>.
    </div>
<div class="not-subscribed" style="display: none;">
    <div class="form-group">
        <input type="checkbox" name="subscribe" id="thread-subscribe" value="yes" checked="checked" class="iCheck">
            <label for="thread-subscribe">
                Recibir notificaciones cuando haya respuestas a este tópico </label>
    </div>
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group text-right">
<button type="submit" class="btn btn-primary">
    <i class="fas fa-save"></i>
    Grabar </button>
</div>
</div>

</form>
</div>
</div>
</div>
</div>';


    //print_r($respuestas);
    echo $mensaje;
}
