<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Aplicativo web de Ouvidoria">
    <meta name="author" content="L3 Tecnologia/IT Soluções">
    <title>Ouvidoria Web - Anônimo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=communication" />
    <link rel="stylesheet" href="assets/css/style_anonimo.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        /* Adicione um estilo específico para telas menores, como celulares */
        @media (max-width: 767px) {

            /* Seletor para a tabela que você deseja adicionar o scroll horizontal */
            .sua-tabela {
                /* Defina a largura máxima da tabela para ativar o scroll horizontal quando necessário */
                max-width: 100%;
                /* Adicione um scroll horizontal quando o conteúdo excede a largura da tabela */
                overflow-x: auto;
                display: block;
                /* Adicione display: block para forçar a barra de rolagem horizontal */
            }

            /* Opcional: Remova as bordas da tabela para um visual mais limpo */
            .sua-tabela,
            .sua-tabela th,
            .sua-tabela td {
                border: none;
            }
        }
    </style>
</head>

<body>
    <header>
        <nav class="nav_controller navbar d-none d-lg-block d-xl-block d-xxl-block">
            <div class="container-fluid">
                <div class="container ">
                    <div class="row ">
                        <div class="col-3 col-xl-3 col-lg-3">
                            <a href="login.php"><img class="rounded-5" src="assets/images/ouvidoria_web_branco_logo.png" width="90px" height="90" alt="Ouvidoria Web"></a>
                        </div>
                        <div class="col-6 col-xl-6 col-lg-6">
                            <div class="cont_sessao2">
                              <center>
                              <h3 class="text-white">Denúncia Anônima</h3>
                              </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <nav class="nav_controller_mobile navbar navbar-expand-lg d-lg-none d-xl-none d-xxl-none">
            <div class="container-fluid">
                <a class="navbar-brand" href="dashboard.php">
                    <img src="assets/images/ouvidoria_web_branco_logo.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
                </a>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">

                </div>
            </div>
        </nav>
    </header>
    <main>
