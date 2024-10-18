<?php
require_once 'Conexao.php';
require_once 'Interfaces.php';

class Usuario implements usuario_interface
{

    private int $id_usuario;
    private $conexao;
    private $nome_usuario;
    private $sobrenome_usuario;
    private $cpf_usuario;
    private $email_usuario;
    private $senha_usuario;

    public function __construct()
    {
        $this->conexao = new Conexao;
    }

    public function inserir_usuario($nome_usuario, $sobrenome_usuario, $cpf_usuario, $email_usuario, $senha_usuario)
    {

        $query =  "INSERT INTO tb_usuario (nome_usuario, sobrenome_usuario, cpf_usuario, email_usuario,  senha_usuario) VALUES (:nome_usuario, :sobrenome_usuario, :cpf_usuario, :email_usuario, :senha_usuario)";

        try {
            $conn = $this->conexao->Conectar();
            $stmt = $conn->prepare($query);

            $stmt->bindValue(':nome_usuario', $nome_usuario);
            $stmt->bindValue(':sobrenome_usuario', $sobrenome_usuario);
            $stmt->bindValue(':cpf_usuario', $cpf_usuario);
            $stmt->bindValue(':email_usuario', $email_usuario);
            $stmt->bindValue(':senha_usuario', $senha_usuario);

            $stmt->execute();
        } catch (PDOException $e) {
            // Tratar exceções
            throw new Exception('Erro ao inserir usuário: ' . $e->getMessage());
        }
    }

    public function consulta_cpf($cpf_usuario)
    {

        $query = "SELECT COUNT(*) AS total_registros FROM tb_usuario WHERE cpf_usuario = :cpf_usuario";

        try {
            $conn = $this->conexao->Conectar();
            $stmt = $conn->prepare($query);

            $stmt->bindValue(':cpf_usuario', $cpf_usuario);
            $stmt->execute();

            $r = $stmt->fetch(PDO::FETCH_ASSOC);
            return $r['total_registros'];
        } catch (PDOException $e) {
            // Tratar exceções
            throw new Exception('Erro ao consultar CPF: ' . $e->getMessage());
        }
    }

    public function consulta_usuario($login_usuario)
    {

        if (strlen($login_usuario) == 11) {

            $query = "SELECT * FROM tb_usuario WHERE cpf_usuario = :login_usuario LIMIT 1";
        } else {

            $query = "SELECT * FROM tb_usuario WHERE email_usuario = :login_usuario LIMIT 1";
        }

        try {
            $conn = $this->conexao->Conectar();
            $stmt = $conn->prepare($query);

            $stmt->bindValue(':login_usuario', $login_usuario);
            $stmt->execute();

            $r = [];

            return $r = $stmt->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            // Tratar exceções
            throw new Exception('Erro ao consultar CPF: ' . $e->getMessage());
        }
    }
}

// Função para gerar um token aleatório
function gerarTokenCSRF()
{
    return bin2hex(random_bytes(32));
}

// Função para verificar o token
function verificarTokenCSRF()
{
    if (!isset($_SESSION['csrf_token']) || !isset($_POST['csrf_token']) || $_SESSION['csrf_token'] !== $_POST['csrf_token']) {
        header("Location: ../login.php?status=Ataque_CSRF_detectado");
        die('Ataque CSRF detectado!');
    }
}

function verificaSessao($mensagemErro = 'Sessão inválida. Faça login novamente.')
{
    if (!isset($_SESSION) || !isset($_SESSION['csrf_token'])) {
        // Verificar se o token CSRF enviado na requisição é válido (se aplicável)
        if (isset($_POST['csrf_token']) && $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
            $mensagemErro = 'Token CSRF inválido. Possível ataque.';
        }

        // Redirecionar para a página de login com a mensagem de erro personalizada
        header("Location: ../index.php?status=$mensagemErro");
        die();
    }
}
