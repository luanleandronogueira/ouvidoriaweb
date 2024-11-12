<?php
session_start();
require_once 'provedores/Classes.php';
verificaSessao();
require_once 'controladores/Controller.php';

$tipo_manifestacao = new TipoManifestacoes;
$t_manifestacao = $tipo_manifestacao->chama_tipo_manifestacoes();

// echo '<pre>';
//     print_r($_SESSION);
// echo '</pre>';

?>
<!-- <div class="aviso_inicial row">
    <div class="col-lg-6 col-xl-6 col-xxl-6">
        <section class="text-end">
            <h4>Como posso lhe ajudar?</h4>
            <strong>
                <p>Escolha uma das opções abaixo e escolha entre elas.</p>
            </strong>
        </section>
    </div>
</div> -->

<div class="container mt-5">
    <div class="row">
        <div class="d-lg-none d-xl-none d-xxl-none">
            <h4>Bem vindo, <?= $_SESSION['nome_usuario']?></h4>
        </div>
        <div class="col-lg-6 col-xl-6 col-xxl-6 col-sm-12 col-md-12 mt-3">
            <span class="span_texto">Ouvidoria</span>
            <hr>
            <div class="card_personalizado text-center mt-4">
                <img src="assets/images/icon_ouvidoria.png" width="200px" alt="Ouvidoria">
                <h4><strong><a href="registrar_manifestacao.php?id_manifestacao=<?=$t_manifestacao[1]['id_tipo_manifestacao']?>">Manifestação - Ouvidoria</a></strong></h4>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem maiores iure voluptatem adipisci sed mollitia totam hic laudantium ad a! Earum pariatur culpa, eaque libero illum autem consequuntur? In, animi?</p>
            </div>
        </div>

        <div class="col-lg-6 col-xl-6 col-xxl-6 col-sm-12 col-md-12 mt-3">
            <span class="span_texto">Elogio</span>
            <hr>
            <div class="card_personalizado text-center mt-4">
                <img src="assets/images/elogio.png" width="200px" alt="Elogio">
                <h4><strong><a href="registrar_manifestacao.php?id_manifestacao=<?=$t_manifestacao[0]['id_tipo_manifestacao']?>">Enviar um Elogio</a></strong></h4>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem maiores iure voluptatem adipisci sed mollitia totam hic laudantium ad a! Earum pariatur culpa, eaque libero illum autem consequuntur? In, animi?</p>
            </div>
        </div>

        <div class="col-lg-6 col-xl-6 col-xxl-6 col-sm-12 col-md-12 mt-3">
            <span class="span_texto">Reclamação</span>
            <hr>
            <div class="card_personalizado text-center mt-4">
                <img src="assets/images/icon_reclamacao.png" width="200px" alt="Reclamação">
                <h4><strong><a href="registrar_manifestacao.php?id_manifestacao=<?=$t_manifestacao[2]['id_tipo_manifestacao']?>">Enviar uma Reclamação</a></strong></h4>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem maiores iure voluptatem adipisci sed mollitia totam hic laudantium ad a! Earum pariatur culpa, eaque libero illum autem consequuntur? In, animi?</p>
            </div>
        </div>

        <div class="col-lg-6 col-xl-6 col-xxl-6 col-sm-12 col-md-12 mt-3">
            <span class="span_texto">Denúncia</span>
            <hr>
            <div class="card_personalizado text-center mt-4">
                <img src="assets/images/icon_denuncia.png" width="200px" alt="Elogio">
                <h4><strong><a href="registrar_manifestacao.php?id_manifestacao=<?=$t_manifestacao[4]['id_tipo_manifestacao']?>">Registrar uma Denúncia</a></strong></h4>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem maiores iure voluptatem adipisci sed mollitia totam hic laudantium ad a! Earum pariatur culpa, eaque libero illum autem consequuntur? In, animi?</p>
            </div>
        </div>

        <div class="col-lg-6 col-xl-6 col-xxl-6 col-sm-12 col-md-12 mt-3">
            <span class="span_texto">Solicitação</span>
            <hr>
            <div class="card_personalizado text-center mt-4">
                <img src="assets/images/solicitacao.png" width="200px" alt="Elogio">
                <h4><strong><a href="registrar_manifestacao.php?id_manifestacao=<?=$t_manifestacao[3]['id_tipo_manifestacao']?>">Fazer uma Solicitação</a></strong></h4>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem maiores iure voluptatem adipisci sed mollitia totam hic laudantium ad a! Earum pariatur culpa, eaque libero illum autem consequuntur? In, animi?</p>
            </div>
        </div>

        <div class="col-lg-6 col-xl-6 col-xxl-6 col-sm-12 col-md-12 mt-3">
            <span class="span_texto">Minhas Solicitações</span>
            <hr>
            <div class="card_personalizado text-center mt-4">
                <img src="assets/images/listas.png" width="200px" alt="Elogio">
                <h4><strong><a href="minhas_manifestacoes.php">Consultar minhas Solicitações</a></strong></h4>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem maiores iure voluptatem adipisci sed mollitia totam hic laudantium ad a! Earum pariatur culpa, eaque libero illum autem consequuntur? In, animi?</p>
            </div>
        </div>
    </div>
</div>


<?php include_once 'controladores/Footer.php' ?>