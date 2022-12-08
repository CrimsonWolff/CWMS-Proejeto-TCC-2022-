<?php
require 'Conect.php';

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$fone = filter_input(INPUT_POST, 'fone');
$nasc = filter_input(INPUT_POST, 'nasc');

if ($id && $nome && $email && $fone && $nasc) {
    $sql = $pdo->prepare("UPDATE catequista SET nome = :nome, email = :email, fone = :fone, nasc = :nasc WHERE id = :id");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':fone', $fone);
    $sql->bindValue(':nasc', $nasc);
    $sql->bindValue(':id', $id);
    $sql->execute();

    header("Location: catq_geral.php");
    exit;
}else{
    // header("Location: catequista_geral.php");
    //exit;
}