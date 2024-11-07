<?php 
require_once 'Classes.php';

interface usuario_interface {
    public function inserir_usuario($nome_usuario, $sobrenome_usuario, $cpf_usuario, $email_usuario, $senha_usuario);
    public function consulta_cpf($cpf_usuario);
}

interface tipo_manifestacoes {
    public function chama_tipo_manifestacoes();
}

interface interface_manifestacoes {
    public function inserir_manifestacao($motivo_manifestacao, $id_entidade_manifestacao, $id_tipo_manifestacao, $conteudo_manifestacao, $observacoes_manifestacao, $local_manifestacao, $arquivo_manifestacao, $id_usuario_manifestacao, $status_manifestacao, $data_manifestacao, $protocolo_manifestacao);
    public function chama_minhas_manifestacoes($id_usuario_manifestacao);
    public function chama_manifestacao($id_manifestacao);
}

interface interface_entidades {
    public function chama_email_entidade($id_entidade);
    public function chama_entidades();
    public function chama_entidade($id_entidade);
    
}
?>