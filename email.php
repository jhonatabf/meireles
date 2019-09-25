<?php

 

// Recebe o valor enviado
if(isset($_GET['contato'])){
	
	if(empty($_GET['ds_nome'])){
		echo "<div class='alert alert-danger text-center'> É necessário informar seu nome<div>";}
		else{
			if(empty($_GET['ds_email'])){
			echo "<div class='alert alert-danger text-center'> É necessário informar o seu e-mail de contato<div>";}
				else{
				if(empty($_GET['ds_telefone'])){
				echo "<div class='alert alert-danger text-center'> É necessário informar algum telefone<div>";}
					else{
					if(empty($_GET['ds_descricao'])){
					echo "<div class='alert alert-danger text-center'> É necessário informar a descrição do serviço pretendido<div>";}
						//Todo corpo da mensagem deve ser escrita aqui//

						else{

							$ds_nome 		= $_GET['ds_nome'];
							$ds_email 		= $_GET['ds_email'];
							$ds_telefone 	= $_GET['ds_telefone'];
							$ds_descricao 	= $_GET['ds_descricao'];
							///Corpo do email

							setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');

							date_default_timezone_set('America/Sao_Paulo');

							
								$body = file_get_contents('template/email.html');
								$body = str_replace("%DS_NOME%", $ds_nome, $body);
								$body = str_replace("%DS_EMAIL%", $ds_email, $body);
								$body = str_replace("%DS_TELEFONE%", $ds_telefone, $body);
								$body = str_replace("%DS_DESCRICAO%", $ds_descricao, $body);

							$headers2 = "MIME-Version: 1.0\r\n";
							$headers2 .= "Content-type: text/html; charset=utf8\r\n";
							$headers2 .= "From: Contato | Meireles Contabilidade\r\n";

								$corpo = utf8_decode($body);

								if(mail('meirelescontabilidade2017@gmail.com','Contato',$corpo, $headers2)){
									echo "<div class='alert alert-success'>E-mail enviado com sucesso. Em breve entraremos em contato</div>";
								}

								else{
									echo "<div class='alert alert-danger'>Aconteceu algo errado. Pode tentar novamente mais tarde?</div>";
								}
							///Fim do email	
						}
					}
				}
	}
}


?>