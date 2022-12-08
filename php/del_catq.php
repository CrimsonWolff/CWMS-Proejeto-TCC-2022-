<?php 
require "Conect.php";

$id = $_GET['id'];

if($id){
    $sql = $pdo->prepare("DELETE from catequista WHERE id = :id");
    $sql->bindValue(":id", $id);
    try{
        $sql->execute();
        header ("Location: catq_geral.php");
    }catch(Exception){
        echo "Erro ao deletar";
    }
    
}