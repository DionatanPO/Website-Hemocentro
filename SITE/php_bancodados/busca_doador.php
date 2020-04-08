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
      <a href="/sobre.php" class="brand-logo">Hemocentro</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">

      </div>
    </nav>

	<?php
	include_once("conexao.php");
	$nome_doador = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING);
	if(empty($_POST['nome'])) { 
		echo' <div class="row">
			<div class="col s12 m6">
			  <div class="card red darken-4">
				<div class="card-content white-text">
				  <span class="card-title">Ops!</span>
				  <p>O campo nome esta em branco!</p>
				</div>
				<div class="card-action">
				  <a href="javascript:history.back()" class="white-text text-darken-2">Voltar</a>
				  
				</div>
			  </div>
			</div>
		  </div>';
		
	}else{
	$sql = "SELECT * FROM doador";
	
	
	$existeusuario = 0;
	$res = mysqli_query( $conn, $sql ) or die( mysqli_error( $conn ) );
		echo '<table class="striped" class="highlight">
	<thead style="color: #d63939;">
	
          <tr>
              <th>Nome</th>
              <th>Sexo</th>
			  <th>identidade</th>
			   <th>peso</th>
			  <th>altura</th>
			  <th>celular</th>
			  <th>cep</th>
			  <th>datanasc</th>
			  <th>etinia</th>
			  <th>cidade</th>
			  <th>nacionalidade</th>
			  <th>profissao</th>
			  <th>estadocivil</th>
			   <th>escolaridade</th>
			   <th>email</th>
          </tr>
        </thead>
	';
	
	
	while($row_doador = mysqli_fetch_assoc($res)){
		if($row_doador['nome'] == $nome_doador ){
			
			$existeusuario = 1;			
					echo '
			<tbody>
          <tr>
            <td>'.$row_doador['nome'].'</td>
			<td>'.$row_doador['sexo'].'</td>
			<td>'.$row_doador['identidade'].'</td>
			<td>'.$row_doador['peso'].'</td>
			<td>'.$row_doador['celular'].'</td>
			<td>'.$row_doador['cep'].'</td>
			<td>'.$row_doador['datanasc'].'</td>
			<td>'.$row_doador['etinia'].'</td>
			<td>'.$row_doador['cidade'].'</td>
			<td>'.$row_doador['nacionalidade'].'</td>
			<td>'.$row_doador['profissao'].'</td>
			<td>'.$row_doador['estadocivil'].'</td>
			<td>'.$row_doador['escolaridade'].'</td>
			<td>'.$row_doador['email'].'</td>
          </tr>
		  </thead>';
		} else{
		
		
		}
		
	}
	if($existeusuario == 1){

		
				echo' <center><div class="row" style="position: relative; left: 23%;">
			<div class="col s12 m6">
			  <div class="card red darken-4">
				<div class="card-content white-text">
				  <span class="card-title">'." $nome_doador ".'</span>
				  <p>  Já possui cadastro!</p>
				</div>
				<div class="card-action">
				  <a href="javascript:history.back()" class="white-text text-darken-2">Voltar</a>
				  
				</div>
			  </div>
			</div>
		  </div></center>';


		  
		  
		  
		  
	}if($existeusuario == 0){
						echo' <center><div class="row" style="position: relative; left: 23%;">
			<div class="col s12 m6">
			  <div class="card red darken-4">
				<div class="card-content white-text">
				  <span class="card-title">'." $nome_doador ". '</span>
				  <p> não possui cadastro! Deseja cadastrar o doador?</p>
				</div>
				<div class="card-action">
				  <a href="javascript:history.back()" class="white-text text-darken-2">Não</a>
				  <a href="/formulario.php">Sim! Cadastrar doador</a>
				</div>
			  </div>
			</div>
		  </div></center>';
		
		
	}
	}
	
	?>


      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>  
       </body>
  </html>