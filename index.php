<html>
<head>
<title>Minha primeira página</title>
</head>
<body>
	
	<form>
		<p>
			Nome:<br />
			<input type="text" size="35" name="nome">
		</p>
		<p>
			E-mail:<br />
			<input type="text" size="35" name="email">
		</p>
		<p>
			Codigo:<br />
			<input type="text" size="35" name="codigo">
		</p>
		<p>
			Cidade:<br />
			<input type="text" size="35" name="cidade">
		</p>
		<p>
        	<input type="submit" name="BTEnvia" value="Enviar">
	    </p>
	</form>

<?php
if (isset($_POST['BTEnvia'])) {

	//Variaveis de POST, Alterar somente se necessário 
	//====================================================
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$codigo = $_POST['codigo'];
	$cidade = $_POST['cidade'];
	//====================================================

	//REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
	//==================================================== 
	$email_remetente = "petronio.smartmachine@gmail.com";
	// deve ser uma conta de email do seu dominio 
	//====================================================

	//Configurações do email, ajustar conforme necessidade
	//==================================================== 
	$email_destinatario = "luisotavio.smartmachine@gmail.com"; // pode ser qualquer email que receberá as mensagens
	$email_reply = "$email";
	$email_assunto = "Contato Premio"; // Este será o assunto da mensagem
	//====================================================

	//Monta o Corpo da Mensagem
	//====================================================
	$email_conteudo = "Nome = $nome \n"; 
	$email_conteudo .= "Email = $email \n";
	$email_conteudo .= "Codigo = $codigo \n"; 
	$email_conteudo .= "Cidade = $cidade \n";
	$email_conteudo .= "Premio = $aleatorio \n";
	//====================================================

	//Seta os Headers (Alterar somente caso necessario) 
	//==================================================== 
	$email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
	//====================================================
	
	//Enviando o email 
	//==================================================== 
	if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
		echo "</b>E-Mail enviado com sucesso!</b>";
	} 
	else{
		echo "</b>Falha no envio do E-Mail!</b>";
		
		$input = array('1', '2', '18', '23', '24', '27', '30', '31', '35', '37', '39', '45', '47', '50', '51', '53', '56', '58');

		for($i =0; $i < 6; $i++){
			echo "<b>".$input[array_rand($input)]."</b>"."-";
}
	}
		//======================================
	}
?>

</body>
</html>