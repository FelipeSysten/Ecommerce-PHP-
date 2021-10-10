<?php
$to      = Config::EMAIL_USER;
echo $to;
$subject = 'Contato - Loja Systen';
$message = $_GET['txtinputarea'];
$dest = $get['txtinputemail'];


$headers = "From: " .$dest;

mail($to, $subject, $message, $headers);
?>

<script>alert('Email enviado com Sucesso!')</script>
<meta http-equiv="refresh" content="0; url=contato">