<?php
    require "Conect.php";

$nome=$_POST["txt_nome"];
$email=$_POST["txt_email"];
$fone=$_POST["txt_fone"];
$nasc=$_POST["dt_nasc"];

if($nome && $email && $fone && $nasc){
$insert = $pdo->prepare("INSERT INTO catequista(nome, email, fone, nasc)
values ('$nome', '$email', '$fone', '$nasc')");

if ($insert->execute()){
    header ("Location: menu.php");
}
else {
    ?>
    <head>
        <link rel="stylesheet" href="Default.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" type="image/x-icon" href="img/icone32-rembg.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Erro</title>
    </head>
    <div class="msg-erro text-center">
    Erro ao criar registro!
    </div>
    <?php
}
}


