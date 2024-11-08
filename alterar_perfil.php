<?php
session_start();
require_once 'provedores/Classes.php';
verificaSessao();
require_once 'controladores/Controller.php';

$usuario = new Usuario;
$dados = $usuario->chama_usuario_perfil($_SESSION['id_usuario']);


?>

<div class="container mt-4">
    <form action="provedores/AlterarUsuario.php" method="post">
        <div class="row">
            <div class="mt-3">
                <h5>Meu Perfil</h5>
                <hr>
            </div>

            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-12 col-sm-12">
                <label for="nome_usuario">Nome:</label>
                <input class="form-control" type="text" value="<?= $dados['nome_usuario'] ?>" name="nome_usuario" id="nome_usuario">
            </div>
            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12">
                <label for="sobrenome_usuario">Sobrenome:</label>
                <input class="form-control" type="text" value="<?= $dados['sobrenome_usuario'] ?>" name="sobrenome_usuario" id="sobrenome_usuario">
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <label for="cpf_usuario">CPF:</label>
                <input class="form-control" readonly type="text" value="<?= $dados['cpf_usuario'] ?>" name="cpf_usuario" id="cpf_usuario">
            </div>
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <label for="email_usuario">E-mail:</label>
                <input class="form-control" type="email" value="<?= $dados['email_usuario'] ?>" name="email_usuario" id="email_usuario">
            </div>

            <input type="hidden" name="id_usuario" value="<?=$_SESSION['id_usuario']?>">

            <div class="mt-3 text-center">
                <hr>
                <h5>Enviar atualizações</h5>
                <button type="submit" class="btn1 btn-primary btn">Atualizar</button>
            </div>

        </div>
    </form>
</div>


<?php include_once 'controladores/Footer.php' ?>