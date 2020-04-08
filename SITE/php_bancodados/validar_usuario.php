
<!DOCTYPE html>
<html lang="pt-br">
	<header>
		<meta charset="utf-8">
				 <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="/css/materialize.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


	</header>
	<body>
		<div>
<?php

	$var = include_once("conexao.php");
	$email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
	$senha = filter_input(INPUT_POST,'senha', FILTER_SANITIZE_STRING);
	$admin = filter_input(INPUT_POST,'admin', FILTER_SANITIZE_STRING);
	
	if($admin == "admin"){
	$sql = "SELECT * FROM coordenador";
	$res = mysqli_query( $conn, $sql ) or die( mysqli_error( $conn ) );
	$val = 0;
	$id = 0;
	while($row_funcionario = mysqli_fetch_assoc($res)){

		if($row_funcionario['email'] == $email && $row_funcionario['senha'] == $senha){
			$val += 1;
			$id = $row_funcionario['idCoordernador'];
		}else {
		}
	}
	 $_SESSION['id'] = $id;
	if($val > 0){
		header("Location: ../administrador.php");
	}else{
		echo' <center><div class="row" style="position: relative; left: 23%;">
    <div class="col s12 m6">
      <div class="card red darken-4">
        <div class="card-content white-text">
          <span class="card-title">Ops!</span>
          <p>Coordenador não encontrado, verifique seu email ou senha!</p>
        </div>
        <div class="card-action">
          <a href="javascript:history.back()" class="white-text text-darken-2">Voltar</a>
          
        </div>
      </div>
    </div>
  </div></center>';

		
		
	}
	}else {
	
	$sql = "SELECT * FROM funcionario";
	$res = mysqli_query( $conn, $sql ) or die( mysqli_error( $conn ) );
	$val = 0;
	$id = 0;
	while($row_funcionario = mysqli_fetch_assoc($res)){

		if($row_funcionario['email'] == $email && $row_funcionario['senha'] == $senha){
			$val += 1;
			$id = $row_funcionario['idFuncionario'];
		}else {
		}
	}
	 $_SESSION['idd'] = $id;
	if($val > 0){
		echo "teste";
		header("Location: ../admin.php");
	}else{
		echo' <center><div class="row" style="position: relative; left: 23%;">
    <div class="col s12 m6">
      <div class="card red darken-4">
        <div class="card-content white-text">
          <span class="card-title">Ops!</span>
          <p>Funcionario não encontrado, verifique seu email ou senha!</p>
        </div>
        <div class="card-action">
          <a href="javascript:history.back()" class="white-text text-darken-2">Voltar</a>
          
        </div>
      </div>
    </div>
  </div></center>';

		
		
	}
	}
	


?>

		</div>
		<!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
	</body>
</html>