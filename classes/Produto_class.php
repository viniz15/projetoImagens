<?php

class Produto_class{

    private $pdo

    public function_construct($dbname, $host, $dbuser, $dbpass,) {
        try {
            $this->pdo = new PDO("mysql:dbname=".dbname.";host=".$host,$dbuser,$dbpass);
            
        } catch (PDOException $e) {
            echo "ERRO com banco de dados: ".$e->getMessage();
            
        } catch (Exception $e){
            echo "ERRO genérico: ".$e->getMessage();
        }
        
    }

    public function enviarProduto($nome, $descricao, $fotos = array()) {
        $sql = "INSERT INTO produtos SET descricao = :d, nome_produto = :n, valor = :v";
        $sql = $this->pdo->prepare($sql);
        $sql -> bindValue(":d",$descricao);
        $sql -> bindValue(":n",$nome);
        $sql -> bindValue(":v",$valor);

        $isOk = $sql->execute();

        if ($isOK) {
            $id_produto = $this->pdo->lastInsertId();
        }

        if (count( $fotos)) {
            for ($i=0; $i < count($fotos); $i++) {
                $nome_foto = $foto[i];

                $sql = "INSERT INTO imagens (nome_imagens, fk_id_produto) VALUES (:n; :fk)";
                $sql = $this->pdo->prepare($sql);
                $sql -> bindValue(":fk", $id_produto);
                $sql -> bindValue(":n", $nome_foto);

                return $sql->exeute();
            }
        }
    }

    public function buscarProdutos() {
        
    }

    public function buscarProdutosPorID($id) {
        
    }

    public function buscarImagemPorID($id) {
        
    }

}

?>