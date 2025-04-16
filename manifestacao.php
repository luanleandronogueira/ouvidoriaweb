<?php
session_start();
require_once 'provedores/Classes.php';
verificaSessao();
require_once 'controladores/Controller.php';

$Manifestacoes = new Manifestacoes;
$minha_manifetacao = $Manifestacoes->chama_manifestacao($_GET['id_manifestacao']);

extract($minha_manifetacao);


?>
<div class="container mt-4">
    <div class="row">
        <div class="mt-3">
            <h5>Solicitação: <?=$minha_manifetacao['protocolo_manifestacao'] ?></h5>
            <hr>
        </div> 

        <div class="col-12">
            <p><strong>Tipo de Manifestação: </strong><?=$nome_tipo_manifestacao ?></p>
            <p><strong>Destinatário: </strong><?=$nome_entidade ?></p>
            <p><strong>Motivo: </strong> <?=$motivo_manifestacao ?></p>
            <p><strong>Conteudo da Manifestação: </strong> <?=$conteudo_manifestacao ?></p>
            <hr>
            <p><strong>Local do Fato:</strong> <?=$local_manifestacao ?></p>
            <p><strong>Demais Observações:</strong> <?=$observacoes_manifestacao ?></p>
            <hr>
            <p><strong>Data da Solicitação:</strong> <?=$data_manifestacao ?></p>

            <?php if($arquivo_manifestacao == 'Sem anexos') { 
                 $arquivo_manifestacao = 'sem anexos enviados'; ?>
                <p><strong>Anexo enviado:</strong> <?=$arquivo_manifestacao?></p>
            <?php } else { ?>
                <p><strong>Anexo enviado:</strong> <a href="<?=$arquivo_manifestacao ?>" target="_blank">confira o anexo</a></p>
            <?php }  ?>
 
            <?php if($status_manifestacao == 'A'){
                $status_manifestacao = 'Em análise';
            } else {
                $status_manifestacao = 'Finalizado';
            } ?>

            <p><strong>Status da Manifestação:</strong> <?=$status_manifestacao ?></p>
        </div>
    </div>
</div>

<?php include_once 'controladores/Footer.php' ?>