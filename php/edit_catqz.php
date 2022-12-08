<?php 
require 'Conect.php';

$catequizando = [];
$id = filter_input(INPUT_GET, 'id');
if ($id) {
    $sql = $pdo->prepare("SELECT * FROM catequizando WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount() > 0){
        $catequizando = $sql->fetch(PDO::FETCH_ASSOC);
        switch ($catequizando["etapa"]) {
            case "1 Eucaristia":
                $etapa = "0";
                break;
            
            case "2 Eucaristia":
                $etapa = "1";
                break;
        
            case "3 Eucaristia":
                $etapa = "2";
                break;
        
            case "1 Crisma":
                $etapa = "3";
                break;
        
            case "2 Crisma":
                $etapa = "4";
                break;
        
            case "3 Crisma":
                $etapa = "5";
                break;
                
        }
    } else {
        header("Location: catqz_geral.php");
        exit;
    }
} else {
    header("Location: catqz_geral.php");
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
    <title>Editar Dados de Catequizando</title>
</head>

<body>

<div class="container">
    <div class="form-box shadow" style="width:900px;">
        <form action="edit_action_catqz.php" method="POST">
            <div class="row justify-content-center">
                <div class="col-md-auto">
                    <h1>Atualização de Dados de Catequizando</h1>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-6 col-md-6">
                    <h5>Dados do Catequizando</h5>
                    <input type="hidden" name="id" value="<?=$catequizando['id'];?>"/>
                    <div class="input-group">
                        <label for="centcat">Centro catequético:</label>
                        <input type="text" name="centcat" value="<?=$catequizando['centcat'];?>"/>
                    </div>
                    <div class="input-group">
                        <label for="nome">Nome completo:</label>
                        <input type="text" name="nome" value="<?=$catequizando['nome'];?>"/>
                    </div>
                    <div class="input-group">
                        <label for="city">Cidade:</label>
                        <input type="text" name="city" value="<?=$catequizando['cidade'];?>"/>
                    </div>
                    <div class="input-group">
                        <label for="nome">Data de Nascimento:</label>
                        <input type="date" name="nasc" value="<?=$catequizando['nasc'];?>"/>
                    </div>
                    <div class="input-group">
                        <label for="batparoq">Batizado na Paróquia:</label>
                        <input type="text" name="batparoq" value="<?=$catequizando['batparoq'];?>"/>
                    </div>
                    <div class="input-group">
                        <label for="Etapa">Etapa: </label>
                        <select name="etapa" class="custom-select" arial-label="Default Select">
                            <option value="0">1º de Eucaristia</option>
                            <option value="1">2º de Eucaristia</option>
                            <option value="2">3º de Eucaristia</option>
                            <option value="3">1º de Crisma</option>
                            <option value="4">2º de Crisma</option>
                            <option value="5">3º de Crisma</option>
                        </select>                        
                    </div>
                    <div class="input-group w50">
                        <label for="anoetapa">Data de etapa:</label>
                        <input type="date" name="anoetapa" value="<?=$catequizando['anoetapa'];?>"/>
                    </div>
                </div>
                <hr>
                <div class="col-xs-6 col-md-6">
                    <h5>Dados Familiares</h5>
                    <div class="input-group">
                        <label for="nome">Nome do pai:</label>
                        <input type="text" name="npai"  value="<?=$catequizando['npai'];?>"/>
                    </div>
                    <div class="input-group">
                        <label for="nome">Nome da mãe:</label>
                        <input type="text" name="nmae"  value="<?=$catequizando['nmae'];?>"/>
                    </div>
                    <hr>
                    <h5>Contato</h5>
                    <div class="input-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email"  value="<?=$catequizando['email'];?>"/>
                    </div>
                    <div class="input-group">
                        <label for="telefone">Telefone:</label>
                        <input type="tel" name="fone" value="<?=$catequizando['fone'];?>"/>
                    </div>
                   <div class="input-group">
                        <label for="endereco">Endereço:</label>
                        <input type="text" name="end" value="<?=$catequizando['endereco'];?>"/>
                   </div>
                </div>
            </div>

            <div class="col-md-12 text-center">
                <button type="submit" value="Atualizar" class="btn btn-outline-success">Atualizar</button>
            </div>
        </form>
    </div>
</div>

</body>

</html>