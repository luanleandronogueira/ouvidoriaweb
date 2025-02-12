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
                <p>A Ouvidoria é o canal para você registrar sugestões, reclamações, elogios ou denúncias. Sua participação é fundamental para melhorarmos nossos serviços com transparência e eficiência. Todas as manifestações são analisadas com sigilo e compromisso, garantindo respostas adequadas e soluções justas para cada situação.</p>
            </div>
        </div>

        <div class="col-lg-6 col-xl-6 col-xxl-6 col-sm-12 col-md-12 mt-3">
            <span class="span_texto">Elogio</span>
            <hr>
            <div class="card_personalizado text-center mt-4">
                <img src="assets/images/elogio.png" width="200px" alt="Elogio">
                <h4><strong><a href="registrar_manifestacao.php?id_manifestacao=<?=$t_manifestacao[0]['id_tipo_manifestacao']?>">Enviar um Elogio</a></strong></h4>
                <hr>
                <p>Quer reconhecer um bom atendimento ou serviço? Envie seu elogio e valorize quem fez a diferença! Seu feedback é essencial para motivar e incentivar a excelência. Todas as mensagens são analisadas com atenção e ajudam a melhorar continuamente nossos serviços. Sua opinião faz a diferença para um atendimento cada vez melhor!</p>
            </div>
        </div>

        <div class="col-lg-6 col-xl-6 col-xxl-6 col-sm-12 col-md-12 mt-3">
            <span class="span_texto">Reclamação</span>
            <hr>
            <div class="card_personalizado text-center mt-4">
                <img src="assets/images/icon_reclamacao.png" width="200px" alt="Reclamação">
                <h4><strong><a href="registrar_manifestacao.php?id_manifestacao=<?=$t_manifestacao[2]['id_tipo_manifestacao']?>">Enviar uma Reclamação</a></strong></h4>
                <hr>
                <p>Teve uma experiência insatisfatória? Envie sua reclamação para que possamos analisar e buscar melhorias. Seu feedback é essencial para aprimorar nossos serviços e garantir um atendimento de qualidade. Todas as manifestações são tratadas com seriedade e sigilo, visando soluções justas e eficazes para cada situação.</p>
            </div>
        </div>

        <div class="col-lg-6 col-xl-6 col-xxl-6 col-sm-12 col-md-12 mt-3">
            <span class="span_texto">Denúncia</span>
            <hr>
            <div class="card_personalizado text-center mt-4">
                <img src="assets/images/icon_denuncia.png" width="200px" alt="Elogio">
                <h4><strong><a href="registrar_manifestacao.php?id_manifestacao=<?=$t_manifestacao[4]['id_tipo_manifestacao']?>">Registrar uma Denúncia</a></strong></h4>
                <hr>
                <p>Presenciou algo irregular? Registre sua denúncia de forma segura e sigilosa. Sua manifestação é essencial para garantir transparência e integridade. Todas as denúncias são analisadas com responsabilidade, garantindo o tratamento adequado e, quando necessário, as medidas corretivas para assegurar um ambiente justo e ético.</p>
            </div>
        </div>

        <div class="col-lg-6 col-xl-6 col-xxl-6 col-sm-12 col-md-12 mt-3">
            <span class="span_texto">Solicitação</span>
            <hr>
            <div class="card_personalizado text-center mt-4">
                <img src="assets/images/solicitacao.png" width="200px" alt="Elogio">
                <h4><strong><a href="registrar_manifestacao.php?id_manifestacao=<?=$t_manifestacao[3]['id_tipo_manifestacao']?>">Fazer uma Solicitação</a></strong></h4>
                <hr>
                <p>Precisa de informações ou deseja solicitar um serviço? Envie sua solicitação de forma simples e rápida. Nosso compromisso é analisar cada pedido com atenção e oferecer uma resposta clara e objetiva. Sua participação é fundamental para aprimorarmos nossos processos e garantirmos um atendimento eficiente e de qualidade.</p>
            </div>
        </div>

        <div class="col-lg-6 col-xl-6 col-xxl-6 col-sm-12 col-md-12 mt-3">
            <span class="span_texto">Minhas Solicitações</span>
            <hr>
            <div class="card_personalizado text-center mt-4">
                <img src="assets/images/listas.png" width="200px" alt="Elogio">
                <h4><strong><a href="minhas_manifestacoes.php">Consultar minhas Solicitações</a></strong></h4>
                <hr>
                <p>Acompanhe o andamento das suas solicitações de forma rápida e transparente. Consulte o status e as respostas diretamente pelo nosso sistema. Nosso compromisso é garantir um atendimento eficiente, oferecendo informações atualizadas para que você tenha clareza e segurança sobre cada etapa do processo.</p>
            </div>
        </div>
    </div>
</div>


<?php include_once 'controladores/Footer.php' ?>