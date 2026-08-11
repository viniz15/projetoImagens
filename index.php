<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <section>

        <a href="produtos.php">Ver todos os Produtos</a>

        <form method="POST" enctype="multipart/form-data">

            <h1>ENVIO DE IMAGENS</h1>

            <label for="nome">Nome do Produto</label>
            <input type="text" name="nome" id="nome">
            <label for="desc">Descrição do Produto...</label>
            <input type="text" name="desc" id="desc">
            <textarea name="desc" id="desc"></textarea>
            <input type="file" name="foto[]" multiple id="foto">
            <input type="submit" id="botao">

        </form>
        
    </section>
    
</body>
</html>

<?php

if (isset($_POST['nome'])) {
    # code...
}

?>