<?php
session_start();
require_once 'provedores/Classes.php';
require_once 'controladores/ControllerAnonimo.php';

?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <div class="alert alert-secondary" role="alert">
                <h3>Sua denúncia foi registrada com sucesso!</h3><br>
                <p>Obrigado por contribuir com a nossa plataforma. Sua manifestação é importante para nós.</p>
                <p>Você pode acompanhar o andamento da sua denúncia através deste número do protocolo.</p>
                <p><strong class="text-danger">Anote e não perca!</strong></p>
                <h4><?=$_GET['protocolo']?></h4></br>
                <p><a class="btn btn-sm btn-dark" href="login.php">Voltar e Fazer Login</a></p>
                
            </div>
        </div>
    </div>
</div>