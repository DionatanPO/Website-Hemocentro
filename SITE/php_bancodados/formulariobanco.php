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
 ini_set('default_charset','UTF-8');
$ident_nome = filter_input(INPUT_POST,'ident_nome', FILTER_SANITIZE_STRING);
$ident_data = filter_input(INPUT_POST,'ident_data', FILTER_SANITIZE_STRING);

$data = filter_input(INPUT_POST,'data', FILTER_SANITIZE_STRING);
$ident_sexo = filter_input(INPUT_POST,'ident_sexo', FILTER_SANITIZE_STRING);
$etinia = filter_input(INPUT_POST,'etinia', FILTER_SANITIZE_STRING);
$ident_pai = filter_input(INPUT_POST,'ident_pai', FILTER_SANITIZE_STRING);
$ident_mae = filter_input(INPUT_POST,'ident_mae', FILTER_SANITIZE_STRING);
$ident_nacionalidade = filter_input(INPUT_POST,'ident_nacionalidade', FILTER_SANITIZE_STRING);

$ident_naturalidade = filter_input(INPUT_POST,'ident_naturalidade', FILTER_SANITIZE_STRING);

$ident_uf = filter_input(INPUT_POST,'ident_uf', FILTER_SANITIZE_STRING);

$ident_identidade = filter_input(INPUT_POST,'ident_identidade', FILTER_SANITIZE_STRING);

$ident_expeditor = filter_input(INPUT_POST,'ident_expeditor', FILTER_SANITIZE_STRING);

$ident_profissao = filter_input(INPUT_POST,'ident_profissao', FILTER_SANITIZE_STRING);

$estado_civil = filter_input(INPUT_POST,'estado_civil', FILTER_SANITIZE_STRING);

$escolaridade = filter_input(INPUT_POST,'escolaridade', FILTER_SANITIZE_STRING);

//dados endereço-------------------------------
$ident_endereco = filter_input(INPUT_POST,'ident_endereco', FILTER_SANITIZE_STRING);

$ident_bairro = filter_input(INPUT_POST,'ident_bairro', FILTER_SANITIZE_STRING);

$ident_cep = filter_input(INPUT_POST,'ident_cep', FILTER_SANITIZE_STRING);

$ident_cidade = filter_input(INPUT_POST,'ident_cidade', FILTER_SANITIZE_STRING);

$ident_cep = filter_input(INPUT_POST,'ident_cep', FILTER_SANITIZE_STRING);

//dados comunicaçao----------------------
$ident_telefone = filter_input(INPUT_POST,'ident_telefone', FILTER_SANITIZE_STRING);

$ident_celular = filter_input(INPUT_POST,'ident_celular', FILTER_SANITIZE_STRING);

$ident_email = filter_input(INPUT_POST,'ident_email', FILTER_SANITIZE_STRING);


//Triagem tecnica---------------------------------
$tec_altura = (float) filter_input(INPUT_POST,'tec_altura', FILTER_SANITIZE_STRING);

$tec_peso = filter_input(INPUT_POST,'tec_peso', FILTER_SANITIZE_STRING);

$tec_pa = filter_input(INPUT_POST,'tec_pa', FILTER_SANITIZE_STRING);

$tec_pulso = filter_input(INPUT_POST,'tec_pulso', FILTER_SANITIZE_STRING);

$tec_temperatura = filter_input(INPUT_POST,'tec_temperatura', FILTER_SANITIZE_STRING);

$tec_hb = filter_input(INPUT_POST,'tec_hb', FILTER_SANITIZE_STRING);


//Triagem Clinica-----------------------------
$clini_p1 = filter_input(INPUT_POST,'clini_p1', FILTER_SANITIZE_STRING);

$clini_p2 = filter_input(INPUT_POST,'clini_p2', FILTER_SANITIZE_STRING);

$clini_p3 = filter_input(INPUT_POST,'clini_p3', FILTER_SANITIZE_STRING);

$clini_p4 = filter_input(INPUT_POST,'clini_p4', FILTER_SANITIZE_STRING);

$clini_p5 = filter_input(INPUT_POST,'clini_p5', FILTER_SANITIZE_STRING);


//Pré-Triagem------------------------------
$pre_p1 = filter_input(INPUT_POST,'pre_p1', FILTER_SANITIZE_STRING);

$pre_p2 = filter_input(INPUT_POST,'pre_p2', FILTER_SANITIZE_STRING);

$pre_p3 = filter_input(INPUT_POST,'pre_p3', FILTER_SANITIZE_STRING);

$pre_p4 = filter_input(INPUT_POST,'pre_p4', FILTER_SANITIZE_STRING);

$pre_p5 = filter_input(INPUT_POST,'pre_p5', FILTER_SANITIZE_STRING);

$pre_p6 = filter_input(INPUT_POST,'pre_p6', FILTER_SANITIZE_STRING);

$pre_p7 = filter_input(INPUT_POST,'pre_p7', FILTER_SANITIZE_STRING);

//sintomas
$sint_1 = filter_input(INPUT_POST,'sint_1', FILTER_SANITIZE_STRING);

$sint_2 = filter_input(INPUT_POST,'sint_2', FILTER_SANITIZE_STRING);

$sint_3 = filter_input(INPUT_POST,'sint_3', FILTER_SANITIZE_STRING);

$sint_4 = filter_input(INPUT_POST,'sint_4', FILTER_SANITIZE_STRING);

$sint_5 = filter_input(INPUT_POST,'sint_5', FILTER_SANITIZE_STRING);

$pre_outros_p7 = filter_input(INPUT_POST,'pre_outros_p7', FILTER_SANITIZE_STRING);

$pre_p8 = filter_input(INPUT_POST,'pre_p8', FILTER_SANITIZE_STRING);

$pre_quando_p8 = filter_input(INPUT_POST,'pre_quando_p8', FILTER_SANITIZE_STRING);

$pre_motivo_p8 = filter_input(INPUT_POST,'pre_motivo_p8', FILTER_SANITIZE_STRING);

$pre_p9 = filter_input(INPUT_POST,'pre_p9', FILTER_SANITIZE_STRING);

$pre_quanto_p9 = filter_input(INPUT_POST,'pre_quanto_p9', FILTER_SANITIZE_STRING);


$pre_p10 = filter_input(INPUT_POST,'pre_p10', FILTER_SANITIZE_STRING);

$pre_p11 = filter_input(INPUT_POST,'pre_p11', FILTER_SANITIZE_STRING);

$pre_p12 = filter_input(INPUT_POST,'pre_p12', FILTER_SANITIZE_STRING);

$pre_p13 = filter_input(INPUT_POST,'pre_p13', FILTER_SANITIZE_STRING);

$pre_quando_p13 = filter_input(INPUT_POST,'pre_quando_p13', FILTER_SANITIZE_STRING);

$pre_p14 = filter_input(INPUT_POST,'pre_p14', FILTER_SANITIZE_STRING);

$pre_qual_p14 = filter_input(INPUT_POST,'pre_qual_p14', FILTER_SANITIZE_STRING);


$pre_p16 = filter_input(INPUT_POST,'pre_p16', FILTER_SANITIZE_STRING);

$pre_motivo_p16 = filter_input(INPUT_POST,'pre_motivo_p16', FILTER_SANITIZE_STRING);

$pre_p17 = filter_input(INPUT_POST,'pre_p17', FILTER_SANITIZE_STRING);

$pre_qual_p17 = filter_input(INPUT_POST,'pre_qual_p17', FILTER_SANITIZE_STRING);

$pre_p18 = filter_input(INPUT_POST,'pre_p18', FILTER_SANITIZE_STRING);

$pre_p19 = filter_input(INPUT_POST,'pre_p19', FILTER_SANITIZE_STRING);

$pre_p20 = filter_input(INPUT_POST,'pre_p20', FILTER_SANITIZE_STRING);

$pre_p21 = filter_input(INPUT_POST,'pre_p21', FILTER_SANITIZE_STRING);

$pre_p22 = filter_input(INPUT_POST,'pre_p22', FILTER_SANITIZE_STRING);

$pre_p23 = filter_input(INPUT_POST,'pre_p23', FILTER_SANITIZE_STRING);

$pre_p24 = filter_input(INPUT_POST,'pre_p24', FILTER_SANITIZE_STRING);

$pre_p25 = filter_input(INPUT_POST,'pre_p25', FILTER_SANITIZE_STRING);

$pre_p26 = filter_input(INPUT_POST,'pre_p26', FILTER_SANITIZE_STRING);

$pre_p27 = filter_input(INPUT_POST,'pre_p27', FILTER_SANITIZE_STRING);

$pre_p28 = filter_input(INPUT_POST,'pre_p28', FILTER_SANITIZE_STRING);

$pre_p29 = filter_input(INPUT_POST,'pre_p29', FILTER_SANITIZE_STRING);

$pre_p30 = filter_input(INPUT_POST,'pre_p30', FILTER_SANITIZE_STRING);

$pre_p31 = filter_input(INPUT_POST,'pre_p31', FILTER_SANITIZE_STRING);

$pre_p32 = filter_input(INPUT_POST,'pre_p32', FILTER_SANITIZE_STRING);

$pre_p33 = filter_input(INPUT_POST,'pre_p33', FILTER_SANITIZE_STRING);

$pre_p34 = filter_input(INPUT_POST,'pre_p34', FILTER_SANITIZE_STRING);

$pre_p35 = filter_input(INPUT_POST,'pre_p35', FILTER_SANITIZE_STRING);

$pre_p36 = filter_input(INPUT_POST,'pre_p36', FILTER_SANITIZE_STRING);

$pre_p37 = filter_input(INPUT_POST,'pre_p37', FILTER_SANITIZE_STRING);

//doenças----------------------------
$doenca_1 = filter_input(INPUT_POST,'doenca_1', FILTER_SANITIZE_STRING);
$doenca_2 = filter_input(INPUT_POST,'doenca_2', FILTER_SANITIZE_STRING);
$doenca_3 = filter_input(INPUT_POST,'doenca_3', FILTER_SANITIZE_STRING);
$doenca_4 = filter_input(INPUT_POST,'doenca_4', FILTER_SANITIZE_STRING);
$doenca_5 = filter_input(INPUT_POST,'doenca_5', FILTER_SANITIZE_STRING);
$doenca_6 = filter_input(INPUT_POST,'doenca_6', FILTER_SANITIZE_STRING);
$doenca_7 = filter_input(INPUT_POST,'doenca_7', FILTER_SANITIZE_STRING);
$doenca_8 = filter_input(INPUT_POST,'doenca_8', FILTER_SANITIZE_STRING);
$doenca_9 = filter_input(INPUT_POST,'doenca_9', FILTER_SANITIZE_STRING);
$doenca_10 = filter_input(INPUT_POST,'doenca_10', FILTER_SANITIZE_STRING);
$doenca_11 = filter_input(INPUT_POST,'doenca_11', FILTER_SANITIZE_STRING);
$doenca_12 = filter_input(INPUT_POST,'doenca_12', FILTER_SANITIZE_STRING);
$doenca_13 = filter_input(INPUT_POST,'doenca_13', FILTER_SANITIZE_STRING);
$doenca_14 = filter_input(INPUT_POST,'doenca_14', FILTER_SANITIZE_STRING);
$doenca_15 = filter_input(INPUT_POST,'doenca_15', FILTER_SANITIZE_STRING);
$doenca_16 = filter_input(INPUT_POST,'doenca_16', FILTER_SANITIZE_STRING);
$doenca_17 = filter_input(INPUT_POST,'doenca_17', FILTER_SANITIZE_STRING);
$doenca_18 = filter_input(INPUT_POST,'doenca_18', FILTER_SANITIZE_STRING);
$doenca_19 = filter_input(INPUT_POST,'doenca_19', FILTER_SANITIZE_STRING);
$doenca_20 = filter_input(INPUT_POST,'doenca_20', FILTER_SANITIZE_STRING);
$doenca_21 = filter_input(INPUT_POST,'doenca_21', FILTER_SANITIZE_STRING);
$doenca_22 = filter_input(INPUT_POST,'doenca_22', FILTER_SANITIZE_STRING);
$doenca_23 = filter_input(INPUT_POST,'doenca_23', FILTER_SANITIZE_STRING);
$doenca_24 = filter_input(INPUT_POST,'doenca_24', FILTER_SANITIZE_STRING);
$doenca_25 = filter_input(INPUT_POST,'doenca_25', FILTER_SANITIZE_STRING);

$outros = filter_input(INPUT_POST,'outros', FILTER_SANITIZE_STRING);

//doador--------------------------------
$estado_doador = filter_input(INPUT_POST,'estado_doador', FILTER_SANITIZE_STRING);


$doador_volume = filter_input(INPUT_POST,'doador_volume', FILTER_SANITIZE_STRING);

$obs_area = filter_input(INPUT_POST,'obs_area', FILTER_SANITIZE_STRING);

$termos = filter_input(INPUT_POST,'termos', FILTER_SANITIZE_STRING);

//colete----------------------
$lote_bolsa = filter_input(INPUT_POST,'lote_bolsa', FILTER_SANITIZE_STRING);

$n_conector = filter_input(INPUT_POST,'n_conector', FILTER_SANITIZE_STRING);

$vol_coletado = filter_input(INPUT_POST,'vol_coletado', FILTER_SANITIZE_STRING);

$lote_bolsa = filter_input(INPUT_POST,'lote_bolsa', FILTER_SANITIZE_STRING);
//  Doação INTERR.-----
$group1 = filter_input(INPUT_POST,'group1', FILTER_SANITIZE_STRING);

$reacoes = filter_input(INPUT_POST,'reacoes', FILTER_SANITIZE_STRING);

//Resultados laboratorias
$result_grupo = filter_input(INPUT_POST,'result_grupo', FILTER_SANITIZE_STRING);

//sql salvar doador----------------------------------------------------------------

include_once("conexao.php");//incluindo php que possibilita a conexao com banco de dados
//Estilo orientado ao objeto
$link->set_charset("utf8")

//Estilo processual
mysqli_set_charset($link, "utf8")

		$sql = "SELECT * FROM doador";
		
		
		$existeusuario = 0;
		$res = mysqli_query( $conn, $sql ) or die( mysqli_error( $conn ) );
		while($row_doador = mysqli_fetch_assoc($res)){
			if($row_doador['nome'] == $ident_nome ){
				
				$existeusuario = 1;	
			} else{
				
			
			}
			
		}
		if($existeusuario == 1){
			
			echo' <center><div class="row" style="position: relative; left: 23%;">
			<div class="col s12 m6">
			  <div class="card red darken-4">
				<div class="card-content white-text">
				  <span class="card-title">Ops!</span>
				  <p>Este doador '."$ident_nome".' ja possui cadastro! <br></p>
				</div>
				<div class="card-action">
				  <a href="javascript:history.back()" class="white-text text-darken-2">Voltar</a>
				  
				</div>
			  </div>
			</div>
		  </div></center>';
		}if($existeusuario == 0){
			
		
			
			$sql = "INSERT INTO doador (nome,sexo,identidade,altura,peso,celular,cep,cidade,datanasc,estadodoacao,etinia,pai,mae,nacionalidade,uf ,profissao,estadocivil,escolaridade,email,telefone,bairro) VALUES ('$ident_nome','$ident_sexo','$ident_identidade','$tec_altura','$tec_peso','$ident_celular','$ident_cep','$ident_cidade','$ident_data','$estado_doador','$etinia','$ident_pai','$ident_mae','$ident_naturalidade','$ident_uf','$ident_profissao','$estado_civil','$escolaridade','$ident_email','$ident_telefone','$ident_bairro')";

			$res = mysqli_query( $conn, $sql ) or die( mysqli_error( $conn ) );
			$id = mysqli_insert_id($conn);
			//verificar se o doador esta apto a doar se estiver , a quantidade doada sera salva no banco, caso o doador nao estiver apto a quantidade de sangue coletadov nao sera salva------
			if($estado_doador == "1"){
				
				
				$sql2 = "INSERT INTO sangue (Doador_idDoador ,tipo,quantidade,datadoacao) VALUES ('$id','$result_grupo','$vol_coletado','$data')";
				$res = mysqli_query( $conn, $sql2 ) or die( mysqli_error( $conn ) );
				
				
				$qttipo1 = 0;

				$id_estoque = 0;
				
				$sql3 = "SELECT * FROM estoquesangue";
				
				
				
				$resss = mysqli_query( $conn, $sql3 ) or die( mysqli_error( $conn ) );
				while($row_estoque = mysqli_fetch_assoc($resss)){
					if($row_estoque['tipo'] == $result_grupo ){
						$id_estoque = $row_estoque['idestoque'];
						$qttipo1 = $vol_coletado;
						$qttipo1 += $row_estoque['quantidade'];			
						$sql4 = "UPDATE estoquesangue SET quantidade = ('$qttipo1') WHERE idestoque = '$id_estoque' ";	
						$result = mysqli_query( $conn, $sql4 ) or die( mysqli_error( $conn ) );
						break;		
					} 
				}	
			}else{
				$sql2 = "INSERT INTO sangue (Doador_idDoador ,tipo,datadoacao) VALUES ('$id','$result_grupo','$data')";
				$res = mysqli_query( $conn, $sql2 ) or die( mysqli_error( $conn ) );
			}
				echo' <center><div class="row" style="position: relative; left: 23%;">
			<div class="col s12 m6">
			  <div class="card red darken-4">
				<div class="card-content white-text">
				  <span class="card-title">Salvo!</span>
				  <p>Doador ' . " $ident_nome ".' Foi salvo! <br></p>
				</div>
				<div class="card-action">
				  <a href="javascript:history.back()" class="white-text text-darken-2">Voltar</a>
				  
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