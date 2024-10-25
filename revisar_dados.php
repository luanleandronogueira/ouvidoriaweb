<?php
session_start();
require_once 'provedores/Classes.php';
verificaSessao();
require_once 'controladores/Controller.php';

echo '<pre>';
    print_r($_POST);
echo '</pre>';

// echo '<pre>';
//     print_r($_SESSION);
// echo '</pre>';

?>













<?php include_once 'controladores/Footer.php' ?>