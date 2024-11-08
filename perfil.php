<?php
session_start();
require_once 'provedores/Classes.php';
verificaSessao();
require_once 'controladores/Controller.php';

$usuario = new Usuario;
$dados = $usuario->chama_usuario_perfil($_SESSION['id_usuario']);
$contagem_manifestacao = $usuario->conta_manifestacao_usuario($_SESSION['id_usuario']);

?>

<div class="container mt-4">
    <div class="row">

            <?php if (isset($_GET['status']) and $_GET['status'] === 'sucesso') { ?>
                <div class="p-3 bg-success text-center bg-opacity-10 border border-success border-start-0 border-end-0">
                    Atualizado com Sucesso!
                </div>
            <?php } ?>
            <?php if (isset($_GET['status0']) and $_GET['status0'] === 'campos_vazios') { ?>
                <div class="p-3 bg-danger text-center bg-opacity-10 border border-danger border-start-0 border-end-0">
                    Os campos estão vazios ou com poucos dados!
                </div>
            <?php } ?>

            <div class="mt-3">
                <h5>Meu Perfil</h5>
                <hr>
            </div>

            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-12 col-sm-12">
                <label for="nome_usuario">Nome:</label>
                <input class="form-control" readonly type="text" value="<?= $dados['nome_usuario'] ?>" name="nome_usuario" id="nome_usuario">
            </div>
            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12">
                <label for="sobrenome_usuario">Sobrenome:</label>
                <input class="form-control" readonly type="text" value="<?= $dados['sobrenome_usuario'] ?>" name="sobrenome_usuario" id="sobrenome_usuario">
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <label for="cpf_usuario">CPF:</label>
                <input class="form-control" readonly type="text" value="<?= $dados['cpf_usuario'] ?>" name="cpf_usuario" id="cpf_usuario">
            </div>
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12">
                <label for="email_usuario">E-mail:</label>
                <input class="form-control" readonly type="text" value="<?= $dados['email_usuario'] ?>" name="email_usuario" id="email_usuario">
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <label for="contagem_manifestacao">Manifestações Enviadas:</label>
                <input class="form-control text-center" readonly type="text" value="<?= $contagem_manifestacao ?>" name="contagem_manifestacao" id="contagem_manifestacao">
            </div>

            <div class="mt-3 text-center">
                <hr>
                <h5>Deseja realizar alguma alteração nos seus dados?</h5>
                <a href="alterar_perfil.php?id=<?= $_SESSION['id_usuario'] ?>" class="btn1 btn-primary btn">Alterar</a>
            </div>


    </div>
</div>


<?php include_once 'controladores/Footer.php' ?>