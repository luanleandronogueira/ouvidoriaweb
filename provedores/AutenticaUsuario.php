<?php
session_start();
require_once 'Classes.php';
$usuario = new Usuario;

if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {

    verificarTokenCSRF();

    if (!empty($_POST)) {

        echo '<pre>';
            print_r($_POST);
        echo '</pre>';

        if(strlen($_POST['login_usuario']) > 11){
            
            $login_usuario = trim(filter_var($_POST['login_usuario'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));

        } else {

            $login_usuario = str_replace(['.', '-'], '', trim(filter_var($_POST['login_usuario'], FILTER_SANITIZE_FULL_SPECIAL_CHARS)));

        }

        $senha_usuario = trim(filter_var($_POST['senha_usuario'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        
        // Validação básica
        if (empty($login_usuario) || empty($senha_usuario)) {
            header("Location: ../login.php?status=nao_autorizado1");
            die();
        }
        echo $login_usuario;
        $consulta_usuario = $usuario->consulta_usuario($login_usuario);

        echo '<pre>';
            print_r($consulta_usuario);
        echo '</pre>';


    }

}

