<!DOCTYPE html>
<html lang="pt-br">
<?php include("menu.php"); ?>
<body>

<header id="head" class="secondary"></header>
	<!-- container -->
	<div class="container">
		
		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Contato</h1>
				</header>
			</article>
			<article class="col-sm-8 maincontent">
				<h3>Retornaremos seu contato assim que possível</h3>
				<div id="mensagem"></div>
				<form>
					<input type="text" name="ds_nome" id="ds_nome" class="form-control" placeholder="Nome Completo" style="border-radius: 0px;"><br/>
					<input type="email" name="ds_email" id="ds_email" class="form-control" placeholder="Seu e-email para contato" style="border-radius: 0px;"><br/>
					<input type="text" name="ds_telefone" id="ds_telefone" class="form-control" placeholder="Celular" onkeyup='FormataTell(this,event)' maxlength='14' style="border-radius: 0px;"><br/>
					<textarea class="form-control" name="ds_descricao" id="ds_descricao" placeholder="Descreva o máximo que puder sobre suas necessidades" style="min-height: 100px;"></textarea>
				</form><br/>
				<button type="button" class="btn btn-download btn-action btn-lg" onClick="enviarEmail(ds_nome.value, ds_email.value, ds_telefone.value, ds_descricao.value)">Enviar</button>
				
			</article>
			<article class="col-sm-4">
					<h3>Maps</h3>
					<a href="https://www.google.com.br/maps/place/MEIRELES+CONTABILIDADE/@-2.5457632,-44.1789161,16z/data=!4m5!3m4!1s0x0:0x18e56c7400351f79!8m2!3d-2.5475739!4d-44.1680351" target="new"><img src="assets/images/localizacao.jpg" class="img-thumbnail pull-left" width="300" alt="localização Meireles Contabilidade" ></a>

		  </article>

	  </div>
	</div>	<!-- /container -->
	
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
</html>