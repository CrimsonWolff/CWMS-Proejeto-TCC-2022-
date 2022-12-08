<?php

$pdo = new PDO('mysql:host=localhost;dbname=cwm-db','root','',array(PDO:: ATTR_PERSISTENT => true));
  
//Habilita exibição de erros
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>