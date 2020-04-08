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
		<li><a href="sobre.php">Sobre nós</a></li>
		<li><a href="doar.php">Como doar</a></li>
        <li><a href="campanhas.php">Campanhas</a></li>
        <li><a href="contatos.php">Contatos</a></li>
        <li><a href="hemorede.php">Login</a></li>
      </ul>
      </div>
    </nav>


      

  <div id="local-login">
    <h3>Entrar</h3>
    <form id="formulario" method="POST" action="php_bancodados/validar_usuario.php">
  
    <label>E-mail:</label>
    <input type="email" name="email" placeholder="Digite seu e-mail" required="required"><br><br>
    <label>Senha:</label>
    <input type="password" name="senha" placeholder="Digite sua senha" required="required"><br><br>
	<label>
        <input name="admin" type="checkbox" value="admin" />
        <span>Admin</span>
      </label>
	<br><br>
     <button class="btn waves-effect waves-light" type="submit" name="action">Acessar
    
  </button>
    </form>
    </div>
			<footer class="footer-basic-centered">

			<p class="footer-company-motto">Hemocentro</p>

			<p class="footer-links">

			</p>

			<p class="footer-company-name">Company &copy; 2019</p>

		</footer>
<!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>


    </body>
  </html>