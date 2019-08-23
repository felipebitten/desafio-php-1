<?php
defined('BASEPATH') OR exit('No direct script acess allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Personagem</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        .margin-button15{
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>Lista de Personagem</h1>

            <a href="index.php/starwars/add" class="btn btn-success margin-button15">Novo Personagem</a>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">Nome</th>
                            <th class="text-center">Ações</th>
                        </tr>
                    </thead>

                  
                    <?php
                    $contador = 0;
                    foreach($starwars as $starwar){  
                        echo '<tr>';
                            echo '<td class="text-left"><b>'.$starwar->name.'</b></td>';
                            echo '<td class="text-center">';
                                echo '<a href="index.php/starwars/editar/'.$starwar->id.'" title="Editar" class="btn 
                                btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>';
                                echo '<a href="index.php/starwars/apagar/'.$starwar->id.'" title="Apagar" class="btn 
                                btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>';
                                echo '<a href="index.php/starwars/info/'.$starwar->id.'" title="Info" class="btn 
                                btn-primary"><span class="glyphicon glyphicon-book" aria-hidden="true"></span></a>';
                            echo'</td>';
                        echo'</tr>';
                    $contador++;
                    }
                    ?>
                </table>
            <div class="row">
                <div class="col-md-12">
                    Total de Registros: <?php echo $contador ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>