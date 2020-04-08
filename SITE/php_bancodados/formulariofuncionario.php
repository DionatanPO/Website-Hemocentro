<!DOCTYPE html>
  <html>
    <head>
		<meta charset="UTF-8">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="/css/materialize.css"  media="screen,projection"/>
       <link type="text/css" rel="stylesheet" href="/css/pagina_hemorede.css" />

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  <link rel="stylesheet" href="css/footer-basic-centered.css">
    </head>

    <body>
    <nav>
      <div class="nav-wrapper">
      <a href="sobre.php" class="brand-logo">Hemocentro</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      </div>
    </nav>
<?php
	include_once("conexao.php");
	
	$nome_fun = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
	$senha = filter_input(INPUT_POST,'senha', FILTER_SANITIZE_STRING);
	
	$sql = "SELECT * FROM funcionario";
	
	
	$existeusuario = 0;
	$res = mysqli_query( $conn, $sql ) or die( mysqli_error( $conn ) );
	while($row_fun = mysqli_fetch_assoc($res)){
		if($row_fun['nome_funcionario'] == $nome_fun ){
			
			$existeusuario = 1;	
		} 
		
	}
	if($existeusuario == 1){

		
			echo' <center><div class="row" style="position: relative; left: 23%;">
			<div class="col s12 m6">
			  <div class="card red darken-4">
				<div class="card-content white-text">
				  <span class="card-title">Obs!</span>
				  <p> O '." $nome_fun ".' Já possui cadastro!</p>
				</div>
				<div class="card-action">
				  <a href="javascript:history.back()" class="white-text text-darken-2">Voltar</a>
				  
				</div>
			  </div>
			</div>
		  </div></center>';
	}else  {
		$sql = "INSERT INTO funcionario (nome_funcionario,email,senha ) VALUES ('$nome_fun','$email','$senha')";
		$res = mysqli_query( $conn, $sql ) or die( mysqli_error( $conn ) );
		
		echo' <center><div class="row" style="position: relative; left: 23%;">
			<div class="col s12 m6">
			  <div class="card red darken-4">
				<div class="card-content white-text">
				  <span class="card-title">Ok!</span>
				  <p>O funcionario(a) '." $nome_fun ".' foi cadastrado com sucesso!</p>
				</div>
				<div class="card-action">
				  <a href="javascript:history.back()" class="white-text text-darken-2">Cadastrar mais funcionario.</a>
				  
				</div>
			  </div>
			</div>
		  </div></center>';
	}
	
	
	?>
     <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>