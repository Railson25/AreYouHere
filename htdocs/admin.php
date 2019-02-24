<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Are You Here?</title>

  
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

   
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

   
    <link href="css/agency.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <center><a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="img/logo.png" width="50%" height="50%"></src></a></center>
      </div>
    </nav>

    <header class="masthead">
      <div class="container">
        <div class="intro-text">
		  <div class="intro-heading text-uppercase">Are You Here?!</div>
          <div class="intro-lead-in">Adicione pessoas a sua lista de presença!</div>
			<a href="cad_pessoa.html"><button type="button" class="btn btn-success" >Cadastrar Pessoa</button></a>
		</div>
      </div>
    </header>
    <?php
      $adm = $_GET['nome'];

      echo "<center><form action='lis_pessoa.php' method='POST'>;
            <input type='hidden' name='adm' value='$adm'>
            <button type='submit'  class='btn btn-primary'>Gerenciar suas pessoas</button></center>"
      


    ?>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Are You Here?&copy 2018</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>


    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <script src="js/agency.min.js"></script>

  </body>

</html>