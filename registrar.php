<?php
    session_start();//iniciando objetos de seção
    date_default_timezone_set('America/Sao_Paulo');
    include "conexao.php";
    
    $nome = $_POST['HTML_nome'];
    $email = $_POST['HTML_email'];
    $senha = $_POST['HTML_senha'];
    $confirmarSenha = $_POST['HTML_confirmarSenha'];
	
	if ($senha == $confirmarSenha){
	   $senha = md5($senha);
        $sqlCadastra = "Insert into usuarios (nome, email, senha) values('$nome','$email','$senha')";
        mysqli_query($conn, $sqlCadastra) or die(mysqli_error($conn));
        header("location: home.php");
	} else {
        header("location: registrarUsuario.php?erro=senhaInvalida");
	}
?>