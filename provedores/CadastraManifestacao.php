<?php

echo '<pre>';

print_r($_POST);


echo '</pre>';
$aquivo = json_decode($_POST['arquivo_manifestacao']);
echo '<pre>';
print_r($aquivo);

echo '</pre>';
$caminho = '../assets/comprovantes/';
move_uploaded_file($aquivo->arquivo_manifestacao->tmp_name, $caminho);