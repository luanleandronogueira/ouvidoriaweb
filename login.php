<?php
session_start();
require_once 'provedores/Classes.php';
include 'controladores/ControllerLogin.php';
$todas_entidades = new Entidades;

// Gerar o token na primeira requisição
if (!isset($csrf_token['csrf_token'])) {
    $csrf_token['csrf_token'] = gerarTokenCSRF();
}

$entidade = $todas_entidades->chama_entidades();

if (!empty($_GET)) {
    $ent = $todas_entidades->chama_entidade($_GET['id']);
}

?>
<script>
    // Verifique se a página foi recarregada (atualizada)
    if (performance.navigation.type === 1) {
        // Redirecione para a URL desejada
        window.location.href = 'login.php';
    }
</script>

<section>
    <div class="container">
        <div class="row">
            <!-- Tela de Login -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mt-1 login_1">

                <?php if (isset($_GET['status']) and $_GET['status'] === 'faca_login') { ?>
                    <div class="p-3 bg-success bg-opacity-10 border border-success border-start-0 border-end-0 text-center">
                        Cadastro feito com sucesso, Faça seu primeiro Login!
                    </div></br>
                <?php } ?>

                <?php if (isset($_GET['status']) and $_GET['status'] === 'senha_invalida') { ?>
                    <div class="p-3 bg-danger bg-opacity-10 border border-danger border-start-0 border-end-0 text-center">
                        Login ou senha Inválida!
                    </div></br>
                <?php } ?>


                <center>
                    <h3>Bem-Vindo</h3>
                </center>

                <?php if (!empty($_GET)) { ?>

                    <form class="mt-3" action="provedores/AutenticaUsuario.php" method="POST">
                        <div>
                            <div class="mb-3 text-center">
                                <label for="login_usuario" class="form-label"><strong>Insira seu E-mail ou CPF</strong></label>
                                <input type="text" required name="login_usuario" class="form-control text-center" id="login_usuario" placeholder="Exemplo: email@email.com ou 12345678900" aria-describedby="login_usuario">
                            </div>
                            <div class="mb-3 text-center">
                                <label for="senha_usuario" class="form-label"><strong>Senha:</strong></label>
                                <input type="password" required placeholder="Insira sua senha" name="senha_usuario" class="form-control text-center" id="senha_usuario">
                            </div>

                            <!-- Token de verificação -->
                            <input type="hidden" name="csrf_token" id="csrf_token" value="<?= $csrf_token['csrf_token'] ?>">
                            <input type="hidden" name="id" value="<?= $ent['id_entidade'] ?>">
                            <input type="hidden" name="entidade_nome" value="<?= $ent['nome_entidade'] ?>">

                            <div class="text-center">
                                <a href="recuperar_senha.php?id=<?= $ent['id_entidade'] ?>">Esqueci à Senha</a> | <a href="criar_usuario.php?id=<?= $ent['id_entidade'] ?>">Criar um Usuário</a>
                            </div>
                            <div class="text-center mt-3">
                                <button type="submit" class="btn btn-primary justify-center">Entrar</button>
                            </div>
                            <hr>
                            <center>
                                <h4>Realize sua Solicitação Anônima</h4>
                            </center>
                            <div class="text-center mt-3">
                                <a href="denuncia_anonima.php?id=<?= $ent['id_entidade'] ?>&&id_manifestacao=5" class="btn btn-sm btn-dark justify-center">Denúncia Anônima</a>
                                <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-sm btn-warning justify-center">Consultar Denúncia Anônima</a>
                            </div>
                            <!-- <hr> -->
                            <!-- <div class="text-center mt-3">
                                <span>Entrar com à conta Google</span></br>
                                <a href=""><img src="assets/images/google_img.png" width="75px" alt=""></a>
                            </div> -->
                        </div>
                    </form>

                <?php } else { ?>

                    <h4>Escolha a entidade:</h4>

                    <form action="" method="get">
                        <select class="form-control mb-5" name="id" id="id">
                            <?php foreach ($entidade as $e) { ?>

                                <option value="<?= $e['id_entidade'] . '-' . $e['nome_entidade'] ?>"><?= $e['nome_entidade'] ?></option>
                                <!-- <input type="hidden" value="<?= $e['nome_entidade'] ?>" name="nome_entidade"> -->
                            <?php } ?>
                        </select>
                        <button class="btn btn-success" type="submit">Escolher</button>
                    </form>

                <?php } ?>

            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mt-1 d-none d-lg-block d-xl-block d-xxl-block login_1">
                <div class="text-center">
                    <img src="assets/images/ouvidoria_web.png" alt="" width="400px">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Consulte usando o Nº do Protocolo</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Formulario de consulta a solicitação anonima -->
                <form action="https://l3tecnologia.app.br/api_ouvidoria_web/public/api/v1/manifestacao_anonima" method="post">
                    <div class="modal-body">
                        <div class="input-group">
                            <div class="input-group-text" id="btnGroupAddon">Nº</div>
                            <input type="text" class="form-control" name="protocolo" placeholder="Digite o número de protocolo" aria-label="Digite o número de protocolo" aria-describedby="btnGroupAddon">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Sair</button>
                        <button type="submit" class="btn btn-dark">Consultar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
<?php include_once 'controladores/FooterLogin.php' ?>