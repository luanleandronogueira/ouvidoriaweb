<?php 
require_once 'Conexao.php';

class Usuario {

    private int $id_usuario;
    private $conexao;
    private $nome_usuario;
    private $sobrenome_usuario;
    private $cpf_usuario;
    private $email_usuario;
    private $login_usuario;
    private $senha_usuario;

    public function __construct()
    {
        $this->conexao = new Conexao;
    }

    public function inserir_usuario($nome_usuario, $sobrenome_usuario, $cpf_usuario, $email_usuario, $login_usuario, $senha_usuario){

        $query =  "INSERT INTO tb_usuario (nome_usuario, sobrenome_usuario, cpf_usuario, email_usuario, login_usuario, senha_usuario) VALUES (:nome_usuario, :sobrenome_usuario, :cpf_usuario, :email_usuario, :login_usuario, :senha_usuario)";

        try {
            $conn = $this->conexao->Conectar();
            $stmt = $conn->prepare($query);
    
            $stmt->bindValue(':nome_usuario', $nome_usuario);
            $stmt->bindValue(':sobrenome_usuario', $sobrenome_usuario);
            $stmt->bindValue(':cpf_usuario', $cpf_usuario);
            $stmt->bindValue(':email_usuario', $email_usuario);
            $stmt->bindValue(':login_usuario', $login_usuario);
            $stmt->bindValue(':senha_usuario', $senha_usuario);
    
            $stmt->execute();

        } catch (PDOException $e) {
            // Tratar exceções
            throw new Exception('Erro ao inserir usuário: ' . $e->getMessage());
        }
        
    }
}

// Função para gerar um token aleatório
function gerarTokenCSRF() {
    return bin2hex(random_bytes(32));
}

// Função para verificar o token
function verificarTokenCSRF() {
    if (!isset($_SESSION['csrf_token']) || !isset($_POST['csrf_token']) ||
        $_SESSION['csrf_token'] !== $_POST['csrf_token']) {
        header("Location: ../login.php?status=Ataque_CSRF_detectado");
        die('Ataque CSRF detectado!');
    
    }
}