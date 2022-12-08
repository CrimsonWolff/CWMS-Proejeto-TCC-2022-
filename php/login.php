<?php
  require_once 'CLASSES/Usuarios.php'; 
  $u = new Usuario;
?>

<!DOCTYPE html>
<html lang="pt-br">
<!-- Corrigido por Wolf -->

<head>
    <link rel="stylesheet" href="Default.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="img/icone32-rembg.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Redemptio in Christo - Login</title>
</head>

<body>

<!-- Form -->
<div class="container">
<div class="form-box login-form" style="background-color:transparent;">
    <form method="POST">
        <div class="row justify-content-center">
            <div class="col-md-auto">
                <h1>Login</h1>
            </div>
        </div>
        <hr>
        <div class="input-group">
            <input type="email" name="email" placeholder="Email"/>
        </div>
        <div class="input-group">
            <input type="password" name="senha" placeholder="Senha"/>
        </div>
        <div class="col-md-12 text-center">
            <button type="submit" value="ACESSAR" class="btn btn-outline-success">Entrar</button>
            <button type="reset" value="Limpar" class="btn btn-outline-danger">Limpar</button>
            <a href="index.html" type="button" class="btn btn-danger">Voltar</a>
        </div>
        <p class="text-justify mt-sm-3">Ainda não é inscrito?<a href="user_reg.php">Cadastre-se</a></p>
    </form>


<?php

if(isset($_POST['email']))
{
    $email = addslashes ($_POST['email']);
    $senha = addslashes ($_POST['senha']);

    if(!empty($email)  && !empty($senha))
    {
        $u->conectar("login_catequese","localhost", "root", "");
        if($u->msgErro == "")
        {
        if ($u->logar($email, $senha))
        {
           header("location: menu.php"); 
        }
        else 
        {
            ?>
            <div class="msg-erro text-center">
            Email e/ou senha estão incorretos!
            </div>
            <?php
        }
    }
    else 
    {
        ?>
        <div class="msg-erro text-center">
        <?php echo "Erro: ".$u->msgErro; ?>
        </div>
            <?php

    }
    }else
    {
        ?>
        <div class="msg-erro text-center">
        Preencha todos os campos!
        </div>
            <?php
    }
}

?>

</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>