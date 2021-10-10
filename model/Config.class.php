<?php

Class Config{

	//INFORMAÇÕES BÁSICAS DO SITE
	const SITE_URL = "http://localhost";
	const SITE_PASTA = "loja";
	const SITE_NOME = "Loja Systen ";
	const SITE_EMAIL_ADM = "systen3@gmail.com";

	//INFORMAÇÕES DO BANCO DE DADOS
	const BD_HOST = "localhost",
		  BD_USER = "root",
		  BD_SENHA = "",
		  BD_BANCO = "lojasysten",
		  BD_PREFIX = "";

	//INFORMAÇÕES PARA PHP MAILLER
	const EMAIL_HOST = "smtp.gmail.com";
	const EMAIL_USER = "systen3@gmail.com";
	const EMAIL_NOME = "Contato Loja Systen";
	const EMAIL_SENHA = "infoplace";
	const EMAIL_PORTA = 587;
	const EMAIL_SMTPAUTH = true;
	const EMAIL_SMTPSECURE = "tls";
	const EMAIL_COPIA = "systen3@gmail.com";

		  


}
?>