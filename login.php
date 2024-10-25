<?php
session_start();
require_once 'provedores/Classes.php';
include 'controladores/ControllerLogin.php';

// Gerar o token na primeira requisição
if (!isset($csrf_token['csrf_token'])) {
    $csrf_token['csrf_token'] = gerarTokenCSRF();
}

//print_r($csrf_token);


?>
<script>
        // Verifique se a página foi recarregada (atualizada)
        if (performance.navigation.type === 1) {
            // Redirecione para a URL desejada
            window.location.href = 'login.php?&&id=1&&entidade_nome=Prefeitura%20de%20Garanhuns';
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
                <form class="mt-3" action="provedores/AutenticaUsuario.php" method="POST">
                    <div>
                        <div class="mb-3 text-center">
                            <label for="login_usuario" class="form-label"><strong>Insira seu E-mail ou CPF</strong></label>
                            <input type="login_usuario" name="login_usuario" class="form-control text-center" id="login_usuario" placeholder="Exemplo: email@email.com ou 12345678900" aria-describedby="login_usuario">
                        </div>
                        <div class="mb-3 text-center">
                            <label for="senha_usuario" class="form-label"><strong>Senha:</strong></label>
                            <input type="password" placeholder="Insira sua senha" name="senha_usuario" class="form-control text-center" id="senha_usuario">
                        </div>
                        
                        <!-- Token de verificação -->
                        <input type="hidden" name="csrf_token" id="csrf_token" value="<?=$csrf_token['csrf_token']?>">
                        <input type="hidden" name="id" value="<?=$_GET['id']?>">
                        <input type="hidden" name="entidade_nome" value="<?=$_GET['entidade_nome']?>">

                        <div class="text-center">
                            <a href="recuperar_senha.php">Esqueci à Senha</a> | <a href="criar_usuario.php">Criar um Usuário</a>
                        </div>
                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-primary justify-center">Entrar</button>
                        </div>
                        <!-- <hr> -->
                        <div class="text-center mt-3">
                            <span>Entrar com à conta Google</span></br>
                            <a href=""><img src="assets/images/google_img.png" width="75px" alt=""></a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mt-1 d-none d-lg-block d-xl-block d-xxl-block login_1">
                <div class="text-center">
                    <img src="assets/images/ouvidoria_web.png" alt="" width="400px">
                </div>
            </div>
        </div>


    </div>



</section>
<?php include_once 'controladores/FooterLogin.php' ?>