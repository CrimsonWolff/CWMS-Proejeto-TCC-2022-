<?php 
require 'Conect.php';

$catequista = [];
$id = filter_input(INPUT_GET, 'id');
if ($id) {
    $sql = $pdo->prepare("SELECT * FROM catequista WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount() > 0){
        $catequista = $sql->fetch(PDO::FETCH_ASSOC);
    } else {
        header("Location: catq_geral.php");
        exit;
    }
} else {
    header("Location: catq_geral.php");
}

?>

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
    <title>Editar Dados de Catequista</title>
</head>

<body>

<div class="container">
    <div class="form-box shadow" style="width:700px;">
        <form action="edit_action_catq.php" method="POST">
            <div class="row justify-content-center">
                <div class="col-md-auto">
                    <h1>Atualização de Dados de Catequista</h1>
                </div>
            </div>
            <hr>
            <input type="hidden" name= "id" value="<?=$catequista['id'];?>"/>
            <div class="input-group">
                <label for="nome">Nome completo:</label>
                <input type="text" name="nome" value="<?=$catequista['nome'];?>"/>
            </div>
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" name="email" value="<?=$catequista['email'];?>"/>
            </div>
            <div class="input-group">
                <label for="telefone">Telefone:</label>
                <input type="tel" name="fone" value="<?=$catequista['fone'];?>"/>
            </div>
            <div class="input-group date">
                <label for="data">Data de nascimento:</label>
                <input type="date" name="nasc" value="<?=$catequista['nasc'];?>"/>
            </div>

            <div class="col-md-12 text-center">
                <button type="submit" value="Atualizar" class="btn btn-outline-success">Atualizar</button>
            </div>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>