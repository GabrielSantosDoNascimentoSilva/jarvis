<?php
    session_start();
    if(!isset($_SESSION['statusLogin']) || $_SESSION['statusLogin'] == 0){
        header("Location: FormLogin.php");
     }else{ ?>
        <b><?=$_SESSION['msg'];?>.</B>
        <!-- <a href="logoff.php">Sair</a> -->
    <?php }
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            <?php
                include "css/bootstrap.min.css";
                include "css/estiloMenu.css";
                include "css/estilo.css";
            ?>
        </style>
        <script><?php include "js/funcoes.js"?></script>
    </head>
    
    <body>
        
        
        <div class="container">
            
            <div class="row">
                <div class="col-md-12">
                   <!--area de login-->
                   <?php
                    include "FormLogin.php";
                   ?>
                   
                   
                </div>
            </div>
            
            
            <div class="row">
                <div class="col-md-12">
                    <?php
                        include "Menu.php";
                    ?>
                </div>
                
            </div>
            
            
            <div class="row">
                <div class="col-md-12">
                    <?php
                        if(!isset($_GET['codPg'])){//se não houver a variável codPg
                            include 'listaEmpresas.php';
                        }else{
                            $codPg = $_GET['codPg'];
                            if($codPg == 10){                             
                                 include "formCadastraEmpresa.php";
                            }else if($codPg == 11){
                                include "listaEmpresas.php";
                            }else if($codPg == 12){
                                include "detalhesEmpresa.php";
                                include "listarServicos.php";
                            }else if($codPg == 13){
                                include "formAlteraEmpresa.php";
                            }else if($codPg == 20){
                                include "formCadastraServico.php";
                            }else if($codPg == 21){
                                include "formAlteraServico.php";
                                //include "listaServicos.php";
                            }else if($codPg == 22){
                                //include "detalhesServico.php";
                            }else if($codPg == 23){
                                include "formAlteraServico.php";
                            }    
                        }
                    ?>
                </div>
            </div>
            
            
            
        </div>
        
        
        <?php
            
        ?>
    </body>
    
</html>
