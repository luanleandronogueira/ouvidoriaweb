<?php
session_start();
require_once 'provedores/Classes.php';
verificaSessao();
require_once 'controladores/Controller.php';

$Manifestacoes = new Manifestacoes;
$minhas_manifetacoes = $Manifestacoes->chama_minhas_manifestacoes($_SESSION['id_usuario'], $_SESSION['id_entidade']);
// echo '<pre>';
// print_r($minhas_manifetacoes);
// echo '<pre>';
?>

<div class="container mt-4">
    <div class="row">

        <?php if (isset($_GET['protocolo'])) { ?>
            <div class="p-3 bg-info bg-opacity-10 border border-info border-start-0 border-end-0 text-center">
                Sua solicitação foi enviada com sucesso, este é o nº do protocolo <strong><?= $_GET['protocolo'] ?></strong>
            </div></br>
        <?php } ?>

        <div class="mt-3">
            <h5>Minhas Solicitações</h5>
            <hr>
        </div>

        <div>
            <table class="table table-striped sua-tabela" id="myTable">
                <thead>
                    <tr>
                        <th>Nº protocolo</th>
                        <th>Motivo</th>
                        <th>Entidade</th>
                        <th>Situação</th>
                        <th>Ver Detalhes</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($minhas_manifetacoes as $manifestacao) {?>
                    <tr>
                        
                        <td><?=$manifestacao['protocolo_manifestacao']?></td>
                        <td><?=$manifestacao['motivo_manifestacao']?></td>
                        <td><?=$manifestacao['nome_entidade']?></td>

                        <?php if($manifestacao['status_manifestacao'] == 'A') { 
                            $manifestacao['status_manifestacao'] = 'Em Análise';

                        } else {
                            $manifestacao['status_manifestacao'] = 'Finalizado';
                        } ?>

                        <td><?=$manifestacao['status_manifestacao']?></td>


                        <td><a href="manifestacao.php?id_manifestacao=<?=$manifestacao['id_manifestacao']?>" class="btn1 btn btn-sm btn-info">Detalhar</a></td>
                        
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
</div>

<?php include_once 'controladores/Footer.php' ?>