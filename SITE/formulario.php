  <!DOCTYPE html>
  <html>
    <head>
	<meta charset="utf-8">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="css/formulario.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body><div id="d">
	<form action="php_bancodados/formulariobanco.php" method="POST">
	<nav class="nav_tabs">
			<ul>
				<li>
					<input type="radio" id="tab1" class="rd_tab" name="tabs" checked/>
					<label for="tab1" class="tab_label">Etapa 1</label>
					<div class="tab-content">
						<h2>Identificação</h2>
						<article>
					
						<fieldset>
										
										<table style="">
											<tr>
												<td>
										
										
								<label>*Nome</label>
								<input type="text" name="ident_nome" placeholder="Digite seu Nome" style="width: 60%" required="required">
							  
							 </td>
							 <td colspan="2">
								 <label>*Data nascimento: </label>
								<input type="date" name="ident_data" style="width: 35%" required="required"><br><br>
								<label>*Data: </label>
								<input type="date" name="data" style="width: 35%" required="required"><br><br>
							</td>
							</tr>
							   
							 
								 <!-- Sexo -->
								 <tr>
							  <td>  *Sexo:
								   <label >
									<input name="ident_sexo" type="radio" value="Masculino" required="required"/>
									<span>Masculino</span>
								  </label>

								
								  <label >
									<input name="ident_sexo" type="radio" value="Feminino" required="required"/>
									<span>Feminino</span>
								  </label>
							  </td>
							  
							  
									<!-- --------- ------------------>
									  <!-- Etnia -->
								<td style="width: 5%;">Etinia: </td>
							  
							 <td> 
							  <select class="browser-default" style="width: 50%;" name="etinia" required="required">
								<option value="" disabled selected>Escolha</option>
								<option value="Caucasiano">Caucasiano</option>
								<option value="Caucasiano Brasileiro">Caucasiano Brasileiro</option>
								<option value="Negro">Negro</option>
								<option value="Amarelo">Amarelo</option>
								 <option value="Indio">Indio</option>
								  <option value="Mestiço">Mestiço</option>
							  </select>
							</td>
							</tr>
								<!-- --------- ------------------>
								<!-- Filiação -->
								<tr>
							   <td colspan="3">
								Filiação:
							</td>
							</tr>
							   
								<tr>
									
									<td colspan="1">
								<label>Pai: </label>
								<input type="text" name="ident_pai" placeholder="Digite nome do seu pai" style="width: 100%;" required="required" />
								<td colspan="2">
								<label>Mãe: </label>
								<input type="text" name="ident_mae" placeholder="Digite nome de sua mãe" style="width: 100%;" required="required" />
								</td>
							</td>
								</tr>
								<!-- --------- ------------------>
								<!-- Nacionalidade -->

								<tr>
								  <td colspan="3">
								  <table>
								<td colspan="3">Nacionalidade: </td>
								<tr >
								  <td style="width: 25%;">
									Brasileiro ?:
								<label >
									<input name="ident_nacionalidade" type="radio"  required="required"/>
									<span>Sim</span>
								  </label>
								  &nbsp &nbsp
								  <label >
									<input name="ident_nacionalidade" type="radio" required="required" />
									<span>Não(outra)</span>
								  </label>
								</td>

								<td>
								 <label>Naturalidade</label>
								<input type="text" name="ident_naturalidade" placeholder="Naturalidade" style="width:10% ; margin-right: 4%;" required="required" />

								<label>UF</label>
								<input type="text" name="ident_uf" placeholder="UF" style="width:10% ; margin-right: 4%;" required="required" />

								<label>*Identidade</label>
								<input type="text" name="ident_identidade" placeholder="Identidade" style="width: 10% ; margin-right: 4%; " required="required" />

								<label>Expeditor</label>
								<input type="text" name="ident_expeditor" placeholder="Expeditor" style="width: 10%; ; margin-right: 4%;" required="required" />
								<label>Profissão</label>
								<input type="text" name="ident_profissao" placeholder="Profissão" style="width: 10%; margin-right: 4%;" required="required" />


								</td>
								</tr>
								</table>
							  </td>
								</tr>
								 <!-- --------- ------------------>
							 <!-- Estado civil -->

							 <tr>
								<td colspan="3">
								<table>
									<tr>
							 <td>
								 Estado civil: 
							 </td>
								 <td style="width: 30%;">
								
							  <select class="browser-default" style="width: 80%;" name="estado_civil" required="required">
								<option value="" disabled selected>Escolha</option>
								<option value="Solteiro">Solteiro</option>
								<option value="Casado">Casado</option>
								<option value="Viúvo">Viúvo</option>
								<option value="Separado judicialmente">Separado judicialmente</option>
								 <option value="Outros">Outros</option>
								  
							  </select>
							</td>
								 <!-- --------- ------------------>
							 <!-- Escolaridade -->
							 
								<td>
								Escolaridade: 
							</td>
								<td style="width: 30%;">
									 <select class="browser-default" style="width: 80%;" name="escolaridade" required="required"> 
								<option value="" disabled selected>Escolha</option>
								<option value="1º Grau Incomp">1º Grau Incomp.</option>
								<option value="1º Grau Comp">1º Grau Comp.</option>
								<option value="2º Grau Incomp">2º Grau Incomp.</option>
								<option value="2º Grau Comp">2º Grau Comp.</option>
								<option value="3º Grau Incomp">3º Grau Incomp.</option>
								<option value="2º Grau Comp">3º Grau Comp.</option>
								<option value="Não alfabetizado">Não alfabetizado</option>
								  
							  </select>

								</td>	
								<!-- --------- ------------------>
							</tr>
							</table>
							</table>
							</fieldset>

						</article>
					</div>
				</li>
				<li>
					<input type="radio" name="tabs" class="rd_tab" id="tab2">
					<label for="tab2" class="tab_label">Etapa 2</label>
					<div class="tab-content">
						<h2>Endereço  Residencial</h2>
						<article>
						<fieldset>  
							<input type="text" name="ident_endereco" placeholder="Digite seu endereço residente"  />

						 <!-- --------- ------------------>

						 <!-- Bairro cep e cidade-->

						 <tr>
							<td colspan="3">
							<table>
								<tr>

							 <td style="width: 30%;">
							
							<label>Bairro</label>
							<input type="text" name="ident_bairro" placeholder="Digite seu Bairro" required="required"/>
						</td>
							 

							 <td style="width: 30%;">
							
							<label>*Cep</label>
							<input type="text" name="ident_cep" placeholder="Digite seu cep" required="required" >
						</td>

						 <td style="width: 30%;">
							
							<label>*Cidade</label>
							<input type="text" name="ident_cidade" placeholder="Digite sua cidade" required="required" >
						</td>
							
						</tr>
						</table>
						</td>

						</tr>
						 <tr>
							<td colspan="3">
							<table>
								<tr>

							 <td style="width: 30%;">
							
							<label>Telefone</label>
							<input type="text" name="ident_telefone" placeholder="Digite seu Telefone" />
						</td>
							 

							 <td style="width: 30%;">
							
							<label>*Celular</label>
							<input type="text" name="ident_celular" placeholder="Digite seu celular"  />
						</td>

						 <td style="width: 30%;">
							
							<label>E-mail</label>
							<input type="text" name="ident_email" placeholder="Digite sua E-mail" />
						</td>
							
						</tr>
						</table>
						</td>
						</tr>
						<!-- --------- ------------------>
						<tr><td>
							<textarea placeholder="Observações" rows="10"></textarea>
						</td>
						</tr>
								</table>
								</fieldset>
						</article>
					</div>
				</li>
				<li>
					<input type="radio" name="tabs" class="rd_tab" id="tab3"/>
					<label for="tab3" class="tab_label">Etapa 3</label>
					<div class="tab-content">
						<h2>Triagem tecnica</h2>
						<article>
						<fieldset>
	
							<table>
								<tr>
									<td><label>*Altura</label>
							<input type="text" name="tec_altura" placeholder="Digite sua Altura EX: 1.80" required="required"/></td>
									<td><label>*Peso</label>
							<input type="text" name="tec_peso" placeholder="Digite seu Peso"  required="required"/></td>
									<td><label>PA</label>
							<input type="text" name="tec_pa" placeholder="Digite sua PA" /></td>
								</tr>

								<tr>
									<td><label>Pulso</label>
							<input type="text" name="tec_pulso" placeholder="Digite seu Pulso" /></td>
									<td><label>Temperatura</label>
							<input type="text" name="tec_temperatura" placeholder="Digite sua temperatura" /></td>
									<td><label>HB/HT</label>
							<input type="text" name="tec_hb" placeholder="Digite sua HB/HT" /></td>
								</tr>

							</table>
						</fieldset>
						</article>
					</div>
				</li>
				<li>
					<input type="radio" name="tabs" class="rd_tab" id="tab4">
					<label for="tab4" class="tab_label">Etapa 4</label>
					<div class="tab-content">
						<h2>Triagem Clinica</h2>
						<article>
						<fieldset>

						 1)Você esta bem de saúde hoje?
						   <label >
							<input name="clini_p1" type="radio" required="required"/>
							<span>Sim</span>
						  </label>
						  <label >
							<input name="clini_p1" type="radio" required="required"/>
							<span>Não</span>
						  </label>
						  <br>
						   2)Ingeriu bebida alcoolica há 24 horas?
						   <label >
							<input name="clini_p2" type="radio"required="required" />
							<span>Sim</span>
						  </label>
						  <label >
							<input name="clini_p2"" type="radio" required="required"/>
							<span>Não</span>
						  </label>
					<br>
						   3)Fumou há 2 horas?
						   <label >
							<input name="clini_p3" type="radio" required="required"/>
							<span>Sim</span>
						  </label>
						  <label >
							<input name="clini_p3" type="radio" required="required"/>
							<span>Não</span>
						  </label>
					<br>
						   4)Alimentou-se hoje?
						   <label >
							<input name="clini_p4" type="radio" required="required"/>
							<span>Sim</span>
						  </label>
						  <label >
							<input name="clini_p4" type="radio" required="required" />
							<span>Não</span>
						  </label>
					<br>
						   5)Dormiu?
						  <label>
							<input name="clini_p5" type="radio" required="required"/>
							<span>Sim</span>
						  </label>
						  <label >
							<input name="clini_p5" type="radio" required="required"/>
							<span>Não</span>
						  </label>
					</fieldset>
						
						</article>
					</div>
					
				</li>
				<li>
					<input type="radio" name="tabs" class="rd_tab" id="tab5">
					<label for="tab5" class="tab_label">Etapa 5</label>
					<div class="tab-content">
						<h2>Pré-Triagem</h2>
						<article>
						<fieldset>

						  <table>
							<tr>
							  <td>
									1) Fez uso de alimentos gordurosos há menos de 24 horas?
							  <label >
								<input name="pre_p1" type="radio" />
								<span>Sim</span>
							  </label>
							  <label >
								<input name="pre_p1" type="radio" />
								<span>Não</span>
							  </label>
								
							 </td>
							</tr>


							  <tr>
							  <td>
							  2) Tomou bebida alcoólica ontem ou hoje?
							  <label >
								<input name="pre_p2" type="radio" >
								<span>Sim</span>
							  </label>
							  <label >
								<input name="pre_p2" type="radio" />
								<span>Não</span>
							  </label>

						</td>
						</tr>


							  <tr>
							  <td>
							  3) Está gravida ou amamentando? Teve filho ou aborto há 6 meses?
							  <label >
								<input name="pre_p3" type="radio" />
								<span>Sim</span>
							  </label>
							  <label >
								<input name="pre_p3" type="radio" />
								<span>Não</span>
							  </label>
						   

						</td>
						</tr>


							  <tr>
							  <td>
							  4) Presença de micose no braço?
							  <label >
								<input name="pre_p4" type="radio" />
								<span>Sim</span>
							  </label>
							  <label >
								<input name="pre_p4" type="radio" />
								<span>Não</span>
							  </label>
							
						</td>
						</tr>


							  <tr>
							  <td>
							  5) Você está doando sangue exclusivamente por causa dos exame de AIDS/HIV?
							  <label >
								<input name="pre_p5" type="radio" />
								<span>Sim</span>
							  </label>
							  <label >
								<input name="pre_p5" type="radio" />
								<span>Não</span>
							  </label>
							
						</td>
						</tr>


							  <tr>
							  <td>
							  6) Ja doou sangue? Quando? Quantas vezes? Onde?
							  <label >
								<input name="pre_p6" type="radio" />
								<span>Sim</span>
							  </label>
							  <label >
								<input name="pre_p6" type="radio" >
								<span>Não</span>
							  </label>
							

						</td>
						</tr>


							  <tr>
								<td>
							  7) Teve algum problema nas doenças anteriores? 
							  <label >
								<input name="pre_p7" type="radio" />
								<span>Sim</span>
							  </label>
							  <label >
								<input name="pre_p7" type="radio" />
								<span>Não</span>
							  </label>
							<br>
							<label>
								<input type="checkbox" class="filled-in"  name="sint_1" />
								<span>Tontura</span>
							</label> &nbsp &nbsp
							<label>
								<input type="checkbox" class="filled-in" name="sint_2" />
								<span>Tremores</span>
							</label> &nbsp &nbsp
							<label>
								<input type="checkbox" class="filled-in" name="sint_3" />
								<span>Desmaios</span>
							</label> &nbsp &nbsp
							<label>
								<input type="checkbox" class="filled-in" name="sint_4" />
								<span>Náuses e/ou Vómitos</span>
							</label> &nbsp &nbsp
							<label>
								<input type="checkbox" class="filled-in" name="sint_5" />
								<span>Convulsões</span>
							</label> <br>

							<span>Outros: </span>
							<input type="text" name="pre_outros_p7" placeholder="Digite outros problemas" style="width: 20%">
						</td>
						</tr>
							  <tr>
							  <td>
							  8) Foi recusado como doador?
							  <label >
								<input name="pre_p8" type="radio" >
								<span>Sim</span>
							  </label>
							  <label >
								<input name="pre_p8" type="radio" />
								<span>Não</span>
							  </label>
							  <br>
							  <span>Quando?</span>
							   
							<input type="text" name="pre_quando_p8" placeholder="ex: 2 meses, 1 semana etc..." style="width: 20%">
							&nbsp
							<span>Motivo?</span>
							
							<input type="text" name="pre_motivo_p8" placeholder="Motivo" style="width: 20%">
							

						</td>
						</tr>
							  <tr>
							  <td>
							  9) Recebeu sangue ou derivados? 
							  <label >
								<input name="pre_p9" type="radio" />
								<span>Sim</span>
							  </label>         
							  <label >
								<input name="pre_p9" type="radio" >
								<span>Não</span>
							  </label> <br>
							   <span>Há quanto tempo? </span>
							<input type="text" name="pre_quanto_p9" placeholder="Digite outros problemas" style="width: 20%">
							<
						</td>
						</tr>

							  <tr>
							  <td>
							  10) Está com IVAS?
							  <label >
								<input name="pre_p10" type="radio" />
								<span>Sim</span>
							  </label>
							  <label >
								<input name="pre_p10" type="radio" />
								<span>Não</span>
							  </label>
							
						</td>
						</tr>


							<td>
							  
							38) Teve ou tem alguma das doenças abaixo? <br>
							<table>
							  <tr>
								<td>
							<label>
								<input type="checkbox" class="filled-in" name="doenca_1" />
								<span>Aids</span>
							  </label>
							</td>
							<td>
							 <label>
								<input type="checkbox" class="filled-in"  name="doenca_2"/>
								<span>Blenorragia</span>
							  </label>
							  </td>
							  <td>
							<label>
								<input type="checkbox" class="filled-in" name="doenca_3" />
								<span>Câncer</span>
							  </label>
							</td>
							  <td>
							<label>
								<input type="checkbox" class="filled-in" name="doenca_4" />
								<span>Convulsão</span>
							  </label>
						  </td>
							  <td>
							 <label>
								<input type="checkbox" class="filled-in" name="doenca_5" />
								<span>Diabetes</span>
							  </label>
							</td>
							</tr>

							<tr>
							  <td>
							  <label>
								<input type="checkbox" class="filled-in" name="doenca_6" />
								<span>Herpes Genital</span>
							  </label>
							</td>
							  <td>
							  <label>
								<input type="checkbox" class="filled-in" name="doenca_7" />
								<span>Herpes Labial</span>
							  </label>
							</td>
							  <td>
							  <label>
								<input type="checkbox" class="filled-in"name="doenca_8"/>
								<span>Hipertensão</span>
							  </label>
							</td>
							  <td>
							  <label>
								<input type="checkbox" class="filled-in" name="doenca_9" />
								<span>Hipotensão</span>
							  </label>
							</td>
							  <td>
							  <label>
								<input type="checkbox" class="filled-in" name="doenca_10" />
								<span>Hipertireodismo</span>
							  </label>
							</td>
							  
						  </tr>

						  <tr>
							  <td>

							<label>
								<input type="checkbox" class="filled-in" name="doenca_11" />
								<span>Micoses</span>
							  </label>
								 </td>
								 <td>
							  <label>
								<input type="checkbox" class="filled-in" name="doenca_12" />
								<span>Problema Cardiaco</span>
							  </label>
							</td>
								 <td>
							  <label>
								<input type="checkbox" class="filled-in" name="doenca_13" />
								<span>Problema Hepático</span>
							  </label>
						   </td>
								 <td>
							  <label>
								<input type="checkbox" class="filled-in" name="doenca_14" />
								<span>Problema Pulmonar</span>
							  </label>
						   </td>
								 <td>
							 <label>
								<input type="checkbox" class="filled-in" name="doenca_15" />
								<span>Problema Renal</span>
							  </label>
						   </td>
								
								 </tr>
								 <tr>
									<td> <label>
								<input type="checkbox" class="filled-in" name="doenca_16" />
								<span>TBC</span>
							  </label>
							</td>
							 <td>
							
							 <label>
								<input type="checkbox" class="filled-in" name="doenca_17" />
								<span>Chagas</span>
							  </label>
						   </td>
							  <td>
							 <label>
								<input type="checkbox" class="filled-in" name="doenca_18" />
								<span>Febre Amarela</span>
							  </label>
							</td>
							  <td>
							 <label>
								<input type="checkbox" class="filled-in" name="doenca_19" />
								<span>Hepatite</span>
							  </label>
							</td>
							<td>
							<label>
								<input type="checkbox" class="filled-in" name="doenca_20" />
								<span>Hipotireodismo</span>
							  </label>
							</td>
							  
							  
						   
								 </tr>
								 <tr>
							<td>
							<label>
								<input type="checkbox" class="filled-in"  name="doenca_21"/>
								<span>Lepra</span>
							  </label>
						   </td>
						   <td>
							
							<label>
								<input type="checkbox" class="filled-in" name="doenca_22" />
								<span>Malária</span>
							  </label>
							</td>

							 <td>
								  <label>
								<input type="checkbox" class="filled-in" name="doenca_23" />
								<span>Reumatismo</span>
							  </label>
							</td>
								 <td><label>
								<input type="checkbox" class="filled-in" name="doenca_24" />
								<span>Sangramento</span>
							  </label>
							</td>
								 <td> <label>
								<input type="checkbox" class="filled-in" name="doenca_25" />
								<span>Sífilis</span>
							  </label>
							</td>
								 </tr>
							
							<tr>
							  <td colspan="5"> 
							   <span>Outras </span>
							<input type="text" name="outros" placeholder="Qaul?" style="width: 20%">
							</td>
							</tr>
							</table>
						  </td>
						</tr>
							  

						</table>

						</fieldset>
						
						</article>
					</div>
					
				</li>
				<li>
					<input type="radio" name="tabs" class="rd_tab" id="tab6">
					<label for="tab6" class="tab_label">Etapa 6</label>
					<div class="tab-content">
						<h2>Doador</h2>
						<article>
										<fieldset>

							<table>
								<tr>
									<td><span>*Está </span> <select class="browser-default" style="width: 80%;" name="estado_doador" required="required">
									<option value="" disabled selected>Escolha</option>
									<option value="1">Apto a doar</option>
									<option value="2">Inapto temporário </option>
									<option value="3">Inapto definivo</option>
									</select>
									</td>		
									<td>Volume a coletar
									<input type="text" name="doador_volume" placeholder="Volume em ml"  style="width: 20%;" /></td>
									<td>Observações<textarea placeholder="Observações" rows="10" name="obs_area"></textarea></td>
								</tr>
								<tr>
									
								</tr>
							</table>
						</fieldset>


							  

						  <!-- --------- ------------------> <!-- --------- ------------------> <!-- --------- ------------------>
						  <fieldset>
							<legend>Termo de responsabilidade e Autirização</legend>
							<p>O doador infra assinado assume inteira responsabilidade pelas informações prestadas e autoriza a retirada de uma unidade de sangue para terapêutico conforme as normas técnicas em hemoterapia contidas no anexo da portaria nº 1.376/36 - MS</p> 
							 <label>
							<input type="checkbox" class="filled-in" name="termos" required="required" />
							 <span>Aceito os termos de responsabilidade e Autorização</span>
							</label>
						  </fieldset>
												
										</article>
									</div>	
							</li>
							<li>
								<input type="radio" name="tabs" class="rd_tab" id="tab7">
								<label for="tab7" class="tab_label">Etapa 7</label>
								<div class="tab-content">
									<h2>Coleta e resultado</h2>
										<article>
							<fieldset>

									<span>Lote da bolsa </span>
									<input type="text" name="lote_bolsa" placeholder="" style="width: 20%" />&nbsp &nbsp
									<span>Nº do conector </span> 
									<input type="text" name="n_conector" placeholder="" style="width: 20%" />
								  &nbsp &nbsp  <span>*Volume coletado </span> 
									<input type="text" name="vol_coletado" placeholder="Digite o volume coletado" style="width: 20%" required="required"/> <br> <br>
									Doação INTERR.
									<label >
										<input name="group1" type="radio" />
										<span>Sim</span>
									  </label>
									  <label >
										<input name="group1" type="radio" r/>
										<span>Não</span>
									  </label>
									   &nbsp  &nbsp  &nbsp  &nbsp
									<span>Reações </span> 
									<input type="text" name="reacoes" placeholder="Digite as reações" style="width: 30%">

								  </fieldset>
								  <fieldset>
									<legend>Resultados laboratorias</legend>
									<fieldset>
									  <legend>MUNOHEMATOLOGIA</legend>
									  <span>Grupo Sanguineo </span> 
									 &nbsp  &nbsp
									  <select class="browser-default" style="width: 50%;" name="result_grupo" required="required"> 
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
									<span>FATOR Rh </span> 
									<input type="text" name="result_rh" placeholder="" style="width: 10%" /> &nbsp  &nbsp
									<span>Dfraco </span> 
									<input type="text" name="result_dfraco" placeholder="" style="width: 10%" /> &nbsp  &nbsp
									<span>PAI </span> 
									<input type="text" name="result_pai" placeholder="" style="width: 10%" /> <br><br>
									<span>PESQUISA DE HB ANOMALA: </span> 
									<input type="text" name="result_anomala" placeholder="" style="width: 60%" /> 

									</fieldset>

								  </fieldset>

								  <!-- --------- ------------------> <!-- --------- ------------------> <!-- --------- ------------------>
								  <center>Obs: verifique antes de salvar se todos os campos  com * foram preenchidos!</center>
								 
								 <center><button class="btn waves-effect waves-light" type="submit" name="action">Salvar dados
									
								  </button></center>
								  <br>

						
										</article>
									</div>
									
								</li>

			</ul>
	</nav>
	</form>
</div>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>