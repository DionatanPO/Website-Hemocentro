<!DOCTYPE html>
  <html>
    <head>
	<meta charset="UTF-8">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
       <link type="text/css" rel="stylesheet" href="css/pagina_hemorede.css" />

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


      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
<div >
<?php
	$var = include_once("php_bancodados/conexao.php");
	$sql = "SELECT * FROM estoquesangue";
	$res = mysqli_query( $conn, $sql ) or die( mysqli_error( $conn ) );
	$tipo1 = "A+";
	$tipo2 = "A-";
	$tipo3 = "B+";
	$tipo4 = "B-";
	$tipo5 = "AB+";
	$tipo6 = "AB-";
	$tipo7 = "O+";
	$tipo8 = "O-";


	$id = 0;
	echo '<table class="striped" class="highlight">';
	while($row_sangue = mysqli_fetch_assoc($res)){
	
		if($row_sangue['tipo'] == $tipo1){
	
        echo '<thead>
          <tr>
              <th>&nbsp&nbspTipo</th>
              <th>Quantidade atual em ml</th>

          </tr>
        </thead>

        <tbody>
          <tr>
            <td>&nbsp&nbsp A+</td>
            <td>'.$row_sangue['quantidade'].' ml</td>
          </tr>';
		}
		if($row_sangue['tipo'] == $tipo2){
	
        echo '
          <tr>
            <td>&nbsp&nbsp A-</td>
            <td>'.$row_sangue['quantidade'].' ml</td>
          </tr>';
		}
		if($row_sangue['tipo'] == $tipo3){
	
        echo '
          <tr>
            <td>&nbsp&nbsp B+</td>
            <td>'.$row_sangue['quantidade'].' ml</td>
          </tr>';
		}
		if($row_sangue['tipo'] == $tipo4){
	
        echo '
          <tr>
            <td> &nbsp&nbspB-</td>
            <td>'.$row_sangue['quantidade'].' ml</td>
          </tr>';
		}
		if($row_sangue['tipo'] == $tipo5){
			
        echo '
          <tr>
            <td>&nbsp&nbsp AB+</td>
            <td>'.$row_sangue['quantidade'].' ml</td>
          </tr>';
		}
		if($row_sangue['tipo'] == $tipo6){
			
        echo '
          <tr>
            <td>&nbsp&nbsp AB-</td>
            <td>'.$row_sangue['quantidade'].' ml</td>
          </tr>';
		}
		if($row_sangue['tipo'] == $tipo7){

        echo '
          <tr>
            <td>&nbsp&nbsp O+</td>
            <td>'.$row_sangue['quantidade'].' ml</td>
          </tr>';
		}
		if($row_sangue['tipo'] == $tipo8){
        echo '
          <tr>
            <td>&nbsp&nbsp O-</td>
            <td>'.$row_sangue['quantidade'].' ml</td>
          </tr>
		  </tbody>
		  </table>';
		}
	}
	echo '<center>Adicionar ou remova um quantidade especifica, escolha um tipo saguinio</center> 
	 <form id="buscaDoador" method="POST" action="/php_bancodados/salvarquantidade.php">
		  <select class="browser-default" style="width: 20%; display: inline; " name="result_grupo" required="required">
			<option value="" disabled selected>Escolha</option>
				<option value="A+">A+</option>
				<option value="A-">A-</option>
				<option value="B+">B+</option>
				<option value="B-">B-</option>
				<option value="AB+">AB+</option>
				<option value="AB-">AB-</option>
				<option value="O+">O+</option>
				<option value="O-">O-</option>
			</select>
				<label>Quantidade: </label>
			<input type="text" name="quantidade" placeholder="Digite a quantidade" style="width: 20%;" required="required">
			 <label >
        <input name="acao" type="radio" value="1" required="required"/>
        <span>Adicionar</span>
      </label>
	  <label >
        <input name="acao" type="radio" value="2" required="required"/>
        <span>Remover</span>
      </label>
	  <label  class="btn waves-effect waves-light"  ><a href="/administrador.php" class="white-text text-darken-2">Cancelar</a> </label>
		   <button class="btn waves-effect waves-light" type="submit" name="action">salvar alterações</button>
          </form>
	';


?>


    </body>
	

  </html>