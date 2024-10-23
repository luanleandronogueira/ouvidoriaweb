<?php
session_start();
require_once 'controladores/ControllerLogin.php';
require_once 'provedores/Classes.php';

// Gerar o token na primeira requisição
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = gerarTokenCSRF();
}
?>
<script>
        // Verifique se a página foi recarregada (atualizada)
        if (performance.navigation.type === 1) {
            // Redirecione para a URL desejada
            window.location.href = 'criar_usuario.php';
        }
</script>
<section>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <h3 class="text-center">Criando seu usuário</h3>
            <div class="form-cadastro col-6">

            <?php if (isset($_GET['status']) and $_GET['status'] === 'cpf_ja_cadastrado') { ?>
                <div class="p-3 bg-danger bg-opacity-10 border border-danger border-start-0 border-end-0">
                    O CPF já foi cadastrado anteriormente! Redefina sua senha clicando <a href="redefinir_senha.php">aqui!</a>
                </div>
            <?php } ?>

                <form action="provedores/CriarUsuario.php" method="post">
                    <label for="nome_usuario">Nome:</label>
                    <input type="text" name="nome_usuario" required id="nome_usuario" class="form-control">

                    <label for="sobrenome_usuario">Sobrenome:</label>
                    <input type="text" name="sobrenome_usuario" required id="sobrenome_usuario" class="form-control">

                    <label for="cpf_usuario">CPF:</label>
                    <input type="text" name="cpf_usuario" onblur="consulta_cpf();" onkeyup="document.getElementById('validation').innerHTML = validaCPF(this.value) ? 'Válido<br>' : 'Inválido<br>'; verificaEstilo(this, validaCPF(this.value))" required id="cpf_usuario" class="form-control cpf">
                    <span class="" id="cpf_validado"></span>
                    <span class="text-center" id="validation"></span>

                    <label for="email_usuario">E-mail:</label>
                    <input type="email" name="email_usuario" required id="email_usuario" class="form-control">

                    <hr>
                    <h4 class="text-center">Informações para acesso:</h4>

                    <label for="senha_usuario">Defina a senha:</label>
                    <input type="password" name="senha_usuario" required id="senha_usuario" class="form-control">

                    <label for="confirmar_senha_usuario">Confirmar senha:</label>
                    <input type="password" onblur="consulta_senhas()" name="confirmar_senha_usuario" id="confirmar_senha_usuario" class="form-control">
                    <span id="mensagem_senha"></span>

                    <!-- Token csrf -->
                    <input type="hidden" name="csrf_token" id="csrf_token" value="<?= $_SESSION['csrf_token']; ?>">

                    <div class="text-center mt-4">
                        <button class="btn btn-primary btn1" id="button_submit" disabled type="submit">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
<?php require_once 'controladores/Footer.php' ?>