<?php 
require_once 'Classes.php';

interface usuario_interface {
    
    public function inserir_usuario($nome_usuario, $sobrenome_usuario, $cpf_usuario, $email_usuario, $senha_usuario);
    public function consulta_cpf($cpf_usuario);

}

?>