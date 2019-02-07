<?php
if (isset($_POST['BTEnvia'])) {

	//Variaveis de POST, Alterar somente se necessário
	//====================================================
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$codigo = $_POST['codigo'];
	$cidade = $_POST['cidade'];
	
	//Array para sortear o premio para o licenciado
	$palavras = array(
		'http://metodosmart.com.br/2019/02/06/premio01/',
		'http://metodosmart.com.br/2019/02/07/premio02/',
		'http://metodosmart.com.br/2019/02/07/premio03/',
		'http://metodosmart.com.br/2019/02/07/premio04/',
		'http://metodosmart.com.br/2019/02/07/premio05/');
	$aleatorio = rand(0, 2);
	
	//====================================================
	//====================================================
	//REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
	$email_remetente = "petronio.smartmachine@gmail.com";
	// deve ser uma conta de email do seu dominio
	//====================================================
	//====================================================
	//Configurações do email, ajustar conforme necessidade
	$email_destinatario = "vendas@smartmachine.com.br";
	// pode ser qualquer email que receberá as mensagens
	$email_reply = "$email";
	// Este será o assunto da mensagem
	$email_assunto = "Contato Premio";
	//====================================================
	//====================================================
	//Monta o Corpo da Mensagem
	$email_conteudo = "Nome = $nome \n";
	$email_conteudo .= "Email = $email \n";
	$email_conteudo .= "Codigo = $codigo \n"; 
	$email_conteudo .= "Cidade = $cidade \n";
	$email_conteudo .= "Premio = $palavras[$aleatorio] \n";
	//==================================================== 
	//==================================================== 
	//Seta os Headers (Alterar somente caso necessario)
	$email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
	//====================================================
	//====================================================
	//Enviando o email
	if (mail($email_destinatario,$email_assunto,nl2br($email_conteudo),$email_headers)){
		header ("location: $palavras[$aleatorio]");
	}
	else{
		header ("location: http://metodosmart.com.br/2019/02/07/premioerro/");
	}
		//======================================
}
?>