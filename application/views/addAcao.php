<?php
defined('BASEPATH') OR exit('No direct script acess allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar um Personagem</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<br>
<h1 class="text-center">Adicionar Personagem</h1>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/desafio-php-1">Inicio</a></li>
        <li class="breadcrumb-item active" aria-current="page">Novo Personagem</li>
    </ol>
    </nav>
    <div class="container">
        <form action="salvar" method="POST" enctype='multipart/form-data'>
        <div class="form-group">
                <div>
                    <label for="name">Nome:</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div>
                    <label for="name">Altura:</label>
                    <input type="text" class="form-control" name="height">
                </div>
                <div>
                    <label for="name">Peso:</label>
                    <input type="text" class="form-control" name="mass">
                </div>
                <div>
                    <label for="name">Cor do cabelo:</label>
                    <input type="text" class="form-control" name="hair_color">
                </div>
                <div>
                    <label for="name">Cor de pele:</label>
                    <input type="text" class="form-control" name="skin_color">
                </div>
                <div>
                    <label for="name">Cor do olho:</label>
                    <input type="text" class="form-control" name="eye_color">
                </div>
                <div>
                    <label for="name">Data de Nascimento:</label>
                    <input type="text" class="form-control" name="birth_year">
                </div>
                <div>
                    <label for="name">Genero:</label>
                    <input type="text" class="form-control" name="gender">
                </div>
                <div>
                    <label for="name">Terra Natal:</label>
                    <input type="text" class="form-control" name="homeworld">
                </div>
                <div>
                    <label for="name">Filmes:</label>
                    <input type="text" class="form-control" name="films">
                </div>
                <div>
                    <label for="name">Espécies:</label>
                    <input type="text" class="form-control" name="species">
                </div>
                <div>
                    <label for="name">Veículos:</label>
                    <input type="text" class="form-control" name="vehicles">
                </div>
                <div>
                    <label for="name">Naves Espaciais:</label>
                    <input type="text" class="form-control" name="starships">
                </div>
                <div>
                    <label for="name">Criado:</label>
                    <input type="text" class="form-control" name="created">
                </div>
                <div>
                    <label for="name">Editado:</label>
                    <input type="text" class="form-control" name="edited">
                </div>
                <br>
                <button type="submit" class="btn btn-success">Salvar</button>
            </div>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>