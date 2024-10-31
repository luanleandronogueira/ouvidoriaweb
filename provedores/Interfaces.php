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
    public function inserir_manifestacao($motivo_manifestacao, $id_entidade_manifestacao, $id_tipo_manifestacao, $conteudo_manifestacao, $observacoes_manifestacao, $local_manifestacao, $id_usuario_manifestacao);
}

interface interface_entidades {
    public function chama_email_entidade($id_entidade);
}
?>