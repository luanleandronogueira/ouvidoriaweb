<?php
session_start();
require_once 'provedores/Classes.php';
verificaSessao();
require_once 'controladores/Controller.php';

// echo '<pre>';
//     print_r($_POST);
// echo '</pre>';

// echo '<pre>';
//     print_r($_SESSION);
// echo '</pre>';

?>
<div class="aviso_inicial row">
    <div class="col-lg-12 col-xl-12 col-xxl-12">
        <section class="text-start">
            <h4>Revise os dados da sua solicitação</h4>
            <strong>
                <p>Veja os detalhes que serão enviados</p>
            </strong>
        </section>
    </div>
</div>

<section class="mt-3">
    <div class="container">
        <div class="row">
            <?php
            echo '<pre>';
            print_r($_POST);
            echo '</pre>';
            echo '<hr>';
            echo '<pre>';
            print_r($_FILES);
            echo '</pre>';
            ?>
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
                    <a class="icon-link" href="#">
                        <svg class="bi" aria-hidden="true">
                            <use xlink:href="#box-seam"></use>
                        </svg>
                        <?=$_FILES['arquivo_manifestacao']['name'] ?>
                    </a>
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
                
               


                <form action="provedores/CadastraManifestacao.php" method="post" enctype="multipart/form-data">

                    <input type="hidden" value="" name="arquivo_manifestacao" id="arquivo_manifestacao">
                    <input type="hidden" name="id_entidade_manifestacao" value="<?=$_POST['id_entidade'] ?>">
                    <input type="hidden" name="tipo_manifestacao" value="<?=$_POST['tipo_manifestacao'] ?>">
                    <input type="hidden" name="" value="<?=$_POST['motivo_manifestacao'] ?>">
                    <input type="hidden" name="" value="<?=$_POST['conteudo_manifestacao'] ?>">
                    <input type="hidden" name="" value="<?=$_POST['observacoes_manifestacao'] ?>">
                    <input type="hidden" name="" value="<?=$_POST['csrf_token'] ?>">
                    <input type="hidden" name="" value="<?=$_POST['local_manifestacao'] ?>">

            
                <div class="text-center">
                    <a class="btn btn-outline-primary btn1" href="dashboard.php">Voltar</a>
                    <button class="btn btn-primary btn1">Enviar Manifestação</button>
                </div>
                </form>

        </div>
    </div>
    </div>
</section>
            <script>
                    const files = <?= json_encode($_FILES) ?>;
                    document.getElementById('arquivo_manifestacao').value = JSON.stringify(files);
                    console.log(files)
                </script>

<?php include_once 'controladores/Footer.php' ?>