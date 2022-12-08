<?php
 require "Conect.php";

$centcat=$_POST["txt_centcat"];
$nome=$_POST["txt_nome"];
$cidade=$_POST["txt_city"];
$nasc=$_POST["dt_nasc"];
$paroq=$_POST["batparoq"];
$pai=$_POST["txt_npai"];
$mae=$_POST["txt_nmae"];
$email=$_POST["txt_email"];
$fone=$_POST["txt_fone"];
$end=$_POST["txt_end"];
$etapa = $_POST["etapa"];
$anoetapa = $_POST["dt_etapa"];

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

if($centcat && $nome && $cidade && $nasc && $paroq && $pai && $mae && $email && $fone && $end && $anoetapa){
$insert = $pdo->prepare("INSERT INTO catequizando(centcat, nome, cidade, nasc, batparoq, npai, nmae, email, fone, endereco, etapa, anoetapa)
values ('$centcat', '$nome', '$cidade', '$nasc', '$paroq', '$pai', '$mae', '$email', '$fone', '$end', '$etapa', '$anoetapa')");

if($insert->execute()){
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