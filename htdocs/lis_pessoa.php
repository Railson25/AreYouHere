
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
		  <div class="intro-heading text-uppercase">Sua lista de pessoas</div>
       
      </div>
    </header>
    
    <?php

$conexao = mysqli_connect('localhost','root','');
$banco = mysqli_select_db($conexao,'projeto');
mysqli_set_charset($conexao,'utf8');
$a = $_POST['adm'];
 
$sql = mysqli_query($conexao,"select * from pessoa") or die("Erro");
print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>Administrador</th>";
		print "<th>Nome</th>";
		print "<th>CPF</th>";
		print "<th>E-mail</th>";
		print "<th>Telefone</th>";
		print "<th>Status</th>";
		print "</tr>";
while($dados=mysqli_fetch_assoc($sql))
    {
    	if($dados['nome_pessoa'] == $a){
    		print "<tr>";
			
			print "<td>".$dados["admin_nome"]."</td>";
			print "<td>".$dados["nome_pessoa"]."</td>";
			print "<td>".$dados["cpf"]."</td>";
			print "<td>".$dados["email"]."</td>";
			print "<td>".$dados["fone"]."</td>";
			

      //  echo '<center>'.$dados['nome_pessoa'].' / ';
      //  echo $dados['cpf'].' / ';
       // echo $dados['email'].' / ';
       // echo $dados['fone'].'  ';
        	if($dados['presenca'] == 0){
        		//echo 'não está presente <br>';
        		print "<td>Não está presente</td>";
        	}else{
        		//echo 'presente  <br>';
        		print "<td>Está presente</td>";
        	}
    }
    }

    echo '<center><a href="lerqr.html"><button type="button" class="btn btn-success" >Fazer chamada</button></a>';




?>



    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <script src="js/agency.min.js"></script>

  </body>

</html>