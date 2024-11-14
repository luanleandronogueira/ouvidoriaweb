<?php
session_start();
require_once 'provedores/Classes.php';
include 'controladores/ControllerLogin.php';

?>
<div class="mt-5 container">
    <div class="row">
        <h3 class="text-center">Recuperar Senha</h3>
        <hr>
        <div class="text-center">
            <img src="assets/images/recuperar_senha.png" width="400" alt="Recuperar à senha">
        </div>
        <div class="">
            <div class="p-3 text-center">
                <label for="email_usuario">Insira seu e-mail cadastrado:</label>
                <input onblur="consulta_email(); salva_cookie()" type="text" class="text-center form-control" name="email_usuario" id="email_usuario">
            </div>
            <div id="btnCodigo" class="p-2 text-center d-none">
                <h5>Encontramos seu e-mail, deseja iniciar o processo de recuperação da senha?</h5>
                <hr>
                <a href="processo_recuperar_senha.php?id=<?=$_GET['id']?>" class="btn1 btn btn-primary">Iniciar</a>
            </div>
            <div id="email_invalido" class="p-2 text-center d-none">
                <h5>O email não foi encontrado, revise o e-mail ou inicie o processo de cadastro</h5>
                <hr>
                <a href="criar_usuario.php?id=<?=$_GET['id']?>" class="btn1 btn btn-danger">Iniciar</a>
            </div>
        </div>
    </div>
</div>


<?php include_once 'controladores/FooterLogin.php' ?>
