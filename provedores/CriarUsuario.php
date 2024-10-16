<?php
session_start();
require_once 'Classes.php';
$usuario = new Usuario;

if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {

    verificarTokenCSRF();

    if (!empty($_POST)) {

        $nome_usuario = ucwords(filter_var($_POST['nome_usuario'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        $sobrenome_usuario = ucwords(filter_var($_POST['sobrenome_usuario'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        $email_usuario = filter_var($_POST['email_usuario'], FILTER_SANITIZE_EMAIL);
        $cpf_usuario = filter_var($_POST['cpf_usuario'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $login_usuario = filter_var($_POST['login_usuario'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $senha_usuario = password_hash($_POST['senha_usuario'], PASSWORD_DEFAULT);

        if(!empty($nome_usuario) || !empty($email_usuario) || !empty($cpf_usuario) ||!empty($login_usuario) ||!empty($senha)) {

            $usuario->inserir_usuario($nome_usuario, $sobrenome_usuario, $cpf_usuario, $email_usuario, $login_usuario, $senha_usuario);
            header("Location: ../login.php?status=faca_login");

        } else {

            header("Location: ../criar_usuario.php?status=campos_obrigatorios");
            die();
        }


    } else {

        header("Location: ../login.php?status=nao_autorizado1");
        die();
    }
} else {

    header("Location: ../login.php?status=nao_autorizado2");
    die();
}