<?php

$ds_abertura = $_POST['ds_abertura'];
	if (!empty($_POST['ds_alteracao'])): $ds_alteracao = $_POST['ds_alteracao']."; "; else: $ds_alteracao = ''; endif;
	if (isset($_POST['ds_encerramento'])): $ds_encerramento = $_POST['ds_encerramento']."; "; else: $ds_encerramento = ''; endif;
	if (isset($_POST['ds_folha'])): $ds_folha = $_POST['ds_folha']."; "; else: $ds_folha = ''; endif;
	if (isset($_POST['ds_imposto'])): $ds_imposto = $_POST['ds_imposto']."; "; else: $ds_imposto = ''; endif;
	if (isset($_POST['ds_rural'])): $ds_rural = $_POST['ds_rural']."; "; else: $ds_rural = ''; endif;
	if (isset($_POST['ds_sefip'])): $ds_sefip = $_POST['ds_sefip']."; "; else: $ds_sefip = ''; endif;
	if (isset($_POST['ds_rais'])): $ds_rais = $_POST['ds_rais']."; "; else: $ds_rais = ''; endif;
	if (isset($_POST['ds_dctf'])): $ds_dctf = $_POST['ds_dctf']."; "; else: $ds_dctf = ''; endif;
	if (isset($_POST['ds_trabalhista'])): $ds_trabalhista = $_POST['ds_trabalhista']."; "; else: $ds_trabalhista = ''; endif;

	$ds_servicos = $ds_alteracao."".$ds_encerramento."".$ds_folha."".$ds_imposto."".$ds_rural."".$ds_sefip."".$ds_rais."".$ds_dctf."".$ds_trabalhista;
	
	$ie_dados = $_POST['ie_dados'];
	$nr_documento = $_POST['nr_documento'];
	$nr_documento_cpf = $_POST['nr_documento_cpf'];
	$ds_nome = $_POST['ds_nome'];
	$dt_nascimento = $_POST['dt_nascimento'];
	$nr_rg = $_POST['nr_rg'];
	$ds_civil = $_POST['ds_civil'];
	$ds_endereco = $_POST['ds_endereco'];
	$nr_numero = $_POST['nr_numero'];
	$ds_complemento = $_POST['ds_complemento'];
	$ds_estado = $_POST['ds_estado'];
	$ds_cidade = $_POST['ds_cidade'];
	$ds_cep = $_POST['ds_cep'];
	$ds_telefone = $_POST['ds_telefone'];
	$ds_email = $_POST['ds_email'];
	$ds_descricao = $_POST['ds_descricao'];

// recebe as Variaveis
$nome = $ds_nome;
$email = $ds_email;

$mensagem = file_get_contents('template/email-orcamento.html');
$mensagem = str_replace("%DS_NOME%", $nome, $mensagem);
$mensagem = str_replace("%TP_DOCUMENTO%", $ie_dados, $mensagem);
$mensagem = str_replace("%DS_DOCUMENTO%", $nr_documento, $mensagem);
$mensagem = str_replace("%DS_CPF%", $nr_documento_cpf, $mensagem);
$mensagem = str_replace("%DS_SERVICOS%", $ds_servicos, $mensagem);
$mensagem = str_replace("%DT_NASCIMENTO%", $dt_nascimento, $mensagem);
$mensagem = str_replace("%NR_RG%", $nr_rg, $mensagem);
$mensagem = str_replace("%DS_CIVIL%", $ds_civil, $mensagem);
$mensagem = str_replace("%DS_ENDERECO%", $ds_endereco, $mensagem);
$mensagem = str_replace("%NR_CASA%", $nr_numero, $mensagem);
$mensagem = str_replace("%DS_COMPLEMENTO%", $ds_complemento, $mensagem);
$mensagem = str_replace("%DS_CIDADE%", $ds_cidade, $mensagem);
$mensagem = str_replace("%DS_ESTADO%", $ds_estado, $mensagem);
$mensagem = str_replace("%NR_CEP%", $ds_cep, $mensagem);
$mensagem = str_replace("%NR_TELEFONE%", $ds_telefone, $mensagem);
$mensagem = str_replace("%DS_EMAIL%", $ds_complemento, $mensagem);
$mensagem = str_replace("%DS_ENDERECO%", $ds_email, $mensagem);
$mensagem = str_replace("%DS_DESCRICAO%", $ds_descricao, $mensagem);

$mensagem = utf8_decode($mensagem);

//INFO IMAGEM
$arquivo = $_FILES['ie_anexo'];
$anexos = count($arquivo);
$arquivo_nome = $arquivo['name'];
$arquivo_caminho = $arquivo['tmp_name'];

//PASTA
$folder = 'anexos/';
for ($i = 0; $i < $anexos; $i++) {
move_uploaded_file($anexos[$i], $folder . $anexos['name'][$i]);
}

// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
include("./PHPMailer/class.phpmailer.php");
require("./PHPMailer/class.smtp.php");

// Inicia a classe PHPMailer
$mail = new PHPMailer();

// Define os dados do servidor e tipo de conexão
$mail->IsSMTP();
$mail->Host = "br688.hostgator.com.br"; // Endereço do servidor SMTP
$mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
$mail->Username = 'orcamento@meirelescontabilidade.com.br'; // Usuário do servidor SMTP
$mail->Password = '0rc@ment0'; // Senha do servidor SMTP
$mail->Port = '25';

// Define o remetente.
$mail->From = "meirelescontabilidade2017@gmail.com"; // Seu e-mail
$mail->FromName = "Orcamento Meireles"; // Seu nome

// Define os destinatário(s)
$mail->AddAddress("meirelescontabilidade2017@gmail.com","Orcamento Meireles");
//$mail->AddCC('orcamento@meirelescontabilidade.com.br', 'Meireles Contabilidade'); // Copia
//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta

// Define os dados técnicos da Mensagem
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML

// Define a mensagem (Texto e Assunto)
$mail->Subject = "Orcamento | Meireles Contabilidade"; // Assunto da mensagem
$mail->Body = $mensagem;

// Anexando
for($i = 0; $i < $anexos; $i++) {
$mail->AddAttachment($arquivo_caminho[$i], $folder . $arquivo_nome[$i]);
}
// Envia o e-mail
$enviado = $mail->Send();

// Exibe uma mensagem de resultado
if ($enviado) {
include("menu.php");
	echo "
	<body>
	<header id='head' class='secondary'></header>
	<div class='container'><div class='row'>";
	echo "<div class='col-sm-12 text-center aviso'>
	<hr/>
	<p>Para imprimir seu comprovante de solicitação de orçamento clique no botão imprimir ao lado ou continue navegando a vontade</p>
	<button onClick='window.print();' type='button' class='btn btn-info' data-dismiss='modal'><span class='glyphicon glyphicon-print'></span> Imprimir</button>
	<a href='index.php' class='btn btn-action'> Voltar a navegar</a>
	<hr/></div>
	";
	echo utf8_encode($mensagem);
	echo "</div></div></body>";
include("footer.php");
//
} else {
echo "Não foi possível enviar o e-mail !";
}
?>

