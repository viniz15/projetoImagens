<?php

class Produto_class{

    private $pdo

    public function_constructor($dbname, $host, $dbuser, $dbpass) {
        try {
            $this->pdo = new PDO("mysql:dbname=".dbname.";host=".$host,$dbuser,$dbpass);
            
        } catch (PDOException $e) {
            echo "ERRO com banco de dados: ".$e->getMessage();
            
        } catch (Exception $e){
            echo "ERRO genérico: ".$e->getMessage();
        }
        
    }

    public function enviarProduto($nome, $descricao, $fotos = array()) {
    }

    public function buscarProdutos() {
        
    }

    public function buscarProdutosPorID($id) {
        
    }

    public function buscarImagemPorID($id) {
        
    }

}

?>