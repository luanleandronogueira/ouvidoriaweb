<?php
session_start();
require_once 'Classes.php';
verificaSessao();

verificarTokenCSRF();

$manifestacoes = new Manifestacoes;

echo '<pre>';
print_r($_POST);
echo '</pre>';

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {

    if(!empty($_POST)){
        
        // filtra os dados
        $arquivo_manifestacao = filter_var($_POST['arquivo_manifestacao'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $id_entidade_manifestacao = filter_id($_POST['id_entidade_manifestacao'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $id_tipo_manifestacao = filter_id($_POST['id_tipo_manifestacao'], FILTER_SANITIZE_NUMBER_INT);
        $motivo_manifestacao = filter_var($_POST['motivo_manifestacao'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $conteudo_manifestacao = filter_var($_POST['conteudo_manifestacao'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $observacoes_manifestacao = filter_var($_POST['observacoes_manifestacao'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $local_manifestacao = filter_var($_POST['local_manifestacao'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $id_usuario_manifestacao = filter_var($_SESSION['id_usuario'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        // se vazio, insere dados
        if(empty($observacoes_manifestacao)){
            $observacoes_manifestacao = 'Sem observações';
        }

        // se vazio, insere dados
        if(empty($local_manifestacao)){
            $local_manifestacao = 'Sem observações';
        }

        // insere no banco de dados a manifestacao
        $manifestacoes->inserir_manifestacao($motivo_manifestacao, $id_entidade_manifestacao, $id_tipo_manifestacao, $conteudo_manifestacao, $observacoes_manifestacao, $local_manifestacao, $id_usuario_manifestacao);

        // envia email para o orgão responsável



    } else {


    }

} else {



}
