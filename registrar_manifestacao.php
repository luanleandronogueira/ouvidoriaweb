<?php
session_start();
require_once 'provedores/Classes.php';
verificaSessao();
require_once 'controladores/Controller.php';

$tipo_manifestacao = new TipoManifestacoes;
$t_manifestacao = $tipo_manifestacao->chama_manifestacao($_GET['id_manifestacao']);

// echo '<pre>';
//     print_r($t_manifestacao);
// echo '</pre>';

?>
<div class="aviso_inicial row">
    <div class="col-lg-12 col-xl-12 col-xxl-12">
        <section class="text-start">
            <h4>Faça seu registro preenchendo as informações</h4>
            <strong>
                <p>Os campos estão disponíveis para suas manifestações</p>
            </strong>
        </section>
    </div>
</div>

<div class="container">
    <form action="revisar_dados.php" method="post" enctype="multipart/form-data">
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
                <input type="text" required readonly class="form-control" name="entidade_manifestacao" id="entidade_manifestacao" value="<?= $_SESSION['entidade_nome'] ?>">
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
                <small>São aceitos documentos de texto (.pdf, .doc, .docx, .txt), imagens (.jpeg, .jpg, .png, .bmp), planilhas (.xls, .xlsx)</small>
            </div>
            <h5>Local dos Fato? </h5>
            <hr>

            <div class="col-lg-12 col-xxl-12 col-xl-12 col-md-12 col-sm-12 mb-4">
                <label for="local_manifestacao">Local do ocorrido</label>
                <input type="text" name="local_manifestacao" id="local_manifestacao" class="form-control">
            </div>

            <div class="col-lg-12 col-xxl-12 col-xl-12 col-md-12 col-sm-12 mb-4">
                <label for="observacoes_manifestacao">Mais Observações</label>
                <textarea maxlength="8000" name="observacoes_manifestacao" class="form-control" rows="9" id="observacoes_manifestacao"></textarea>
            </div>

            <input type="hidden" name="id_entidade" value="<?= $_SESSION['id_entidade'] ?>">
            <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
            <input type="hidden" name="id_tipo_manifestacao" value="<?= $t_manifestacao['id_tipo_manifestacao'] ?>">

            <hr>
            <div class="text-center">
                <a class="btn btn-outline-primary btn1" href="dashboard.php">Voltar</a>
                <button class="btn btn-primary btn1">Prosseguir</button>
            </div>
    </form>
</div>
</div>

<?php include_once 'controladores/Footer.php' ?>