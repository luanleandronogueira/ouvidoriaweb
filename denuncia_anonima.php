<?php
session_start();
require_once 'provedores/Classes.php';
//verificaSessao();
require_once 'controladores/ControllerAnonimo.php';
$usuario_anonimo = new Usuario;
$tipo_manifestacao = new TipoManifestacoes;
$entidades = new Entidades;
$entidade = $entidades->chama_entidade($_GET['id']);
$t_manifestacao = $tipo_manifestacao->chama_manifestacao($_GET['id_manifestacao']);
$anonimo = $usuario_anonimo->chama_usuario_anonimo();
$_SESSION['id_entidade'] = $_GET['id'];
$_SESSION['csrf_token'] = '';

?>

<div class="aviso_inicial row">
    <div class="col-lg-12 col-xl-12 col-xxl-12">
        <section class="text-start">
            <h4>Aqui você consegue fazer sua denúncia anônima</h4>
            <strong>
                <p>Os campos estão disponíveis para suas manifestações, não se preocupe não revelaremos sua identidade.</p>
            </strong>
        </section>
    </div>
</div>

<?php if (isset($_GET['arquivo']) and $_GET['arquivo'] === 'n_permitido') { ?>
        <div class="p-3 bg-danger bg-opacity-10 border border-danger border-start-0 border-end-0 text-center">
                tipo de arquivo não permitido! Aceitos somente '.pdf', '.jpeg', '.jpg', '.png'
        </div></br>
<?php } ?>

<div class="container">
    <form action="revisar_dados_anonimo.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="mt-3">
                <h5>Destino</h5>
                <hr>
            </div>
            <div class="col-lg-4 col-xxl-4 col-xl-4 col-md-12 col-sm-12 ">
                <label for="nome_entidade_manifestacao">Tipo de Manifestação:</label>
                <input type="text" required readonly class="form-control" name="tipo_manifestacao" id="tipo_manifestacao" value="<?= $t_manifestacao['nome_tipo_manifestacao'] ?>">
            </div>
            <div class="col-lg-8 col-xxl-8 col-xl-8 col-md-12 col-sm-12 mb-4">
                <label for="entidade_manifestacao">Entidade de Destino:</label>
                <input type="text" required readonly class="form-control" name="entidade_manifestacao" id="entidade_manifestacao" value="<?= $entidade['nome_entidade'] ?>">
            </div>
            <h5>Descrição da Manifestação</h5>
            <hr>
            <div class="col-lg-12 col-xxl-12 col-xl-12 col-md-12 col-sm-12 mb-4">
                <label for="motivo_manifestacao">Qual o motivo da sua manifestação:</label>
                <input type="text" maxlength="60" name="motivo_manifestacao" id="motivo_manifestacao" required class="form-control">
            </div>

            <div class="col-lg-12 col-xxl-12 col-xl-12 col-md-12 col-sm-12 mb-4">
                <label for="conteudo_manifestacao">Descreva a manifestação:</label>
                <textarea maxlength="8000" name="conteudo_manifestacao" onkeyup="contador_caracteres()" class="form-control" rows="9" id="conteudo_manifestacao"></textarea>
                <small><em id="contador"></em>/8000 caracteres digitados</small>
            </div>

            <div class="col-lg-12 col-xxl-12 col-xl-12 col-md-12 col-sm-12 mb-4">
                <label for="arquivo_manifestacao">Arquivos para envio</label>
                <input type="file" name="arquivo_manifestacao" id="arquivo_manifestacao" class="form-control">
                <small>São aceitos documentos de texto (.pdf), imagens (.jpeg, .jpg, .png)</small>
            </div>
            <h5>Local dos Fatos? </h5>
            <hr>

            <div class="col-lg-12 col-xxl-12 col-xl-12 col-md-12 col-sm-12 mb-4">
                <label for="local_manifestacao">Local do ocorrido</label>
                <input type="text" name="local_manifestacao" id="local_manifestacao" class="form-control">
            </div>

            <div class="col-lg-12 col-xxl-12 col-xl-12 col-md-12 col-sm-12 mb-4">
                <label for="observacoes_manifestacao">Mais Observações</label>
                <textarea maxlength="8000" name="observacoes_manifestacao" class="form-control" rows="9" id="observacoes_manifestacao"></textarea>
            </div>

            <input type="hidden" name="id_entidade" value="<?= $entidade['id_entidade'] ?>">
            <!-- <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>"> -->
            <input type="hidden" name="id_tipo_manifestacao" value="<?= $t_manifestacao['id_tipo_manifestacao'] ?>">

            <hr>
            <div class="text-center">
                <a class="btn btn-outline-dark btn1" href="login.php">Voltar</a>
                <button class="btn btn-dark btn1">Prosseguir</button>
            </div>
    </form>
</div>
</div>





<?php include_once 'controladores/FooterAnonimo.php' ?>