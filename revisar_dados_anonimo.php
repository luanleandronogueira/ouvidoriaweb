<?php
session_start();
require_once 'provedores/Classes.php';
verificaSessao();
require_once 'controladores/ControllerAnonimo.php';

//salva o arquivo
if($_FILES['arquivo_manifestacao']['error'] != 4 AND $_FILES['arquivo_manifestacao']['error'] == 0){

    if($_FILES['arquivo_manifestacao']['type'] == 'application/pdf' || 
       $_FILES['arquivo_manifestacao']['type'] == 'image/jpeg' || 
       $_FILES['arquivo_manifestacao']['type'] == 'image/png' || 
       $_FILES['arquivo_manifestacao']['type'] == 'image/jpg') {

        $nome_ = $_FILES['arquivo_manifestacao']['name']; // salva o nome antigo
        $extensao = pathinfo($_FILES['arquivo_manifestacao']['type']); // separa a extensão
        $_FILES['arquivo_manifestacao']['name'] = $_POST['id_entidade'] . '-' . date('dmyHis') . '.' . $extensao['basename']; // coloca o novo nome
        $caminho = 'assets/comprovantes/' . $_FILES['arquivo_manifestacao']['name']; //gera o novo caminho
        move_uploaded_file($_FILES['arquivo_manifestacao']['tmp_name'], $caminho); // salva no novo caminho
    } else {
        header("Location: registrar_manifestacao.php?arquivo=n_permitido&&id_manifestacao=" . $_POST['id_entidade']);

    }

} else {
    $nome_ = 'Sem arquivo';

}
?>

<div class="aviso_inicial row">
    <div class="col-lg-12 col-xl-12 col-xxl-12">
        <section class="text-start">
            <h4>Revise suas informações</h4>
            <strong>
                <p>Veja os dados da sua manifestação</p>
            </strong>
        </section>
    </div>
</div>

<div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
                <div class="mb-2">
                    <h4>Título:</h4> <?= $_POST['motivo_manifestacao'] ?>
                </div>
                <div class="mb-2">
                    <h4>Destinatário:</h4> <?= $_POST['entidade_manifestacao'] ?>
                </div>
                <div class="mb-2">
                    <h4>Local do Ocorrido:</h4> <?= $_POST['local_manifestacao'] ?>
                </div>
                <div>
                    <div class="p-3 bg-secondary bg-opacity-10 border border-secondary border-start-0 border-end-0 text-start">
                        <h4>Descrição da manifestação:</h4>
                        <p><?= $_POST['conteudo_manifestacao'] ?></p>
                    </div></br>
                </div>
                
                <div class="mb-2">
                    <h4>Arquivo anexado:</h4>

                    <?php if(isset($caminho)) {?>
                        <a class="icon-link" target="_blank" href="<?=$caminho?>">
                            <svg class="bi" aria-hidden="true">
                                <use xlink:href="#box-seam"></use>
                            </svg>
                            <?= $nome_ ?>
                        </a>
                    <?php } else { ?>

                        <span>Sem anexos</span>
                        <?php $caminho = 'Sem anexos'; ?>

                    <?php } ?>
                    
                </div>
                <hr>
                <?php if (!empty($_POST['observacoes_manifestacao'])) { ?>
                    <div class="mb-2">
                        <h4>Demais Observações:</h4> <?= $_POST['local_manifestacao'] ?>
                    </div>
                    </div>
                <?php } else { ?>
                    <div class="mb-2">
                        <h5>Demais Observações:</h5> Sem observações
                    </div>
                <?php } ?>
                
               
                <form action="provedores/CadastraManifestacaoAnonima.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="arquivo_manifestacao" id="arquivo_manifestacao" value="<?=$caminho?>">
                    <input type="hidden" name="id_entidade_manifestacao" value="<?=$_POST['id_entidade'] ?>">
                    <input type="hidden" name="id_tipo_manifestacao" value="<?=$_POST['id_tipo_manifestacao'] ?>">
                    <input type="hidden" name="motivo_manifestacao" value="<?=$_POST['motivo_manifestacao'] ?>">
                    <input type="hidden" name="conteudo_manifestacao" value="<?=$_POST['conteudo_manifestacao'] ?>">
                    <input type="hidden" name="observacoes_manifestacao" value="<?=$_POST['observacoes_manifestacao'] ?>">
                    <!-- <input type="hidden" name="csrf_token" value="<?=$_POST['csrf_token'] ?>"> -->
                    <input type="hidden" name="local_manifestacao" value="<?=$_POST['local_manifestacao'] ?>">
            
                <div class="text-center">
                    <a class="btn btn-outline-dark btn1" href="dashboard.php">Voltar</a>
                    <button type="submit" class="btn btn-dark btn1">Enviar Manifestação</button>
                </div>
                </form>
        </div>
    </div>
    </div>
</section>

<?php include_once 'controladores/Footer.php' ?>