<?php
class Conexao {
    private $host = "localhost";
    private $dbname ="gabr6241_jarvis";
    private $user = "gabr6241_jarvis";
    private $pass = "0r+k9)lv=Ct^";
    
    public function conectar() {
        try {
            $conexao = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname",
                "$this->user",
                "$this->pass"
            );
            return $conexao;
        } catch (PDOException $e) {
            echo '<p>'.$e->getMessage().'</p>';
        }
    }
}
    
?>
