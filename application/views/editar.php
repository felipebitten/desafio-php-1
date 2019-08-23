<?php
defined('BASEPATH') OR exit('No direct script acess allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Starwars</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<br>
<h1 class="text-center">Editar Personagem</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/desafio-php-1">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Editar Personagem</li>
        </ol>
    </nav>
    <div class="container">
        <form action="/desafio-php-1/index.php/starwars/salvar" method="POST" enctype='multipart/form-data'>
            <div class="form-group">
                <div>
                    <label for="name">Nome:</label>
                    <input type="text" class="form-control" value="<?php echo $starwar->name ?>" name="name">
                </div>
                <div>
                    <label for="name">Altura:</label>
                    <input type="text" class="form-control" value="<?php echo $starwar->height ?>" name="height">
                </div>
                <div>
                    <label for="name">Peso:</label>
                    <input type="text" class="form-control" value="<?php echo $starwar->mass ?>" name="mass">
                </div>
                <div>
                    <label for="name">Cor do cabelo:</label>
                    <input type="text" class="form-control" value="<?php echo $starwar->hair_color ?>" name="hair_color">
                </div>
                <div>
                    <label for="name">Cor de pele:</label>
                    <input type="text" class="form-control" value="<?php echo $starwar->skin_color ?>" name="skin_color">
                </div>
                <div>
                    <label for="name">Cor do olho:</label>
                    <input type="text" class="form-control" value="<?php echo $starwar->eye_color ?>" name="eye_color">
                </div>
                <div>
                    <label for="name">Data de Nascimento:</label>
                    <input type="text" class="form-control" value="<?php echo $starwar->birth_year ?>" name="birth_year">
                </div>
                <div>
                    <label for="name">Genero:</label>
                    <input type="text" class="form-control" value="<?php echo $starwar->gender ?>" name="gender">
                </div>
                <div>
                    <label for="name">Terra Natal:</label>
                    <input type="text" class="form-control" value="<?php echo $starwar->homeworld ?>" name="homeworld">
                </div>
                <div>
                    <label for="name">Filmes:</label>
                    <input type="text" class="form-control" value="<?php echo $starwar->films ?>" name="films">
                </div>
                <div>
                    <label for="name">Espécies:</label>
                    <input type="text" class="form-control" value="<?php echo $starwar->species ?>" name="species">
                </div>
                <div>
                    <label for="name">Veículos:</label>
                    <input type="text" class="form-control" value="<?php echo $starwar->vehicles ?>" name="vehicles">
                </div>
                <div>
                    <label for="name">Naves Espaciais:</label>
                    <input type="text" class="form-control" value="<?php echo $starwar->starships ?>" name="starships">
                </div>
                <div>
                    <label for="name">Criado:</label>
                    <input type="text" disabled class="form-control" value="<?php echo $starwar->created ?>" name="created">
                </div>
                <div>
                    <label for="name">Editado:</label>
                    <input type="text" class="form-control" value="<?php echo $starwar->edited ?>" name="edited">
                </div>
                <br>
                <input type="hidden" name="id" value="<?php echo $starwar->id ?>">
                <button type="submit" class="btn btn-success">Salvar</button>
            </div>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>