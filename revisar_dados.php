<?php
session_start();
require_once 'provedores/Classes.php';
verificaSessao();
require_once 'controladores/Controller.php';

// echo '<pre>';
//     print_r($_POST);
// echo '</pre>';

// echo '<pre>';
//     print_r($_SESSION);
// echo '</pre>';

?>
<div class="aviso_inicial row">
    <div class="col-lg-12 col-xl-12 col-xxl-12">
        <section class="text-start">
            <h4>Revise os dados da sua solicitação</h4>
            <strong>
                <p>Veja os detalhes que serão enviados</p>
            </strong>
        </section>
    </div>
</div>

<section class="mt-3">
    <div class="container">
        <div class="row">
            <?php
                echo '<pre>';
                    print_r($_POST);
                echo '</pre>';
            ?>
        </div>
    </div>
</section>












<?php include_once 'controladores/Footer.php' ?>