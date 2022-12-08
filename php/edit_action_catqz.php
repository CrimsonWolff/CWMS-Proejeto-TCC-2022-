<?php
require 'Conect.php';

$id = filter_input(INPUT_POST, 'id');
$centcat = filter_input(INPUT_POST, 'centcat');
$nome = filter_input(INPUT_POST, 'nome');
$cidade = filter_input(INPUT_POST, 'city');
$nasc = filter_input(INPUT_POST, 'nasc');
$paroq = filter_input(INPUT_POST, 'batparoq');
$pai = filter_input(INPUT_POST, 'npai');
$mae = filter_input(INPUT_POST, 'nmae');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$fone = filter_input(INPUT_POST, 'fone');
$end = filter_input(INPUT_POST, 'end');
$etapa = filter_input(INPUT_POST, 'etapa');
$anoetapa = filter_input(INPUT_POST, 'anoetapa');

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

if ($id && $nome && $email && $fone && $nasc && $centcat && $pai && $mae && $cidade && $end && $anoetapa && $paroq) {


    $sql = $pdo->prepare("UPDATE catequizando SET centcat = :centcat, nome = :nome, cidade = :cidade, nasc = :nasc, batparoq = :batparoq, 
    npai = :npai,  nmae = :nmae, email = :email, fone = :fone, endereco = :endereco, etapa = :etapa, 
    anoetapa = :anoetapa  WHERE id = :id");


    $sql->bindValue(':centcat', $centcat);
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':cidade', $cidade);
    $sql->bindValue(':nasc', $nasc);
    $sql->bindValue(':batparoq', $paroq);
    $sql->bindValue(':npai', $pai);
    $sql->bindValue(':nmae', $mae);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':fone', $fone);
    $sql->bindValue(':endereco', $end);
    $sql->bindValue(':etapa', $etapa);
    $sql->bindValue(':anoetapa', $anoetapa);
    $sql->bindValue(':id', $id);
    $sql->execute();

    header("Location: catqz_geral.php");
    exit;
}else{
    // header("Location: catequizando_geral.php");
    //exit;
}