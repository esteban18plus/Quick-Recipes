<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Crear Receta</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="../assets/lineicons/style.css">    
     <link rel="stylesheet" type="text/css" href="../assets/css/zabuto_calendar.css">
    <!-- Custom styles for this template -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style-responsive.css" rel="stylesheet">
    <link href="../assets/css/MyStyle.css" rel="stylesheet" />
    <script src="../assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="ctrIndex.php" class="logo"><b  >Quick Recipes</b></a>
            <!--logo end-->
    
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                <li>
                                     <form name="formulario"method="POST"action='<?php echo $_SERVER['PHP_SELF']; ?>' >
                    <input type="hidden" name="cerrar">
                    <button type="submit" class="btn btn-default" name="cerrar" id="btn-cerrar">Cerrar sessi&oacute;n</button>
                  </form>
                  </li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside >
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="ctrIndex.php"><img src="../assets/img/Quick-Recipes.jpg"  width="60" class="img-circle"></a></p>
              	  <h5 class="centered" >Quick Recipes</h5>
              	  	


                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cutlery"></i>
                          <span>Recetas</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="ctrRecetas.php">Ver</a></li>
                          <li><a  href="ctrCrearReceta.php">Crear </a></li>
                          <li><a  href="#">Modificar </a></li>
                          <li><a  href="ctrClasificaciones.php">Clasificacion </a></li>
                      </ul>
                  </li>
                 
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <br>
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Crea, Aprende, Disfruta... Quick Recipes</h3>
          	<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">
                      <h4>Recetas</h4>
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th>Identificador</th>
                                  <th>Nombre</th>
                                  <th>Categoria</th>
                                  <th>Descripcion</th>
                                  <th>Usuario</th>
                                  <th>Opcion</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php echo $recetas; ?>
                              </tbody>
                          </table>
                          </section>
		
		  	</div><!-- /row -->
          		</div>
          	</div>
		</section>
            
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
       

          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2015 -Quick Recipes
              <a href="ctrIndex.php#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/jquery-1.8.3.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="../assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../assets/js/jquery.scrollTo.min.js"></script>
    <script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="../assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="../assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="../assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="../assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="../assets/js/sparkline-chart.js"></script>    

	

  

  </body>
</html>


<!--Nueva PAGINA