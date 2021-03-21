<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mini Complejo Turistico Bella Vista, Iglesia, San Juan, Argentina.">
    <meta name="author" content="Complejo Bella Vista">
    <link rel="shortcut icon" href="img/logos/favicon.png">

    <title>Complejo Bella Vista</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/complejopaginas.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-53059304-1', 'auto');
      ga('send', 'pageview');
    </script>
    
  </head>

  <body>

    <nav class="navbar" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html"><img class="img-responsive" src="img/logos/logocolores.png"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
           <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li >
                      <a href="cabana-gildo.html">ALOJAMIENTO</a>
                    </li>
                    <!-- <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">ALOJAMIENTO<span class="caret"></span></a>
                      <ul class="dropdown-menu dropdown-menu-left" role="menu">
                        <li><a href="alojamiento.html">CABAÑAS</a></li>
                        <li><a href="dormis.html">DORMIS</a></li>
                      </ul>
                    </li> -->
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">CAMPING<span class="caret"></span></a>
                      <ul class="dropdown-menu dropdown-menu-left" role="menu">
                        <li><a href="camping.html">CAMPING</a></li>
                        <li><a href="gruposguiados.html">CONTINGENTES</a></li>
                      </ul>
                    </li>

                    <li >
                      <a href="actividades.html">ACTIVIDADES</a>
                    </li>
                    <!-- <li>
                      <a href="huerta.html">HUERTA</a>
                    </li> -->
                    
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">CONTACTO <span class="caret"></span></a>
                      <ul class="dropdown-menu dropdown-menu-left" role="menu">
                        <li><a href="contact.php">RESERVAS</a></li>
                        <li><a href="ubicacion.html">UBICACION</a></li>
                        <li><a href="transporte.html">TRANSPORTE</a></li>
                      </ul>
                    </li>
                </ul>
            </div>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <!-- /.container --> 
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Reservas</h1>
          <ol class="breadcrumb">
            <li><a href="index.html">Principal</a></li>
            <li class="active">Reservas</li>
          </ol>
        </div>
      </div>
    </div>  
    <div class="container"> 
      <!-- row -->
      <div class="row">
        <div class="col-sm-8">
          <h3>Escribinos</h3>
      <?php  

                // check for a successful form post  
                if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
          
                // check for a form error  
                elseif (isset($_GET['e'])) echo "<div class=\"alert alert-danger\">".$_GET['e']."</div>";  

      ?>
            <form role="form" method="POST" action="contact-form-submission.php">
              <div class="row">
                <div class="form-group col-lg-4">
                  <label for="input1">Nombre</label>
                  <input type="text" name="contact_name" class="form-control" id="input1">
                </div>
                <div class="form-group col-lg-4">
                  <label for="input2">Email</label>
                  <input type="email" name="contact_email" class="form-control" id="input2">
                </div>
                <div class="form-group col-lg-4">
                  <label for="input3">Teléfono</label>
                  <input type="phone" name="contact_phone" class="form-control" id="input3">
                </div>
                <div class="clearfix"></div>
                <div class="form-group col-lg-12">
                  <label for="input4">Mensaje</label>
                  <textarea name="contact_message" class="form-control" rows="6" id="input4"></textarea>
                </div>
                <div class="form-group col-lg-12">
                  <input type="hidden" name="save" value="contact">
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
              </div>
            </form>
        </div>
        <div class="col-sm-4">
          
            <h3>Contactanos</h3>
            <div class="col-lg-12">
            <!--<p><i class="fa fa-phone"></i> Daniel <strong>+54 264 5826496</strong></p>
            <p><i class="fa fa-phone"></i> Pablo <strong>+54 264 4450828</strong></p>-->
            <p><i class="fa fa-phone"></i>  Bella Vista <strong>02647 496036</strong></p>
            
            <p><i class="fa fa-envelope-o"></i> <a href="campingbv@gmail.com"> campingbv@gmail.com</a></p>
            <p><i class="fa fa-clock-o"></i>  Lunes - Domingo: 9:00 hs a 21:00 hs</p>
            <p><i class="glyphicon glyphicon-picture"></i> Calle Principal Sin Numero, Bella Vista</p>
          </div>  
        </div>
      </div>
    </div>  

    <!-- FOOTER -->
    <div id="footer">      
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <i class="fa fa-phone"></i> Tel: 02647 496036
                </div>  
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <i class="fa fa-envelope-o"></i><a href="campingbv@gmail.com"> Mail: campingbv@gmail.com</a>
                </div>
                <div class="hidden-xs col-sm-3 col-md-3 col-lg-3">
                    <a target="_blank" href="https://www.facebook.com/pages/Complejo-Bella-Vista/413612848719228?ref_type=bookmark" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-fw"></i> Facebook</a>
                </div>
                <div class="hidden-xs col-sm-3 col-md-3 col-lg-3">
                    <p>Camping Bella Vista 1995 &middot; 2018</p>
                    <p>
                      <?php echo date("Y");?>
                    </p>
                </div>
            </div>
        </div>
    </div>
      <!-- FOOTER -->

    <!-- JavaScript -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

  </body>
</html>

