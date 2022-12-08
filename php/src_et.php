<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="Default.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="icon" type="image/x-icon" href="img/icone32-rembg.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Lista de Etapas</title>
</head>

<body>
<?php
require "Conect.php";

//Pesquisa pelos dados na pág "busca_etapa.html"
$etapa=$_POST["etapa"];
$anoetapa=$_POST["dt_etapa"];

switch ($etapa) {
    case '0':
        $etapa = "1 Eucaristia";
        break;
    
    case '1':
        $etapa = "2 Eucaristia";
        break;

    case '2':
        $etapa = "3 Eucaristia";
        break;

    case '3':
        $etapa = "1 Crisma";
        break;

    case '4':
        $etapa = "2 Crisma";
        break;

    case '5':
        $etapa = "3 Crisma";
        break;
        
}


$search = $pdo->prepare("SELECT * FROM `catequizando` WHERE `etapa` LIKE '%$etapa%' AND `anoetapa` LIKE '%$anoetapa%'");
$search->execute();
?>

<!-- Menu de navegação -->
<a type="button" href="src_catqz.html" class="btn btn-danger"><i class="bi bi-arrow-left"></i></a>
<div class="container">
    <div class="row justify-content-center">
        <h1><i class="bi bi-person-fill">Lista de Etapas<i class="bi bi-person-fill"></h1></i></i>
    </div>
</div>

<!-- Lista jumbotron -->
<div class="jumbotron-fluid">
    <div class="table-responsive-lg">
        <table class="table table-hover table-striped">
            <thead class="thead-dark">
                <tr>
                    <th class="pl-md-5" scope="col">Nome</th>
                    <th scope="col">Data de Nascimento</th>
                    <th scope="col">Nome do Pai</th>
                    <th scope="col">Nome da Mãe</th>
                    <th scope="col">endereço</th>
                    <th scope="col">Etapa</th>
                    <th></th>
                </tr>
            </thead>


<?php 
while($row = $search->fetch(PDO::FETCH_ASSOC)){
?>

            <tbody>
                <th class="pl-md-5" scope="row"><?php echo $row['nome'];?></th>
                <td><?php echo $row['nasc'];?></td>
                <td><?php echo $row['nmae'];?></td>
                <td><?php echo $row['npai'];?></td>
                <td><?php echo $row['endereco'];?></td>
                <td><?php echo $row['etapa'];?></td>
                <td>
                    <a type="button" href="edit_catqz.php?id=<?php echo $row['id']; ?>" class="btn btn-info"><i class="bi bi-pencil-fill"></i></a>
                    <a href="del_catqz.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
                </td>

<?php
}
?>

            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>

