<?php

// recebe as Variaveis
$nome = "Edson Carlos";
$email = "jhonatareboucas@gmail.com";
$mensagem = "mensagem";

//INFO IMAGEM
$arquivo = $_FILES['arquivo'];
$anexos = count($arquivo);
$arquivo_nome = $arquivo['name'];
$arquivo_caminho = $arquivo['tmp_name'];

//$arquivos = count($arquivo['name']);

//PASTA
$folder = 'anexos/';
for ($i = 0; $i < $anexos; $i++) {
move_uploaded_file($anexos[$i], $folder . $anexos['name'][$i]);
}

// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
include("../PHPMailer/class.phpmailer.php");
require("../PHPMailer/class.smtp.php");

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
$mail->From = "jhonatareboucas@gmail.com"; // Seu e-mail
$mail->FromName = "Administrador"; // Seu nome

// Define os destinatário(s)
$mail->AddAddress($email, $nome);
$mail->AddCC('orcamento@meirelescontabilidade.com.br', 'Meireles Contabilidade'); // Copia
//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta

// Define os dados técnicos da Mensagem
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML

// Define a mensagem (Texto e Assunto)
$mail->Subject = "Mensagem do site"; // Assunto da mensagem
$mail->Body = $mensagem;

// Anexando
for($i = 0; $i < $anexos; $i++) {
$mail->AddAttachment($arquivo_caminho[$i], $folder . $arquivo_nome[$i]);
}
// Envia o e-mail
$enviado = $mail->Send();

// Exibe uma mensagem de resultado
if ($enviado) {
echo "E-mail enviado com sucesso!";

} else {
echo "Não foi possível enviar o e-mail !";
}
?>

