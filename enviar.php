<?

include("class.phpmailer.php");
//instancia a objetos
$mail = new PHPMailer();
// mandar via SMTP
$mail->IsSMTP(); 
// Seu servidor smtp
$mail->Host = "smtp.fabiolimarocha.com.br"; 
// habilita smtp autenticado
$mail->SMTPAuth = true; 
// usuário deste servidor smtp
$mail->Username = "contato@fabiolimarocha.com.br"; 
$mail->Password = "F@b1o003"; // senha
//email utilizado para o envio 
//pode ser o mesmo de username
$mail->From = "contato@fabiolimarocha.com.br";
$mail->FromName = "Contato - Fabio Lima Rocha";

//Enderecos que devem ser enviadas as mensagens
$mail->AddAddress("contato@fabiolimarocha.com.br","Contato - Fabio Lima Rocha");
//wrap seta o tamanhdo do texto por linha
$mail->WordWrap = 50; 
//anexando arquivos no email
$mail->AddAttachment("anexo/arquivo.zip"); 
$mail->AddAttachment("imagem/foto.jpg");
$mail->IsHTML(true); //enviar em HTML

// recebendo os dados od formulario
if(isset($_POST['nome'])){
	$nome     = ucwords($_POST['nome']);
	$email 	  = $_POST['email'];	
	$mensagem 	  = $_POST['mensagem'];
	
	
	
    // informando a quem devemos responder 
	//ou seja para o mail inserido no formulario
	$mail->AddReplyTo("$email","$nome");
	//criando o codigo html para enviar no email
	//vocepode utilizar qualquer tag html ok
	$msg  = "";
	$msg .= "<b> Nome:</b> $nome<br>\n";
	$msg .= "<b> E-mail:</b> $email<br><br>\n";	
	$msg .= "<b> Mensagem:</b> $mensagem<br>\n";
		
 }
 
$mail->Subject = "Contato - Fabio Lima Rocha";
//adicionando o html no corpo do email
$mail->Body = $msg;
//enviando e retornando o status de envio
if(!$mail->Send())
{
//echo "<P>Houve um erro ao  enviar o email! </P> ".$mail->ErrorInfo;
echo "<script>alert(\"Houve um erro ao enviar a mensagem, tente novamente!\")</script>";
echo "<script>location.href='/'</script>";
//$mail->ErrorInfo informa onde ocorreu o erro 
exit;
}

echo "<h1>Sua mensagem foi enviada com sucesso!</h1>";

?>

<style type="text/css">
	h1 { padding: 30px 0px 0px 25px ; text-align:center; font-size: 30px; color: #fff; text-align: center; font-family: "Lucida Grande", Verdana; text-shadow: 0px 0px 5px #777;} /*Titulo das paginas*/

</style>

<div id="content">
	<div id="content-mensagens">
		<meta http-equiv="refresh" content="5;url=/"> 
	</div>
</div>