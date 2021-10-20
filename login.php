<?php
    session_start();//iniciando objetos de seção
    date_default_timezone_set('America/Sao_Paulo');
    require "conexao.php";
    $email = $_POST['HTML_email'];
    $senha = md5($_POST['HTML_senha']);
    
    $query = "select * from empresas where email like '$email' and senha like '$senha'";
    $conn = new Conexao;
    $conexao = $conn->conectar();
    
    $stmt = $conexao->prepare($query);
    $stmt->execute();
    $stmt->fetchAll(PDO::FETCH_OBJ);
    /*
    if(mysqli_num_rows($rsLogin) == 0){
        $_SESSION['statusLogin'] = 0;
        $_SESSION['msg'] = "Dados inválidos";
    }else{
        $tblLogin = mysqli_fetch_array($rsLogin);
        $_SESSION['codigo'] = $tblLogin['codigo'];
        $_SESSION['nome'] = $tblLogin['nome'];
        $_SESSION['email'] = $tblLogin['email'];
        $_SESSION['imagem'] = $tblLogin['imagem'];
        $_SESSION['statusLogin'] = 1;
        $_SESSION['horaLogin'] = date('d-m-y h:i');
        
        $_SESSION['msg'] = "Bem vindo, ". $_SESSION['nome'].".";
        $_SESSION['msg'] .= "Acesso em ".$_SESSION['horaLogin'];
    }

    */
  
  header('location:home.php');
    
?>