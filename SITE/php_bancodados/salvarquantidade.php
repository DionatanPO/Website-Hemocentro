<!DOCTYPE html>
  <html>
    <head>
	<meta charset="UTF-8">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="/css/materialize.css"  media="screen,projection"/>
       <link type="text/css" rel="stylesheet" href="/css/pagina_hemorede.css" />
	   <link rel="stylesheet" href="css/footer-basic-centered.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
    <nav>
      <div class="nav-wrapper">
      <a href="sobre.php" class="brand-logo">Hemocentro</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">

      </div>
    </nav>
<?php
	$result_grupo = filter_input(INPUT_POST,'result_grupo', FILTER_SANITIZE_STRING);
	$quantidade = filter_input(INPUT_POST,'quantidade', FILTER_SANITIZE_STRING);
	$escolha = filter_input(INPUT_POST,'acao', FILTER_SANITIZE_STRING);
	include_once("conexao.php");
	$qttipo1 = 0;

	$id_estoque = 0;
	$campos = 0;
	
	if(empty($_POST['result_grupo'])) { 
	
			echo' <div class="row">
			<div class="col s12 m6">
			  <div class="card red darken-4">
				<div class="card-content white-text">
				  <span class="card-title">Ops!</span>
				  <p>Campo  tipo sanguinio obrigatório!</p>
				</div>
				<div class="card-action">
				  <a href="javascript:history.back()" class="white-text text-darken-2">Voltar</a>
				  
				</div>
			  </div>
			</div>
		  </div>';
		$campos = 1; 
	}else if(empty($_POST['quantidade'])) { 
			echo' <div class="row">
			<div class="col s12 m6">
			  <div class="card red darken-4">
				<div class="card-content white-text">
				  <span class="card-title">Ops!</span>
				  <p>Campo  quantidade obrigatório!</p>
				</div>
				<div class="card-action">
				  <a href="javascript:history.back()" class="white-text text-darken-2">Voltar</a>
				  
				</div>
			  </div>
			</div>
		  </div>';
		
		$campos = 1; 
	} else if(empty($_POST['acao'])) { 
			echo' <div class="row">
			<div class="col s12 m6">
			  <div class="card red darken-4">
				<div class="card-content white-text">
				  <span class="card-title">Ops!</span>
				  <p>Selecione uma das opções adicionar ou remover</p>
				</div>
				<div class="card-action">
				  <a href="javascript:history.back()" class="white-text text-darken-2">Voltar</a>
				  
				</div>
			  </div>
			</div>
		  </div>';
		
		$campos = 1; 
	}else {
	
	$sql3 = "SELECT * FROM estoquesangue";
	
	echo $result_grupo;
	if($escolha == "1"){
		$resss = mysqli_query( $conn, $sql3 ) or die( mysqli_error( $conn ) );
		while($row_estoque = mysqli_fetch_assoc($resss)){
			if($row_estoque['tipo'] == $result_grupo ){
				$id_estoque = $row_estoque['idestoque'];
				$qttipo1 = $quantidade;
				$qttipo1 += $row_estoque['quantidade'];			
				$sql4 = "UPDATE estoquesangue SET quantidade = ('$qttipo1') WHERE idestoque = '$id_estoque' ";	
				$result = mysqli_query( $conn, $sql4 ) or die( mysqli_error( $conn ) );
				break;		
			} 
			}
			if($id_estoque > 0){
				header("Location: /estoque.php");
				
			}
	}if($escolha == "2"){
		$resss = mysqli_query( $conn, $sql3 ) or die( mysqli_error( $conn ) );
		while($row_estoque = mysqli_fetch_assoc($resss)){
			if($row_estoque['tipo'] == $result_grupo ){
				$id_estoque = $row_estoque['idestoque'];
				$qttipo1 = $row_estoque['quantidade'];	
				$qttipo1 -= $quantidade;
				$sql4 = "UPDATE estoquesangue SET quantidade = ('$qttipo1') WHERE idestoque = '$id_estoque' ";	
				$result = mysqli_query( $conn, $sql4 ) or die( mysqli_error( $conn ) );
				break;		
			} 
			}
			if($id_estoque > 0){
				header("Location: /estoque.php");
				
			}
	}
	}
?>		<footer class="footer-basic-centered">

			<p class="footer-company-motto">Hemocentro</p>

			<p class="footer-links">

			</p>

			<p class="footer-company-name">Company &copy; 2019</p>

		</footer>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>  
       </body>
  </html>