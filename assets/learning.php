<style type="text/css">
    #global {
        height: 200px;
        width: 340px;
        border: 1px solid rgb(5, 78, 78);
        background: #f1f1f1;
        overflow-y: scroll;
    }

    #global li a {
        font-size: 10px;
    }

    #mensajes {
        height: auto;
    }

    .texto {
        padding: 4px;
        background: #fff;
    }
</style>

<!--------------------------------------------programas------------------------------------->
<div class="fases-learning hide" id="fases-learning">
    <div class="container">
        <div class="row" style="min-height: 1200px">
            <div class="col-md-12 fases">
                <div class="program-title">
                    <div class="title-in row row-eq-height mb-4">
                        <div class="col-lg-2 col-md-2 col-sm-12">
                            <a style="padding:0 10px" href="#" onclick="backToHome(event)">
                                <i class="fa fa-angle-left"></i>
                                <img src="dna/img/4.png" class="img-fluid img-focus" width="128px" height="128px">
                            </a>
                        </div>
                        <div class='col-lg-2 col-md-2 col-sm-12'>
                            <h4 class="font-upper">MATERIAL COACHING</h4>
                        </div>
                        <div class='col-lg-8 col-md-8 col-sm-12'>
                            <p class="text-top">
                                nuestro programa de Outplacement les ofrece textos e información que permitiran diferenciarte como profesional:
                                <strong>Preparación, perfeccionamiento</strong>
                                para potenciar tu perfil laboral para competir dentro del mercado y <strong>Adquirir y desarrollar</strong>
                                una serie de habilidades profesionales que son las que mejorarán tu <strong>empleabilidad.</strong>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div style="border:grey solid 1px;" class="card">
                            <div class="card-img-top">
                                <i class="fal fa-handshake-alt fa-8x" ></i>
                            </div>
                            <div class="card-body">
                               
                                <button class="btn-group btn btn-pdf btn-block dropdown-toggle"  data-toggle="dropdown">
                                    TECNICAS DE ENTREVISTA <i class="fas fa-door-open"></i>  
                                </button>
                                <?php
                                    $email=$_SESSION['usuario'];
                                    $sql = "SELECT * from ibvirtuallicencias WHERE correo=?";
                                    $query = $connect->prepare($sql);
                                    $query->bindParam(1,$correo);
                                    $query->execute([$email]);
                                    //si existe el usuario
                                    if($query->rowCount() == 1)
                                    {
                                    $contenido=$query->fetch();
                                    $opcion=$contenido['opcion'];
                                    if($opcion=="Gratis"){
                                        ?>
                                         <ul class="dropdown-menu" role="menu" id="global">
                                            <li>
                                                <div class="alert alert-info">contenidos de pago.</div> 
                                            </li>
                                         </ul>                                       
                                   <?php 
                                   }else{?>
                                <ul class="dropdown-menu" role="menu" id="global">
                                    <?php
                                    $sql = "SELECT * FROM articulos where idcategoria=1 order by fechapublicacion desc";
                                    $query = $connect->prepare($sql);
                                    $query->execute();
                                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                                    if ($query->rowCount() > 0) {
                                        foreach ($results as $result) { ?>
                                            <li><a href="admin/examples/archivo/<?php echo $result->nombre ?>" target="_blank"><?php echo $result->nombre ?><i class=" far fa-file-pdf"></i></a></li>
                                    <?php }
                                    }
                                    ?>
                                </ul>
                                <?php }}?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div style="border:grey solid 1px;" class="card">
                            <div class="card-img-top">
                                <i class="fas fa-user fa-8x"></i>
                            </div>
                            <div class="card-body">
                                <button class="btn-group btn btn-pdf btn-block dropdown-toggle" data-toggle="dropdown">
                                    Sesiones Outplacement <i class="fas fa-door-open"></i>
                                </button><?php
                                    $email=$_SESSION['usuario'];
                                    $sql = "SELECT * from ibvirtuallicencias WHERE correo=?";
                                    $query = $connect->prepare($sql);
                                    $query->bindParam(1,$correo);
                                    $query->execute([$email]);
                                    //si existe el usuario
                                    if($query->rowCount() == 1)
                                    {
                                    $contenido=$query->fetch();
                                    $opcion=$contenido['opcion'];
                                    if($opcion=="Gratis"){?>
                                        <ul class="dropdown-menu" role="menu" id="global">
                                            <li>
                                                <div class="alert alert-info">contenidos de pago.</div> 
                                            </li>
                                         </ul>      
                                   <?php 
                                 }else{?>
                                            
                                <ul class="dropdown-menu" role="menu" id="global">
                                    <?php
                                    $sql = "SELECT * FROM articulos where idcategoria=2 order by fechapublicacion desc";
                                    $query = $connect->prepare($sql);
                                    $query->execute();
                                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                                    if ($query->rowCount() > 0) {
                                        foreach ($results as $result) { ?>
                                            <li><a href="admin/examples/archivo/<?php echo $result->nombre ?>" target="_blank"><?php echo $result->nombre ?><i class=" far fa-file-pdf"></i></a></li>
                                    <?php }
                                    }
                                    ?>    
                                </ul>
                                <?php }}?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div style="border:grey solid 1px;" class="card">
                            <div class="card-img-top">
                                <i class="fab fa-sketch fa-8x"></i>
                            </div>
                            <div class="card-body">
                                <button class="btn-group btn btn-pdf btn-block dropdown-toggle" data-toggle="dropdown">
                                    TEMPLATES <i class="fas fa-door-open"></i>
                                </button>
                                <?php
                                    $email=$_SESSION['usuario'];
                                    $sql = "SELECT * from ibvirtuallicencias WHERE correo=?";
                                    $query = $connect->prepare($sql);
                                    $query->bindParam(1,$correo);
                                    $query->execute([$email]);
                                    //si existe el usuario
                                    if($query->rowCount() == 1)
                                    {
                                    $contenido=$query->fetch();
                                    $opcion=$contenido['opcion'];
                                    if($opcion=="Gratis"){
                                        ?>
                                          <ul class="dropdown-menu" role="menu" id="global">
                                            <li>
                                                <div class="alert alert-info">contenidos de pago.</div> 
                                            </li>
                                         </ul>
                                   <?php 
                                    }else{?>
                                            
                                <ul class="dropdown-menu" role="menu" id="global">
                                    <?php
                                    $sql = "SELECT * FROM articulos where idcategoria=9 order by fechapublicacion desc";
                                    $query = $connect->prepare($sql);
                                    $query->execute();
                                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                                    if ($query->rowCount() > 0) {
                                        foreach ($results as $result) { ?>
                                            <li><a href="admin/examples/archivo/<?php echo $result->nombre ?>" target="_blank"><?php echo $result->nombre ?><i class=" far fa-file-pdf"></i></a></li>
                                    <?php }
                                    }
                                    ?>
                                </ul>
                                <?php }}?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div style="border:grey solid 1px;" class="card">
                            <div class="card-img-top ">
                                <i class="fal fa-street-view fa-8x"></i>
                            </div>
                            <div class="card-body">
                                <button class="btn-group btn btn-pdf btn-block dropdown-toggle" data-toggle="dropdown">
                                    CV <i class="fas fa-door-open"></i>
                                </button>
                                <?php
                                    $email=$_SESSION['usuario'];
                                    $sql = "SELECT * from ibvirtuallicencias WHERE correo=?";
                                    $query = $connect->prepare($sql);
                                    $query->bindParam(1,$correo);
                                    $query->execute([$email]);
                                    //si existe el usuario
                                    if($query->rowCount() == 1)
                                    {
                                    $contenido=$query->fetch();
                                    $opcion=$contenido['opcion'];
                                    if($opcion=="Gratis"){
                                        ?>
                                         <ul class="dropdown-menu" role="menu" id="global">
                                            <li>
                                                <div class="alert alert-info">contenidos de pago.</div> 
                                            </li>
                                         </ul>
                                   <?php 
                                     }else{?>
                                <ul class="dropdown-menu" role="menu" id="global">
                                    <?php
                                    $sql = "SELECT * FROM articulos where idcategoria=10 ORDER BY fechapublicacion desc";
                                    $query = $connect->prepare($sql);
                                    $query->execute();
                                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                                    if ($query->rowCount() > 0) {
                                        foreach ($results as $result) { ?>
                                            <li><a href="admin/examples/archivo/<?php echo $result->nombre ?>" target="_blank"><?php echo $result->nombre ?><i class=" far fa-file-pdf"></i></a></li>
                                    <?php }
                                    }
                                    ?>
                                </ul>
                                <?php }}?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div style="border:grey solid 1px;" class="card">
                            <div class="card-img-top ">
                                <i class="fal fa-chart-bar fa-8x"></i>
                            </div>
                            <div class="card-body">
                                <button class="btn-group btn btn-pdf btn-block dropdown-toggle " data-toggle="dropdown">
                                    MATCH DE MERCADO <i class="fas fa-door-open"></i>
                                </button>
                                <?php
                                    $email=$_SESSION['usuario'];
                                    $sql = "SELECT * from ibvirtuallicencias WHERE correo=?";
                                    $query = $connect->prepare($sql);
                                    $query->bindParam(1,$correo);
                                    $query->execute([$email]);
                                    //si existe el usuario
                                    if($query->rowCount() == 1)
                                    {
                                    $contenido=$query->fetch();
                                    $opcion=$contenido['opcion'];
                                    if($opcion=="Gratis"){
                                        ?>
                                         <ul class="dropdown-menu" role="menu" id="global">
                                            <li>
                                                <div class="alert alert-info">contenidos de pago.</div> 
                                            </li>
                                         </ul> 
                                   <?php 
                                     }else{?>
                                            
                                <ul class="dropdown-menu" role="menu" id="global">
                                    <?php
                                    $sql = "SELECT * FROM articulos where idcategoria=11 order by fechapublicacion desc";
                                    $query = $connect->prepare($sql);
                                    $query->execute();
                                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                                    if ($query->rowCount() > 0) {
                                        foreach ($results as $result) { ?>
                                            <li><a href="admin/examples/archivo/<?php echo $result->nombre ?>" target="_blank"><?php echo $result->nombre ?><i class=" far fa-file-pdf"></i></a></li>
                                    <?php }
                                    }
                                    ?>
                                </ul>
                                <?php }
                                    }
                                    ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div style="border:grey solid 1px;" class="card">
                            <div class="card-img-top ">
                                <i class="fal fa-file-chart-pie fa-8x"></i>
                            </div>
                            <div class="card-body">
                                <button class="btn-group btn btn-pdf btn-block dropdown-toggle" data-toggle="dropdown">
                                    PROPUESTA DE VALOR <i class="fas fa-door-open"></i>
                                </button>
                                <?php
                                    $email=$_SESSION['usuario'];
                                    $sql = "SELECT * from ibvirtuallicencias WHERE correo=?";
                                    $query = $connect->prepare($sql);
                                    $query->bindParam(1,$correo);
                                    $query->execute([$email]);
                                    //si existe el usuario
                                    if($query->rowCount() == 1)
                                    {
                                    $contenido=$query->fetch();
                                    $opcion=$contenido['opcion'];
                                    if($opcion=="Gratis"){
                                        ?>
                                         <ul class="dropdown-menu" role="menu" id="global">
                                            <li>
                                                <div class="alert alert-info">contenidos de pago.</div> 
                                            </li>
                                         </ul> 
                                   <?php 
                                    }else{?>
                                <ul class="dropdown-menu" role="menu" id="global">
                                    <?php
                                    $sql = "SELECT * FROM articulos where idcategoria=12 order by fechapublicacion desc";
                                    $query = $connect->prepare($sql);
                                    $query->execute();
                                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                                    if ($query->rowCount() > 0) {
                                        foreach ($results as $result) { ?>
                                            <li><a href="admin/examples/archivo/<?php echo $result->nombre ?>" target="_blank"><?php echo $result->nombre ?><i class=" far fa-file-pdf"></i></a></li>
                                    <?php }
                                    }
                                    ?>
                                </ul>
                                <?php }}?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div style="border:grey solid 1px;" class="card">
                            <div class="card-img-top ">
                                <i class="fab fa-linkedin fa-8x"></i>
                            </div>
                            <div class="card-body">
                                <button class="btn-group btn btn-pdf btn-block dropdown-toggle" data-toggle="dropdown">
                                    CONTENIDO DE LINKIEDIN <i class="fas fa-door-open"></i>
                                </button>
                                <?php
                                    $email=$_SESSION['usuario'];
                                    $sql = "SELECT * from ibvirtuallicencias WHERE correo=?";
                                    $query = $connect->prepare($sql);
                                    $query->bindParam(1,$correo);
                                    $query->execute([$email]);
                                    //si existe el usuario
                                    if($query->rowCount() == 1)
                                    {
                                    $contenido=$query->fetch();
                                    $opcion=$contenido['opcion'];
                                    if($opcion=="Gratis"){
                                        ?>
                                           <ul class="dropdown-menu" role="menu" id="global">
                                            <li>
                                                <div class="alert alert-info">contenidos de pago.</div> 
                                            </li>
                                         </ul> 
                                   <?php 
                                    }else{?>
                                <ul class="dropdown-menu" role="menu" id="global">
                                    <?php
                                    $sql = "SELECT * FROM articulos where idcategoria=13 order by fechapublicacion desc";
                                    $query = $connect->prepare($sql);
                                    $query->execute();
                                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                                    if ($query->rowCount() > 0) {
                                        foreach ($results as $result) { ?>
                                            <li><a href="admin/examples/archivo/<?php echo $result->nombre ?>" target="_blank"><?php echo $result->nombre ?><i class=" far fa-file-pdf"></i></a></li>
                                    <?php }
                                    }
                                    ?>
                                </ul>
                                <?php }}?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div style="border:grey solid 1px;" class="card">
                            <div class="card-img-top">
                                <i class="fal fa-chart-network fa-8x"></i>
                            </div>
                            <div class="card-body">
                                <button class="btn-group btn btn-pdf btn-block dropdown-toggle" data-toggle="dropdown">
                                    CAZA AL PROCESO <i class="fas fa-door-open"></i>
                                </button>
                                <?php
                                    $email=$_SESSION['usuario'];
                                    $sql = "SELECT * from ibvirtuallicencias WHERE correo=?";
                                    $query = $connect->prepare($sql);
                                    $query->bindParam(1,$correo);
                                    $query->execute([$email]);
                                    //si existe el usuario
                                    if($query->rowCount() == 1)
                                    {
                                    $contenido=$query->fetch();
                                    $opcion=$contenido['opcion'];
                                    if($opcion=="Gratis"){?>
                                         <ul class="dropdown-menu" role="menu" id="global">
                                            <li>
                                                <div class="alert alert-info">contenidos de pago.</div> 
                                            </li>
                                         </ul> 
                                   <?php  
                                }else{?>
                                <ul class="dropdown-menu" role="menu" id="global">
                                    <?php
                                    $sql = "SELECT * FROM articulos where idcategoria=14 order by fechapublicacion desc";
                                    $query = $connect->prepare($sql);
                                    $query->execute();
                                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                                    if ($query->rowCount() > 0) {
                                        foreach ($results as $result) { ?>
                                            <li><a href="admin/examples/archivo/<?php echo $result->nombre ?>" target="_blank"><?php echo $result->nombre ?><i class=" far fa-file-pdf"></i></a></li>
                                    <?php }
                                    }
                                    ?>
                                </ul>
                                <?php }}?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div style="border:grey solid 1px;" class="card">
                            <div class="card-img-top">
                                <i class="fal fa-users-cog fa-8x"></i>
                            </div>
                            <div class="card-body">
                                <button class="btn-group btn btn-pdf btn-block dropdown-toggle" data-toggle="dropdown">
                                    CONOCIMIENTO PERSONAL <i class="fas fa-door-open"></i>
                                </button>
                                <?php
                                    $email=$_SESSION['usuario'];
                                    $sql = "SELECT * from ibvirtuallicencias WHERE correo=?";
                                    $query = $connect->prepare($sql);
                                    $query->bindParam(1,$correo);
                                    $query->execute([$email]);
                                    //si existe el usuario
                                    if($query->rowCount() == 1)
                                    {
                                    $contenido=$query->fetch();
                                    $opcion=$contenido['opcion'];
                                    if($opcion=="Gratis"){
                                        ?>
                                         <ul class="dropdown-menu" role="menu" id="global">
                                            <li>
                                                <div class="alert alert-info">contenidos de pago.</div> 
                                            </li>
                                         </ul>
                                   <?php 
                                    }else{?>
                                <ul class="dropdown-menu" role="menu" id="global">
                                    <?php
                                    $sql = "SELECT * FROM articulos where idcategoria=15 order by fechapublicacion desc";
                                    $query = $connect->prepare($sql);
                                    $query->execute();
                                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                                    if ($query->rowCount() > 0) {
                                        foreach ($results as $result) { ?>
                                            <li><a href="admin/examples/archivo/<?php echo $result->nombre ?>" target="_blank"><?php echo $result->nombre ?><i class=" far fa-file-pdf"></i></a></li>
                                    <?php }
                                    }
                                    ?>
                                </ul>
                                <?php }}?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>