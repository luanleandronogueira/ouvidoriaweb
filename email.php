<?php
session_start();
require_once 'provedores/Classes.php';
include 'controladores/ControllerLogin.php';

?>

<div class="mt-5 container">
    <div class="row">
        <h3 class="text-center">Código de Recuperação</h3>
        <hr>
        <div class="text-center">
            <img src="assets/images/icon_gif.gif" width="150px" alt="Icone Email">
           <h1>12345</h1>
           <small>Não compartilhe esse código!</small>
        </div>
    </div>
</div>


<?php include_once 'controladores/FooterLogin.php' ?>