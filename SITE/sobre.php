<!DOCTYPE html>
  <html>
    <head>
	<meta charset="UTF-8">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="CSS/estilogaleria.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="CSS/sobre.css"  media="screen,projection"/>

	<link rel="stylesheet" href="css/footer-basic-centered.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  

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
	<center><div >
	<h1>HEMOCENTRO DE GOIÁS</h1>
	<h3>Unidade de coleta e transfusão de Iporá</h3>
	<p>A UCT, foi inaugurada em 2004 em parceria entre o estado de goiás e o município de Iporá. <br>Nosso horário de doação e das 07h às 16h, de segunda à sexta-feira.</p>
	<p></p>
	</div></center>
		      <div class="col s12 m8 offset-m2 l6 offset-l3" style="width: 40%; position: relative; left: 30%;">
        <div class="card-panel grey lighten-5 z-depth-1">
          <div class="row valign-wrapper">
            <div class="col s2">           
				<i class="mediun material-icons"> account_circle</i>
             <!-- notice the "circle" class -->
            </div>
            <div class="col s10">
              <span class="black-text">
                <h5>Dr. Danilo Rocha Borges</h5>
				Coordenador da UCT
              </span>
            </div>
          </div>
        </div>
      </div>
	  <div class="col s12 m8 offset-m2 l6 offset-l3" style="width: 40%; position: relative; left: 30%; "style="display: inline">
        <div class="card-panel grey lighten-5 z-depth-1">
          <div class="row valign-wrapper">
            <div class="col s2">           
				<i class="mediun material-icons"> account_circle</i>
             <!-- notice the "circle" class -->
            </div>
            <div class="col s10">
              <span class="black-text">
                <h5>Dr. Elias Gabriel de Almeida Júnior</h5>
				Responsável técnico pelo Banco de Sangue
              </span>
            </div>
          </div>
        </div>
      </div>
      <div id="caixa_foto" >

	<div id="galeria"  >
	<h1 class="espe">IMAGENS</h1>

 <ul class="img_marg" "> <li class="h" class="img_marg" style=" width: 20% " ><a href="#img1" ><img style="width: 100%; height: 100%;" src="imagens/1.jpeg" class="min"></a></li> 
	 <li class="h" style=" width: 20% "><a href="#img2"  ><img style="width: 100%; height: 100%;" src="imagens/2.jpg" class="min"></a></li>
	 <li class="h" style=" width: 20% "><a href="#img3"  ><img style="width: 100%; height: 100%;" src="imagens/3.jpg" class="min"></a></li> 
	 <li class="h" style=" width: 20% "><a href="#img4"  ><img style="width: 100%; height: 100%;" src="imagens/4.jpg" class="min"></a></li>
 </ul> 
</div>
 <div style="border: 1px solid red;" class="lbox hn" id="img1"> 
	 <div class="box_img"  style="width: 60%; margin: auto;" > <a href="#img4" class="btn" id="prev">&#171;</a> 
		 <a href="sobre.php" class="btn" id="close">X</a> <img src="imagens/1.jpeg"> 
		 <a href="#img2" class="btn" id="next">&#187;</a> </div> 
</div> 
	 <div class="lbox hn" id="img2"> 
		<div class="box_img" style="width: 60%; margin: auto;"> <a href="#img1" class="btn" id="prev">&#171;</a> 
		<a href="sobre.php" class="btn" id="close">X</a> <img src="imagens/2.jpg"> 
		<a href="#img3" class="btn" id="next">&#187;</a> 
		</div>
	</div> 
	<div class="lbox hn" id="img3"> 
	<div class="box_img" style="width: 60%; margin: auto;"> 
	<a href="#img2" class="btn" id="prev">&#171;</a> 
	<a  href="#" class="btn" id="close">X</a> <img src="imagens/3.jpg"> 
	<a href="#img4" class="btn" id="next">&#187;</a> </div> 
	</div> 
	<div class="lbox hn" id="img4"> 
	<div class="box_img" style="width: 60%; margin: auto;"> 
	<a href="#img3" class="btn" id="prev">&#171;</a> 
	<a href="sobre.php" class="btn" id="close">X</a> <img src="imagens/4.jpg"> 
	<a href="#img1" class="btn" id="next">&#187;</a> </div> 
	</div>
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
