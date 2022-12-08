<?php
session_start();
if(!isset($_SESSION['id_usuario']))
{
    header("location: menu.html");
    exit; 
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<!-- Corrigido por Wolf -->

<head>
    <link rel="stylesheet" href="Default.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="icon" type="image/x-icon" href="img/icone32-rembg.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Menu Administrativo</title> 
</head>

<body>

<a href="sair.php" type="button" class="btn btn-lg btn-danger"><i class="bi bi-arrow-left"></i></a>

<div class="content shadow">
    <h3><i class="bi bi-person-plus-fill" style="margin:10px;"></i>Cadastros</h3>
    <hr>
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <a href="reg_catqz.html">
                    <img class="card-img-top" src="img/carlos-magno-rk1PUHv8QBM-unsplash.jpg" alt="Cadastro de Catequista">
                    <h5 class="card-title">Catequizando</h5>
                </a>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <a href="reg_catq.html">
                    <img class="card-img-top" src="img/sigmund-HsTnjCVQ798-unsplash.jpg" alt="Cadastro de Catequista">
                    <h5 class="card-title">Catequista</h5>
                </a>
            </div>
        </div>
    </div>
    <br><br>
    <h3><i class="bi bi-search" style="margin:10px;"></i>Buscar</h3>
    <hr>
    <div class="row">
        <div class="col-sm-6 col-sm-3">
            <div class="card">
                <a href="src_catqz.html">
                    <img class="card-img-top" src="img/carlos-magno-rk1PUHv8QBM-unsplash.jpg" alt="Cadastro de Catequista">
                    <h5 class="card-title">Catequizando</h5>
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-sm-3">
            <div class="card">
                <a href="src_et.html">
                    <img class="card-img-top" src="img/debby-hudson-asviIGR3CPE-unsplash.jpg" alt="Cadastro de Catequista">
                    <h5 class="card-title">Etapas</h5>
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-sm-3">
            <div class="card">
                <a href="src_catq.html">
                    <img class="card-img-top" src="img/sigmund-HsTnjCVQ798-unsplash.jpg" alt="Cadastro de Catequista">
                    <h5 class="card-title">Catequista</h5>
                </a>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>