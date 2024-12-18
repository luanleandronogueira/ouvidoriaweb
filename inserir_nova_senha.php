<?php
session_start();
require_once 'provedores/Classes.php';
include 'controladores/ControllerLogin.php';

?>
<div class="mt-5 container">
    <div class="row">
        <h3 class="text-center">Insira o código de recuperação</h3>
        <hr>
        <div class="text-center">
            <img src="assets/images/recup_senha.png" width="270" alt="Recuperar à senha"></br>
            <p><strong>Enviamos um código para seu e-mail </strong></p>
            <div id="div_codigo_verificacao">
                <label for="codigo_verificacao">Insira o código recebido no e-mail:</label>
                <input type="text" class="text-center form-control" name="codigo_verificacao" id="codigo_verificacao">

                <button class="mt-2 btn1 btn btn-primary" onclick="verifica_codigo()">Verificar código</button>
                <button class="mt-2 btn1 btn btn-warning" type="submit">Solicitar novo código</button>
            </div>
        </div>
    </div>
</div>
<?php include_once 'controladores/FooterLogin.php' ?>