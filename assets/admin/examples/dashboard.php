<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>WEB CONTROL</title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <style>
    a {
      color: black;
    }
      h6{
          color: black;
      }
     
  </style>
</head>

<body class="">
  <div class="wrapper">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">
      <div class="logo" align="center">
        <img src="../assets/img/javier2.png" class="simple-text logo-normal" style="width: 150px;">
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="./index.php">
              <i class="material-icons">Principal</i>
              <p>Principal</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="?c=usuario">
              <i class="material-icons">person</i>
              <p>Alumni  de Usuario</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="?c=foro">
              <i class="material-icons">assignment</i>
              <p>Registro de foro</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="?c=nuevo">
              <i class="material-icons">book</i>
              <p>Registro de PDF</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="?c=nuevolink">
              <i class="material-icons">article</i>
              <p>Registro Contenidos</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./tabla.php">
              <i class="material-icons">content_paste</i>
              <p>Tablas</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./map.php">
              <i class="material-icons">location_ons</i>
              <p>Maps</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./notifications.php">
              <i class="material-icons">notifications</i>
              <p>Notificaciones</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    
     <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Contenidos actuales</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">all_inbox</i>
                  </div>
                  <p class="card-category">Tecnicas de Entrevista</p>
                     <?php foreach ($this->valor->listartecnicas() as $k) : ?>
                     <h3 class="card-title">Total: <?php echo $k->cantidad; ?></h3>
                     <?php endforeach ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-primary card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons"  style="color:darkgreen">book</i>
                  </div>
                  <p class="card-category">Sesiones Outplacement</p>
                  <?php foreach ($this->valor->listarsesiones() as $k) : ?>
                    <h3 class="card-title">Total: <?php echo $k->cantidad; ?></h3>
                    <?php endforeach ?>
                  </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons" style="color:black">books</i>
                  </div>
                  <p class="card-category">Biblioteca</p>
                  <?php foreach ($this->valor->listarbiblioteca() as $k) : ?>
                    <h3 class="card-title">Total: <?php echo $k->cantidad; ?> </h3>
                    <?php endforeach ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons" style="color:black">account_balance_wallet</i>
                  </div>
                  <p class="card-category">Templates</p>
                  <?php foreach ($this->valor->listartemplates() as $k) : ?>
                    <h3 class="card-title">Total: <?php echo $k->cantidad; ?> </h3>
                    <?php endforeach ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-primary card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons" style="color:black">account_box</i>
                  </div>
                  <p class="card-category">CV</p>
                  <?php foreach ($this->valor->listarcv() as $k) : ?>
                    <h3 class="card-title">Total: <?php echo $k->cantidad; ?> </h3>
                    <?php endforeach ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons" style="color:black;">card_membership</i>
                  </div>
                  <p class="card-category">Martch de Mercado</p>
                  <?php foreach ($this->valor->listarmatch() as $k) : ?>
                    <h3 class="card-title">Total: <?php echo $k->cantidad; ?> </h3>
                    <?php endforeach ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons" style="color:black">storage</i>
                  </div>
                  <p class="card-category">Propuesta de Valor</p>
                  <?php foreach ($this->valor->listarpropuesta() as $k) : ?>
                    <h3 class="card-title">Total: <?php echo $k->cantidad; ?> </h3>
                    <?php endforeach ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons" style="color:black">local_atm</i>
                  </div>
                  <p class="card-category">Contenido de Linkeding</p>
                  <?php foreach ($this->valor->listarcontenido() as $k) : ?>
                    <h3 class="card-title">Total: <?php echo $k->cantidad; ?> </h3>
                    <?php endforeach ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                    <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons" style="color:black">store_mall_directory</i>
                  </div>
                  <p class="card-category">Casa de Procesos</p>
                  <?php foreach ($this->valor->listarcasa() as $k) : ?>
                    <h3 class="card-title">Total: <?php echo $k->cantidad; ?> </h3>
                    <?php endforeach ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                    <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons" style="color:black">streetview</i>
                  </div>
                  <p class="card-category">Conocimiento Personal</p>
                  <?php foreach ($this->valor->listarconocimiento() as $k) : ?>
                    <h3 class="card-title">total: <?php echo $k->cantidad; ?> </h3>
                    <?php endforeach ?>
                </div>
              </div>
            </div>
          </div><!---
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <div class="row">
                    <div class="col-md-9">
                      <h3 class="card-title ">Lista de Articulos</h3>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class="text-primary">
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th>Tama&ntilde;o</th>
                        <th>idcategoria</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                      </thead>
                      <tbody>
                        <?php foreach ($this->valor->listararticulo() as $k) : ?>
                          <tr>
                            <td><?php echo $k->idarticulo; ?></td>
                            <td><a href="archivo/<?php echo $k->nombre; ?>" target="_black"><?php echo $k->nombre; ?></a></td>
                            <td><?php echo $k->tipo; ?></td>
                            <td><?php echo $k->tamanio; ?></td>
                            <td><?php echo $k->categoria; ?></td>
                            <td><a href="?c=nuevo&idarticulo=<?php echo $k->idarticulo; ?>" class="btn btn-success">Editar</a></td>
                            <td><a href="?c=eliminar&idarticulo=<?php echo $k->idarticulo; ?>" class="btn btn-danger">Eliminar</a></td>
                          </tr>
                        <?php endforeach ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>-->
         <div class="row">
             <div class="col-lg-12 col-md-12 col-sm-6">
                <div class="card-header card-header-warning card-header-icon" style="background-color:#B24E62; ">
                  <div class="row">
                    <div class="col-md-9 text-center">
                      <h2 class="card-title" style="color:white;">Lista de contenidos antiguos</h2>
                    </div>
                  </div>
                </div>
             </div>
         </div>
         
          <div class="row">
           
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">all_inbox</i>
                  </div>
                  <p class="card-category">Biblioteca</p>
                     <?php foreach ($this->valor->listarbibliotecaa() as $k) : ?>
                     <h3 class="card-title">Total: <?php echo $k->cantidad; ?></h3>
                     <?php endforeach ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-primary card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons" style="color:darkgreen">book</i>
                  </div>
                  <p class="card-category">Empresa por inductria</p>
                  <?php foreach ($this->valor->listarempresaindustriaa() as $k) : ?>
                    <h3 class="card-title">Total: <?php echo $k->cantidad; ?></h3>
                    <?php endforeach ?>
                  </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons" style="color:white">alarm_on</i>
                  </div>
                  <p class="card-category">Contenidos de Linkedin</p>
                  <?php foreach ($this->valor->listarcontenidolinkedina() as $k) : ?>
                    <h3 class="card-title">Total: <?php echo $k->cantidad; ?> </h3>
                    <?php endforeach ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons" style="color:black">work_outline</i>
                  </div>
                  <p class="card-category">CV</p>
                  <?php foreach ($this->valor->listarcva() as $k) : ?>
                    <h3 class="card-title">Total <?php echo $k->cantidad; ?></h3>
                    <?php endforeach ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons" style="color:white">touch_app</i>
                  </div>
                  <p class="card-category">Match de mercado</p>
                  <?php foreach ($this->valor->listarmatcha() as $k) : ?>
                    <h3 class="card-title">Total: <?php echo $k->cantidad; ?> </h3>
                    <?php endforeach ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons" style="color:white">request_quote</i>
                  </div>
                  <p class="card-category">Propuesta de valor</p>
                  <?php foreach ($this->valor->listarpropuestaa() as $k) : ?>
                    <h3 class="card-title">Total: <?php echo $k->cantidad; ?></h3>
                    <?php endforeach ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons" style="color:black">accessibility</i>
                  </div>
                  <p class="card-category">tecnicas de entrevista</p>
                  <?php foreach ($this->valor->listartecnicasa() as $k) : ?>
                    <h3 class="card-title">Total: <?php echo $k->cantidad; ?> </h3>
                    <?php endforeach ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons" style="color:black">books</i>
                  </div>
                  <p class="card-category">Template</p>
                  <?php foreach ($this->valor->listartemplatea() as $k) : ?>
                    <h3 class="card-title">Total: <?php echo $k->cantidad; ?> </h3>
                    <?php endforeach ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons" style="color:black">account_balance_wallet</i>
                  </div>
                  <p class="card-category">Video de programas</p>
                  <?php foreach ($this->valor->listarvideoa () as $k) : ?>
                    <h3 class="card-title">Total: <?php echo $k->cantidad; ?> </h3>
                    <?php endforeach ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-primary card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons" style="color:black">account_box</i>
                  </div>
                  <p class="card-category">Cursos onlines</p>
                  <?php foreach ($this->valor->listarcursoa() as $k) : ?>
                    <h3 class="card-title">Total: <?php echo $k->cantidad; ?> </h3>
                    <?php endforeach ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons" style="color:black;">card_membership</i>
                  </div>
                  <p class="card-category">Pelicular y libros</p>
                  <?php foreach ($this->valor->listarmatch() as $k) : ?>
                    <h3 class="card-title">Total: <?php echo $k->cantidad; ?> </h3>
                    <?php endforeach ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons" style="color:black">storage</i>
                  </div>
                  <p class="card-category">Job boards</p>
                  <?php foreach ($this->valor->listarboardsa() as $k) : ?>
                    <h3 class="card-title">Total: <?php echo $k->cantidad; ?> </h3>
                    <?php endforeach ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons" style="color:black">local_atm</i>
                  </div>
                  <p class="card-category">Prospección de redes</p>
                  <?php foreach ($this->valor->listarprospecciona() as $k) : ?>
                    <h3 class="card-title">Total: <?php echo $k->cantidad; ?> </h3>
                    <?php endforeach ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                    <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons" style="color:black">store_mall_directory</i>
                  </div>
                  <p class="card-category">Conocimiento personal</p>
                  <?php foreach ($this->valor->listarconocimientoa() as $k) : ?>
                    <h3 class="card-title">Total: <?php echo $k->cantidad; ?> </h3>
                    <?php endforeach ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons" style="color:black">streetview</i>
                  </div>
                  <p class="card-category">Lista de  coworkings</p>
                  <?php foreach ($this->valor->listarcoworkingsa() as $k) : ?>
                    <h3 class="card-title">total: <?php echo $k->cantidad; ?> </h3>
                    <?php endforeach ?>
                </div>
              </div>
            </div>
             <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons" style="color:black">streetview</i>
                  </div>
                  <p class="card-category">Emprendimeinto</p>
                  <?php foreach ($this->valor->listaremprendimientoa() as $k) : ?>
                    <h3 class="card-title">total: <?php echo $k->cantidad; ?> </h3>
                    <?php endforeach ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons" style="color:black">streetview</i>
                  </div>
                  <p class="card-category">Primer Trabajo</p>
                  <?php foreach ($this->valor->listarprimertrabajoa() as $k) : ?>
                    <h3 class="card-title">total: <?php echo $k->cantidad; ?> </h3>
                    <?php endforeach ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons" style="color:black">streetview</i>
                  </div>
                  <p class="card-category">Tendencia laborales</p>
                  <?php foreach ($this->valor->listartendenciasa() as $k) : ?>
                    <h3 class="card-title">total: <?php echo $k->cantidad; ?> </h3>
                    <?php endforeach ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons" style="color:black">streetview</i>
                  </div>
                  <p class="card-category">Joven emprendedor</p>
                  <?php foreach ($this->valor->listarjovena() as $k) : ?>
                    <h3 class="card-title">total: <?php echo $k->cantidad; ?> </h3>
                    <?php endforeach ?>
                </div>
              </div>
            </div>
            
          </div>

        </div>
        <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.facebook.com/javiermiguel.bendezutarqui">
                  Creado por:
                </a>
              </li>
              <li>
                <a href="https://www.linkedin.com/in/javier-bendezu-tarqui-676b53130/">
                  Abaut
                </a>
              </li>
             
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, hecho con <i class="material-icons">account_circle</i> by
            <a href="https://www.facebook.com/javiermiguel.bendezutarqui" target="_blank">Creando</a> una web Mejor.
          </div>
        </div>
      </footer>
      </div>
    </div>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Plugin for the momentJs  -->
    <script src="../assets/js/plugins/moment.min.js"></script>
    <!--  Plugin for Sweet Alert -->
    <script src="../assets/js/plugins/sweetalert2.js"></script>
    <!-- Forms Validations Plugin -->
    <script src="../assets/js/plugins/jquery.validate.min.js"></script>
    <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
    <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
    <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
    <script src="../assets/js/plugins/fullcalendar.min.js"></script>
    <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
    <script src="../assets/js/plugins/jquery-jvectormap.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="../assets/js/plugins/nouislider.min.js"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <!-- Library for adding dinamically elements -->
    <script src="../assets/js/plugins/arrive.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chartist JS -->
    <script src="../assets/js/plugins/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="../assets/demo/demo.js"></script>
    <script>
      $(document).ready(function() {
        $().ready(function() {
          $sidebar = $('.sidebar');

          $sidebar_img_container = $sidebar.find('.sidebar-background');

          $full_page = $('.full-page');

          $sidebar_responsive = $('body > .navbar-collapse');

          window_width = $(window).width();

          fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

          if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
            if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
              $('.fixed-plugin .dropdown').addClass('open');
            }

          }

          $('.fixed-plugin a').click(function(event) {
            // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
            if ($(this).hasClass('switch-trigger')) {
              if (event.stopPropagation) {
                event.stopPropagation();
              } else if (window.event) {
                window.event.cancelBubble = true;
              }
            }
          });

          $('.fixed-plugin .active-color span').click(function() {
            $full_page_background = $('.full-page-background');

            $(this).siblings().removeClass('active');
            $(this).addClass('active');

            var new_color = $(this).data('color');

            if ($sidebar.length != 0) {
              $sidebar.attr('data-color', new_color);
            }

            if ($full_page.length != 0) {
              $full_page.attr('filter-color', new_color);
            }

            if ($sidebar_responsive.length != 0) {
              $sidebar_responsive.attr('data-color', new_color);
            }
          });

          $('.fixed-plugin .background-color .badge').click(function() {
            $(this).siblings().removeClass('active');
            $(this).addClass('active');

            var new_color = $(this).data('background-color');

            if ($sidebar.length != 0) {
              $sidebar.attr('data-background-color', new_color);
            }
          });

          $('.fixed-plugin .img-holder').click(function() {
            $full_page_background = $('.full-page-background');

            $(this).parent('li').siblings().removeClass('active');
            $(this).parent('li').addClass('active');


            var new_image = $(this).find("img").attr('src');

            if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
              $sidebar_img_container.fadeOut('fast', function() {
                $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                $sidebar_img_container.fadeIn('fast');
              });
            }

            if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
              var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

              $full_page_background.fadeOut('fast', function() {
                $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                $full_page_background.fadeIn('fast');
              });
            }

            if ($('.switch-sidebar-image input:checked').length == 0) {
              var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
              var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
            }

            if ($sidebar_responsive.length != 0) {
              $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
            }
          });

          $('.switch-sidebar-image input').change(function() {
            $full_page_background = $('.full-page-background');

            $input = $(this);

            if ($input.is(':checked')) {
              if ($sidebar_img_container.length != 0) {
                $sidebar_img_container.fadeIn('fast');
                $sidebar.attr('data-image', '#');
              }

              if ($full_page_background.length != 0) {
                $full_page_background.fadeIn('fast');
                $full_page.attr('data-image', '#');
              }

              background_image = true;
            } else {
              if ($sidebar_img_container.length != 0) {
                $sidebar.removeAttr('data-image');
                $sidebar_img_container.fadeOut('fast');
              }

              if ($full_page_background.length != 0) {
                $full_page.removeAttr('data-image', '#');
                $full_page_background.fadeOut('fast');
              }

              background_image = false;
            }
          });

          $('.switch-sidebar-mini input').change(function() {
            $body = $('body');

            $input = $(this);

            if (md.misc.sidebar_mini_active == true) {
              $('body').removeClass('sidebar-mini');
              md.misc.sidebar_mini_active = false;

              $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

            } else {

              $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

              setTimeout(function() {
                $('body').addClass('sidebar-mini');

                md.misc.sidebar_mini_active = true;
              }, 300);
            }

            // we simulate the window Resize so the charts will get updated in realtime.
            var simulateWindowResize = setInterval(function() {
              window.dispatchEvent(new Event('resize'));
            }, 180);

            // we stop the simulation of Window Resize after the animations are completed
            setTimeout(function() {
              clearInterval(simulateWindowResize);
            }, 1000);

          });
        });
      });
    </script>
    <script>
      $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        md.initDashboardPageCharts();

      });
    </script>
</body>

</html>