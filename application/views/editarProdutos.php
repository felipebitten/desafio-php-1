<?php
defined('BASEPATH') OR exit('No direct script acess allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Produtos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<br>
<h1 class="text-center">Editar Produto</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/desafio-php-1">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Editar Produto</li>
        </ol>
    </nav>
    <div class="container">
        <form action="/desafio-php-1/index.php/produtos/salvar" method="POST" enctype='multipart/form-data'>
            <div class="form-group">
                <div>
                    <label for="name">Nome:</label>
                    <input type="text" class="form-control" value="<?php echo $produto->nome ?>" name="nome">
                </div>
                <br>
                <div>
                    <label for="end">Descrição:</label>
                    <textarea class="form-control" value="" name="descricao"> <?php echo $produto->descricao ?> </textarea>
                </div>
                <br>
                <div>
                    <label for="tel">Quantidade:</label>
                    <input type="text" class="form-control" value="<?php echo $produto->quantidade ?>" name="quantidade">
                </div>

                <br>
                <input type="hidden" name="id" value="<?php echo $produto->id ?>">
                <button type="submit" class="btn btn-success">Salvar</button>
            </div>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>