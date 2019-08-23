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
<h1 class="text-center">Informações sobre <?php echo $starwar->name ?></h1>
  <div class="container">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/desafio-php-1">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Informações Personagem</li>
        </ol>
    </nav>

        <div class="row">
            <div class="col-md-2 text-right">
                <h4>Nome:</h4>
            </div>
            <div class="col-md-10">
                <h4 ><?php echo $starwar->name ?></h4>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-2 text-right">
                <h4>Altura:</h4>
            </div>
            <div class="col-md-10">
                <h4><?php echo $starwar->height ?></h4>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-2 text-right">
                <h4>Peso:</h4>
            </div>
            <div class="col-md-10">
                <h4><?php echo $starwar->mass ?></h4>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-2 text-right">
                <h4>Cor do cabelo:</h4>
            </div>
            <div class="col-md-10">
                <h4><?php echo $starwar->hair_color ?></h4>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-2 text-right">
                <h4>Cor de pele:</h4>
            </div>
            <div class="col-md-10">
                <h4><?php echo $starwar->skin_color ?></h4>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-2 text-right">
                <h4>Cor do olho:</h4>
            </div>
            <div class="col-md-10">
                <h4><?php echo $starwar->eye_color ?></h4>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-2 text-right">
                <h4>Data de Nascimento:</h4>
            </div>
            <div class="col-md-10">
                <h4><?php echo $starwar->birth_year ?></h4>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-2 text-right">
                <h4>Genero:</h4>
            </div>
            <div class="col-md-10">
                <h4><?php echo $starwar->gender ?></h4>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-2 text-right">
                <h4>Terra Natal:</h4>
            </div>
            <div class="col-md-10">
                <h4><?php echo $starwar->homeworld ?></h4>
            </div>
        </div>        
        <hr> 
        <div class="row">   
            <div class="col-md-2 text-right">
                <h4>Filmes:</h4>
            </div>
            <div class="col-md-10">
                <h4><?php echo $starwar->films ?></h4>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-2 text-right">
                <h4>Espécies:</h4>
            </div>
            <div class="col-md-10">
                <h4><?php echo $starwar->species ?></h4>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-2 text-right">
                <h4>Veículos:</h4>
            </div>
            <div class="col-md-10">
                <h4><?php echo $starwar->vehicles ?></h4>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-2 text-right">
                <h4>Naves Espaciais:</h4>
            </div>
            <div class="col-md-10">
                <h4><?php echo $starwar->starships ?></h4>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-2 text-right">
                <h4>Criado:</h4>
            </div>
            <div class="col-md-10">
                <h4><?php echo $starwar->created ?></h4>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-2 text-right">
                <h4>Editado:</h4>
            </div>
            <div class="col-md-10">
                <h4><?php echo $starwar->edited ?></h4>
            </div>
        </div>
        <hr>
                <!-- <input type="hidden" name="id" value="<?php echo $starwar->id ?>"> -->
        </div>
    </div> 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>