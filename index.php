<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilo.css">
    <title>Document</title>
</head>
<body>

    <section>

        <a href="produtos.php">Ver todos os Produtos</a>

        <form method="POST" enctype="multipart/form-data">

            <h1>ENVIO DE IMAGENS</h1>

            <div class="container">

                <label for="nome">Nome do Produto</label>
                <input type="text" name="nome" id="nome">

                <div class="row">
                    <label for="nome">Valor do Produto</label>
                    <input type="number" step="0.01" name="valor" id="valor">
                </div>
                

                <label for="desc">Descrição do Produto</label>
                <textarea name="desc" id="desc"></textarea>
                
                <input type="file" name="foto[]" multiple id="foto">
                
                <input type="submit" id="botao">

            </div>

        </form>
        
    </section>
    
</body>
</html>

<?php

// if (isset($_POST['nome'])) {
//     $nome = addcslashes($_POST['nome']);
//     $descricao = addcslashes($_POST['desc']);
//     $fotos = array();

//     if (isset($_FILES['foto'])) {
//         for ($i=0; $i < ; $i++) { 
//         
//         }
//     }

// }

?>