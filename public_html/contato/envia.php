<?php
session_start();

//include("../includes/conexao/conexao.php");

date_default_timezone_set('America/Sao_Paulo');

$nome     = $_POST["nome"];
$email    = $_POST["email"];
$telefone = $_POST["telefone"];
$mensagem = $_POST["mensagem"];

// Salva no banco de dados
//$pdo = Database::conexao();
//$stmt = $pdo->prepare("INSERT INTO contato(nome, email, telefone, mensagem, data_hora) VALUES (:nome, :email, :telefone, :mensagem, :data_hora)");

/*$stmt->execute(array(
  ':nome'     => $nome,
  ':email'    => $email,
  ':telefone' => $telefone,
  ':mensagem' => $mensagem,
  ':data_hora' => date('Y-m-d H:i:s')
));

//$id = $pdo->lastInsertId();*/
 
// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
require("../phpmailer/class.phpmailer.php");

$mailer = new PHPMailer();
$mailer->IsSMTP();
$mailer->SMTPDebug = 1;
$mailer->Port = 587; //Indica a porta de conexão para a saída de e-mails
$mailer->Host = 'smtp.agenciabridge.com.br';//Endereço do Host do SMTP Locaweb
$mailer->SMTPAuth = true; //define se haverá ou não autenticação no SMTP
$mailer->Username = 'contato@agenciabridge.com.br'; //Login de autenticação do SMTP
$mailer->Password = '*Contato@2018'; //Senha de autenticação do SMTP
$mailer->FromName = 'Agencia Bridge'; //Nome que será exibido para o destinatário
$mailer->From = 'contato@agenciabridge.com.br'; //Obrigatório ser a mesma caixa postal configurada no remetente do SMTP
$mailer->AddAddress('jeison@agenciabridge.com.br','Jeison'); //Destinatários
$mailer->AddAddress('emerson@agenciabridge.com.br','Emerson'); //Destinatários
//$mailer->AddAddress($email); //Destinatários
$mailer->IsHTML(true); 
$mailer->Subject = 'Contato pelo site';

$emails =
	'
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Agência Bridge</title>
	<table cellpadding="0" cellspacing="0" width="900px">
		<tr>
			<td width="100%" align="left" valign="top">
			<b style="font-family:Arial, Helvetica, sans-serif; color:#7FB4DA; margin-top:1px; font-size:18px;">Contato pelo Site</b>
			<p class="p1">
				<b>Nome:</b> '.$nome.'<br>
				<b>E-mail:</b> '.$email.'<br>
				<b>Telefone:</b> '.$telefone.'<br>
				<b>Mensagem:</b> '.$mensagem.'<br>
			</p>
			</td>
		</tr>
	</table>
	';

$mailer->Body = $emails;
if(!$mailer->Send())
{
echo "Message was not sent";
echo "Mailer Error: " . $mailer->ErrorInfo; exit; }

$_SESSION['usuario'] = $nome;

header("Location: /contato");
die();

?>