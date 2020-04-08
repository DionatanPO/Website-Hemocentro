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

	<div style="width: 70%; position: relative; left: 15%;">
      <form action="php_bancodados/formulariofuncionario.php" method="POST">
      	<fieldset>
      		<legend>Identificação</legend>
      		<table style="">
      		<tr>
      			<td>
				<label>*Nome</label>
				<input type="text" name="nome" placeholder="Digite o nome do funcionario" style="width: 60%" required="required">
				 &nbsp &nbsp
				</td>
				
			 </tr>
			 <tr>
      			<td>
				<label>*E-mail</label>
				<input type="text" name="email" placeholder="Digite email" style="width: 60%" required="required">
				 &nbsp &nbsp
				</td>
			 </tr>
			 <tr>
      			<td>
				<label>*Senha</label>
				<input type="text" name="senha" placeholder="Digite a senha" style="width: 60%" required="required">
				 &nbsp &nbsp
				</td>
			 </tr>
			</table>
			<label  class="btn waves-effect waves-light"  ><a href="/administrador.php" class="white-text text-darken-2">Cancelar</a> </label>
			<button style="display: inline;" class="btn waves-effect waves-light" type="submit" name="action">Cadastrar funcionario</button>

			 </form>
			 
	</div>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>  
       </body>
  </html>