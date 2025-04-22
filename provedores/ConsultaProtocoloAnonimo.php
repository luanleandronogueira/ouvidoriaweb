<?php 
$protocolo = $_GET['protocolo'];

if($protocolo){
    //print_r($protocolo);

    header('Location: https://l3tecnologia.app.br/api_ouvidoria_web/public/api/v1/manifestacao_anonima/'.$protocolo);

} else {
    header('Location: ./login.php');
}

?>