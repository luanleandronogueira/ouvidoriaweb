<?php 
session_start();

$id_manifestacao = $_SESSION['id_entidade'];
$nome_entidade = $_SESSION['entidade_nome'];

session_destroy();
// header("Location: login.php?id=" . $id_manifestacao . "&&entidade_nome=" . $nome_entidade);
header("Location: login.php?id=" . urlencode($id_manifestacao));

die();


?>
