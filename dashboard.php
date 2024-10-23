<?php
session_start();
require_once 'provedores/Classes.php';
verificaSessao();
require_once 'controladores/Controller.php';

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
        <div class="col-lg-6 col-xl-6 col-xxl-6 col-sm-12 col-md-12 mt-3">
            <span class="span_texto">Ouvidoria</span>
            <hr>
            <div class="card_personalizado text-center mt-4">
                <img src="assets/images/icon_ouvidoria.png" width="200px" alt="Elogio">
                <h4><strong><a href="">Manifestação - Ouvidoria</a></strong></h4>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem maiores iure voluptatem adipisci sed mollitia totam hic laudantium ad a! Earum pariatur culpa, eaque libero illum autem consequuntur? In, animi?</p>
            </div>
        </div>

        <div class="col-lg-6 col-xl-6 col-xxl-6 col-sm-12 col-md-12 mt-3">
            <span class="span_texto">Elogio</span>
            <hr>
            <div class="card_personalizado text-center mt-4">
                <img src="assets/images/elogio.png" width="200px" alt="Elogio">
                <h4><strong><a href="">Enviar um Elogio</a></strong></h4>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem maiores iure voluptatem adipisci sed mollitia totam hic laudantium ad a! Earum pariatur culpa, eaque libero illum autem consequuntur? In, animi?</p>
            </div>
        </div>

        <div class="col-lg-6 col-xl-6 col-xxl-6 col-sm-12 col-md-12 mt-3">
            <span class="span_texto">Reclamação</span>
            <hr>
            <div class="card_personalizado text-center mt-4">
                <img src="assets/images/icon_reclamacao.png" width="200px" alt="Elogio">
                <h4><strong><a href="">Enviar uma Reclamação</a></strong></h4>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem maiores iure voluptatem adipisci sed mollitia totam hic laudantium ad a! Earum pariatur culpa, eaque libero illum autem consequuntur? In, animi?</p>
            </div>
        </div>

        <div class="col-lg-6 col-xl-6 col-xxl-6 col-sm-12 col-md-12 mt-3">
            <span class="span_texto">Denúncia</span>
            <hr>
            <div class="card_personalizado text-center mt-4">
                <img src="assets/images/icon_denuncia.png" width="200px" alt="Elogio">
                <h4><strong><a href="">Registrar uma Denúncia</a></strong></h4>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem maiores iure voluptatem adipisci sed mollitia totam hic laudantium ad a! Earum pariatur culpa, eaque libero illum autem consequuntur? In, animi?</p>
            </div>
        </div>

        <div class="col-lg-6 col-xl-6 col-xxl-6 col-sm-12 col-md-12 mt-3">
            <span class="span_texto">Solicitação</span>
            <hr>
            <div class="card_personalizado text-center mt-4">
                <img src="assets/images/solicitacao.png" width="200px" alt="Elogio">
                <h4><strong><a href="">Fazer uma Solicitação</a></strong></h4>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem maiores iure voluptatem adipisci sed mollitia totam hic laudantium ad a! Earum pariatur culpa, eaque libero illum autem consequuntur? In, animi?</p>
            </div>
        </div>

        <div class="col-lg-6 col-xl-6 col-xxl-6 col-sm-12 col-md-12 mt-3">
            <span class="span_texto">Minhas Solicitações</span>
            <hr>
            <div class="card_personalizado text-center mt-4">
                <img src="assets/images/listas.png" width="200px" alt="Elogio">
                <h4><strong><a href="">Consultar minhas Solicitações</a></strong></h4>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem maiores iure voluptatem adipisci sed mollitia totam hic laudantium ad a! Earum pariatur culpa, eaque libero illum autem consequuntur? In, animi?</p>
            </div>
        </div>
    </div>
</div>


<?php include_once 'controladores/Footer.php' ?>