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

    </head>

    <body>
    <nav>
      <div class="nav-wrapper">
      <a href="sobre.php" class="brand-logo">Hemocentro</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li>
        <li><a href="hemorede.php">Sair</a></li>
      </ul>
      </div>
    </nav>


      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
<div >
<div class="row">
    <div class="col s12 m6">
      <div class="card">
        <div class="card-content">
          <h5 class="card-title">Preencher formulário do doador </h5><a class="btn-floating halfway-fab waves-effect waves-light red"  href="formulario.php"><i class="material-icons">add</i></a>
          <p>Cadastro de doadores de sangue.</p>
		  
        </div>
      </div>
    </div>
  </div>
</div>

<!-- --------- -->
<div style="display: inline">
  <div class="row">
    <div class="col s12 m6">
      <div class="card">
    
        <div class="card-content">
          <h5 class="card-title">Gerenciar estoque de sangue</h5><a class="btn-floating halfway-fab waves-effect waves-light red" href="estoque.php"><i class="material-icons">opacity</i></a>
          <p>Entre para consultar, alterar quantidade de sangue no estoque.</p>
        </div>
      </div>
    </div>
  </div>
        </div>
		

 
	  <div style="display: inline">
  <div class="row">
    <div class="col s12 m6">
      <div class="card">
    
        <div class="card-content">
          <h5 class="card-title">Consultar cadastro de doador</h5>
		  <form id="buscaDoador" method="POST" action="/php_bancodados/busca_doador.php">
		  <label>Nome</label>
			<input type="text" name="nome" placeholder="Digite o nome do doador" style="width: 60%" required="required">
		  <button class="btn-floating halfway-fab waves-effect waves-light red" type="submit"><i class="material-icons">person</i></button>
          </form>
        </div>
      </div>
    </div>
  </div>
        </div>

	  
    </body>
  </html>