<!DOCTYPE html>
<html lang="pt-br">
<?php include("menu.php"); ?>
<body>

<header id="head" class="secondary"></header>
	<!-- container -->
	<div class="container">

	  <div class="row">
			
			<!-- Sidebar -->
		<article class="col-sm-9 maincontent">
				<header class="page-header">
					<h1 class="page-title">Solicitar um serviço da Meireles Contabilidade</h1>
				</header>
				
				<p>Informe os dados solicitados da forma mais completa possível. Para informar o documento selecione o <strong>tipo de documento</strong> que será informado e no campo <strong>documento de identificação</strong> informe os números referentes.</p>
				<br>
				<div id="msgOrca"></div>
					<form id="formMail" method="post" action="multEmail.php" enctype="multipart/form-data" >
						<div class="row">
							<div class="col-sm-4">
								<label for="idDados">Dados Cadastrais:</label>
								  <select onChange="selectDoc(this.value)" class="form-control" required name='ie_dados' id="idDados">
									<option></option>
									<option value='CNPJ'>CNPJ</option>
									<option value='CPF'>CPF</option>
									<option value='NIRF-ITR'>NIRF ITR</option>
								  </select>
							</div>
						</div>
						<br/>
							<div id='idDocumento'></div>
						<hr/>
						<div class="row">
							<div class="col-sm-12 checkin" style="line-height: 2em; float: left;">
								
								<label>Clique nos serviços desejados:</label><br/>
								<button type="button" class='btn btn-sm btn-default' id='bt_abertura' style="margin: 5px;">
								Abertura de Empresa</button>
								<input type='hidden' id='hAbertura' name='ds_abertura'>
								
								<button type="button" class='btn btn-sm btn-default' id='bt_alteracao' style="margin: 5px;">
								Alteração de dados empresarial</button>
								<input type='hidden' id='hAlteracao' name='ds_alteracao'>
								
								<button type="button" class='btn btn-sm btn-default' id='bt_encerramento' style="margin: 5px;">
								Encerramento e baixa de empresa</button>
								<input type='hidden' id='hEncerramento' name='ds_encerramento'>
								
								<button style="margin: 5px;" type="button" class='btn btn-sm btn-default' id='bt_folha'>
								Folha de pagamento</button>
								<input type='hidden' id='hFolha' name='ds_folha'>
								
								<button style="margin: 5px;" type="button" class='btn btn-sm btn-default' id='bt_imposto'>
								Imposto de renda PF e PJ</button>
								<input type='hidden' id='hImposto' name='ds_imposto'>
								
								<button style="margin: 5px;" type="button" class='btn btn-sm btn-default' id='bt_rural'>
								Imposto territorial rural</button>
								<input type='hidden' id='hRural' name='ds_rural'>
								
								<button style="margin: 5px;" type="button" class='btn btn-sm btn-default' id='bt_rais'>
								RAIS</button>
								<input type='hidden' id='hRais' name='ds_rais'>
								
								<button style="margin: 5px;" type="button" class='btn btn-sm btn-default' id='bt_sefip'>
								SEFIP/FGTS</button>
								<input type='hidden' id='hSefip' name='ds_sefip'>
								
								<button style="margin: 5px;" type="button" class='btn btn-sm btn-default' id='bt_dctf'>
								DCTF</button>
								<input type='hidden' id='hDctf' name='ds_dctf'>
								
								<button style="margin: 5px;" type="button" class='btn btn-sm btn-default' id='ds_trabalhista'>
								Calculo trabalhista</button>
								<input type='hidden' id='hTrabalhista' name='ds_trabalhista'>
								
							</div>
						</div>
						<hr/>
						<br/>
						<div class="row">
						  <div class="col-sm-6">
								<label for="idNome">Nome completo:</label>
							  <input name='ds_nome' type="text" required="required" class='form-control' id='idNome'>
							</div>
						  <div class="col-sm-3">
								<label for="idNascimento">Data de Nascimento:</label>
							  <input name='dt_nascimento' type="date" required="required" class='form-control' id='idNascimento'>
						  </div>
						  	<div class="col-sm-3">
							<label for="idRG">RG:</label>
							  <input name='nr_rg' type="number" required="required" class='form-control' id='idRG'>
							</div>
						</div>
						<br/>
						<div class="row">
							<div class="col-sm-4">
								<label for="idCivil">Estado Civil:</label>
								<select class="form-control" required name='ds_civil' id="idCivil">
									<option></option>
									<option value='Solteiro'>Casado</option>
									<option value='Casado'>Solterio</option>
								  </select>
							</div>
						  <div class="col-sm-6">
							<label for="idEndereco">Endereço:</label>
							  <input name='ds_endereco' type="text" required="required" class='form-control' id='idEndereco'>
							</div>
						  <div class="col-sm-2">
							<label for="idNumero">Número:</label>
							  <input name='nr_numero' type="number" required="required" class='form-control' id='idNumero'>
							</div>
						</div>
						<br/>
						<div class="row">
							<div class="col-sm-6">
								<label for="idComplemento">Complemento:</label>
								<input type="text" class='form-control' name='ds_complemento' id='idComplemento'>
							</div>
						  <div class="col-sm-3">
								<label for="idEstado">Estado:</label>
							  <input name='ds_estado' type="text" required="required" class='form-control' id='idEstado'>
							</div>
						  <div class="col-sm-3">
							<label for="idCidade">Cidade:</label>
							  <input name='ds_cidade' type="text" required="required" class='form-control' id='idCidade'>
							</div>
						</div>
						<br/>
						<div class="row">
							<div class="col-sm-3">
								<label for="idCep">CEP:</label>
								<input name='ds_cep' type="text" required="required" class='form-control' id='idCep'>
							</div>
							<div class="col-sm-3">
								<label for="idTelefone">Telefone:</label>
								<input name='ds_telefone' type="text" required="required" class='form-control' id='idTelefone'>
							</div>
							<div class="col-sm-6">
								<label for="idMail">E-mail:</label>
								<input name='ds_email' type="email" required="required" class='form-control' id='idMail'>
							</div>
						</div>
						<br/>
						<div class='row'>
							<div class='col-sm-12'>
							<label for="dsDescricao">Descreva o máximo que puder sobre suas necessidades:</label>
							<textarea class="form-control" name="ds_descricao" id="dsDescricao"  style="min-height: 100px;"></textarea><br/>
							<label for="divAnexo">Anexos</label>
							<div class="alert alert-info" id="divAnexo">É importante anexar os documentos como CPF, CNPJ e outros que sejam necessários. Para enviar vários arquivos utilize o CRTL e selecione todos os anexos necessários<br/>
							
							<label for="idNumAnexo">Quantidade de anexos:</label>
									<input name='ie_anexo[]' type='file' multiple class='form-control' id='idAnexo'>
							</div>
							</div>
							<br/>
						</div>
						<hr/>
						<div class="row">
							<div class="col-sm-12 text-right">
								<input class="btn btn-action" type="submit" value="Enviar Pedido">
							</div>
						</div>
					</form>

			</article>
			<!-- /Article -->
			
			<!-- Sidebar -->
			<aside class="col-sm-3 sidebar sidebar-right">

				<div class="widget">
					<h4>Quer conhecer a Meireles Contabilidade?</h4>
					<p style="text-align: justify">Para solicitar um serviço da Meireles Contabilidade basta preencher os dados do formulário a abaixo com o máximo de informações possíveis. É importante lembrar que deve ser anexado o máximo de documentos possíveis referente à solicitação.</p>
				<p>Após enviado a Meireles Contabilidade entrará em contato o mais rápido possível</p>
					<br/>
					</address>
					<h4>Para qualquer dúvida, ligue:</h4>
					<address>
						<i class="fa fa-phone"></i> +55 98 98769-1252<br>
						<i class="fab fa-whatsapp"></i> +55 98 98517-6679
					</address>
				</div>

			</aside>
		  <!-- /Article -->

		</div>
	</div>
	
<?php include ("footer.php"); ?>


	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
	<script src="funcs.js"></script>
	<script src="assets/js/validador.js"></script>
	
</body>


<!-- Script de seleção de serviços-->
<script>
	$(document).ready(function() {
		var cAbertura = 0;
		var cAlteracao = 0;
		var cEncerramento = 0;
		var cFolha = 0;
		var cImposto = 0;
		var cRural = 0;
		var cRais = 0;
		var cDctf = 0;
		var cSefip = 0;
		
		
		$("#bt_abertura").click(function() {
			cAbertura++;
			if(cAbertura % 2 !== 1){
			   $("#bt_abertura").html("Abertura de Empresa");
				document.getElementById("bt_abertura").style.background = 'none';
				document.getElementById("bt_abertura").style.color = '#989898';
				document.getElementById("hAbertura").value = '';
			   }
			else{
				$("#bt_abertura").html("<span class='glyphicon glyphicon-check'></span> Abertura de Empresa");
				document.getElementById("bt_abertura").style.background = '#ff9b22';
				document.getElementById("bt_abertura").style.color = '#ffffff';
				document.getElementById("hAbertura").value = 'Abertura de Empresa';
			}
		});
		
		$("#bt_alteracao").click(function() {
			cAlteracao++;
			if(cAlteracao % 2 !== 1){
			   $("#bt_alteracao").html("Alteração de dados empresarial");
				document.getElementById("bt_alteracao").style.background = 'none';
				document.getElementById("bt_alteracao").style.color = '#989898';
				document.getElementById("hAlteracao").value = '';
			   }
			else{
				$("#bt_alteracao").html("<span class='glyphicon glyphicon-check'></span> Alteração de dados empresarial");
				document.getElementById("bt_alteracao").style.background = '#ff9b22';
				document.getElementById("bt_alteracao").style.color = '#ffffff';
				document.getElementById("hAlteracao").value = 'Alteração de dados empresarial';
			}
		});
		
		$("#bt_encerramento").click(function() {
			cEncerramento++;
			if(cEncerramento % 2 !== 1){
			   $("#bt_encerramento").html("Encerramento e baixa de empresa");
				document.getElementById("bt_encerramento").style.background = 'none';
				document.getElementById("bt_encerramento").style.color = '#989898';
				document.getElementById("hEncerramento").value = '';
			   }
			else{
				$("#bt_encerramento").html("<span class='glyphicon glyphicon-check'></span> Encerramento e baixa de empresa");
				document.getElementById("bt_encerramento").style.background = '#ff9b22';
				document.getElementById("bt_encerramento").style.color = '#ffffff';
				document.getElementById("hEncerramento").value = 'Encerramento e baixa de empresa';
			}
		});
		
		$("#bt_folha").click(function() {
			cFolha++;
			if(cFolha % 2 !== 1){
			   $("#bt_folha").html("Folha de pagamento");
				document.getElementById("bt_folha").style.background = 'none';
				document.getElementById("bt_folha").style.color = '#989898';
				document.getElementById("hFolha").value = '';
			   }
			else{
				$("#bt_folha").html("<span class='glyphicon glyphicon-check'></span> Folha de pagamento");
				document.getElementById("bt_folha").style.background = '#ff9b22';
				document.getElementById("bt_folha").style.color = '#ffffff';
				document.getElementById("hFolha").value = 'Folha de pagamento';
			}
		});
		
		$("#bt_imposto").click(function() {
			cImposto++;
			if(cImposto % 2 !== 1){
			   $("#bt_imposto").html("Imposto de renda PF e PJ");
				document.getElementById("bt_imposto").style.background = 'none';
				document.getElementById("bt_imposto").style.color = '#989898';
				document.getElementById("hImposto").value = '';
			   }
			else{
				$("#bt_imposto").html("<span class='glyphicon glyphicon-check'></span> Imposto de renda PF e PJ");
				document.getElementById("bt_imposto").style.background = '#ff9b22';
				document.getElementById("bt_imposto").style.color = '#ffffff';
				document.getElementById("hImposto").value = 'Imposto de renda PF e PJ';
			}
		});
		
		$("#bt_rural").click(function() {
			cRural++;
			if(cRural % 2 !== 1){
			   $("#bt_rural").html("Imposto territorial rural");
				document.getElementById("bt_rural").style.background = 'none';
				document.getElementById("bt_rural").style.color = '#989898';
				document.getElementById("hRural").value = '';
			   }
			else{
				$("#bt_rural").html("<span class='glyphicon glyphicon-check'></span> Imposto territorial rural");
				document.getElementById("bt_rural").style.background = '#ff9b22';
				document.getElementById("bt_rural").style.color = '#ffffff';
				document.getElementById("hRural").value = 'Imposto territorial rural';
			}
		});
		
		$("#bt_rais").click(function() {
			cRais++;
			if(cRais % 2 !== 1){
			   $("#bt_rais").html("RAIS");
				document.getElementById("bt_rais").style.background = 'none';
				document.getElementById("bt_rais").style.color = '#989898';
				document.getElementById("hRais").value = '';
			   }
			else{
				$("#bt_rais").html("<span class='glyphicon glyphicon-check'></span> RAIS");
				document.getElementById("bt_rais").style.background = '#ff9b22';
				document.getElementById("bt_rais").style.color = '#ffffff';
				document.getElementById("hRais").value = 'RAIS';
			}
		});
		
		$("#bt_sefip").click(function() {
			cSefip++;
			if(cSefip % 2 !== 1){
			   $("#bt_sefip").html("SEFIP/FGTS");
				document.getElementById("bt_sefip").style.background = 'none';
				document.getElementById("bt_sefip").style.color = '#989898';
				document.getElementById("hSefip").value = '';
			   }
			else{
				$("#bt_sefip").html("<span class='glyphicon glyphicon-check'></span> SEFIP/FGTS");
				document.getElementById("bt_sefip").style.background = '#ff9b22';
				document.getElementById("bt_sefip").style.color = '#ffffff';
				document.getElementById("hSefip").value = 'SEFIP/FGTS';
			}
		});
		
		$("#bt_dctf").click(function() {
			cDctf++;
			if(cDctf % 2 !== 1){
			   $("#bt_dctf").html("DCTF");
				document.getElementById("bt_dctf").style.background = 'none';
				document.getElementById("bt_dctf").style.color = '#989898';
				document.getElementById("hDctf").value = '';
			   }
			else{
				$("#bt_dctf").html("<span class='glyphicon glyphicon-check'></span> DCTF");
				document.getElementById("bt_dctf").style.background = '#ff9b22';
				document.getElementById("bt_dctf").style.color = '#ffffff';
				document.getElementById("hDctf").value = 'DCTF';
			}
		});
		
		$("#ds_trabalhista").click(function() {
			cDctf++;
			if(cDctf % 2 !== 1){
			   $("#ds_trabalhista").html("Calculo trabalhista");
				document.getElementById("ds_trabalhista").style.background = 'none';
				document.getElementById("ds_trabalhista").style.color = '#989898';
				document.getElementById("hTrabalhista").value = '';
			   }
			else{
				$("#ds_trabalhista").html("<span class='glyphicon glyphicon-check'></span> Calculo trabalhista");
				document.getElementById("ds_trabalhista").style.background = '#ff9b22';
				document.getElementById("ds_trabalhista").style.color = '#ffffff';
				document.getElementById("hTrabalhista").value = 'Calculo trabalhista';
			}
		});
	});
</script>

</html>