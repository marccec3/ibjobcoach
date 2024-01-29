<?php
include 'listar.php';
    $nombre_usuario = $_SESSION['usuario'];

    $sentencia = $connect->prepare("SELECT nombrecliente FROM ibvirtuallicencias");
    $sentencia->execute();

    $persona = $sentencia->fetchAll();
 

    $numero_por_pagina = 3;
    $paginas = ceil(($sentencia->rowCount())/$numero_por_pagina);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <h1 class="mb-5">Paginación</h1>
        <?php
            if(!$_GET){
                header('Location:paginacion.php?pagina=1');
            }
            $articulos =$connect->prepare ('SELECT nombrecliente FROM ibvirtuallicencias LIMIT 1,3');
            $articulos->execute();
            $resultado_articulos = $articulos->fetchAll();
        ?>



        <?php foreach ($resultado_articulos as $usuario) {?>
            <div class="alert alert-primary" role="alert">
                <?php echo $usuario['nombrecliente']?>
            </div>
            <nav aria-label="Page navigation example">

        <?php
        }
        ?>
        


        <ul class="pagination">
            <li class="page-item <?php echo $_GET['pagina']<=1 ? 'disabled' : '' ?>">
                <a class="page-link" href="paginacion.php?pagina=<?php echo $_GET['pagina']-1;?>">
                    Previous
                </a>
            </li>
            <?php for ($i=0; $i < $paginas; $i++) { ?>
                <li class="page-item <?php echo $_GET['pagina']==$i+1 ? 'active' : '' ?>"><a class="page-link " href="paginacion.php?pagina=<?php echo $i+1 ;?>"><?php echo $i+1 ;?></a></li>
            <?php
            }
            ?>
            

            <li class="page-item <?php echo $_GET['pagina']>=$paginas ? 'disabled' : '' ?>">
                <a class="page-link" href="paginacion.php?pagina=<?php echo $_GET['pagina']+1;?>">
                Next
            </a></li>
        </ul>
</nav>

    </div>





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>