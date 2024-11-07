<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Aplicativo web de Ouvidoria">
    <meta name="author" content="L3 Tecnologia/IT Soluções">
    <title>Ouvidoria Web</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=communication" />
    <link rel="stylesheet" href="assets/css/style.css">
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
          display: block; /* Adicione display: block para forçar a barra de rolagem horizontal */
        }
        /* Opcional: Remova as bordas da tabela para um visual mais limpo */
        .sua-tabela, .sua-tabela th, .sua-tabela td {
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
                                <a href="dashboard.php"><img src="assets/images/logo_ouvidoria.png" width="200px" alt="Ouvidoria Web"></a>
                        </div>
                        <div class="col-6 col-xl-6 col-lg-6">
                            <div class="cont_sessao2">
                                <span class="spanPersonal">
                                    <strong><a class="aPersonal" href="dashboard.php">Início</a></strong>
                                </span>
                                <span class="spanPersonal">
                                    <strong><a class="aPersonal" href="dashboard.php#main">Registrar Manifestação</a></strong>
                                </span>
                                <span class="spanPersonal">
                                    <strong><a class="aPersonal" href="">Perguntas Frequentes</a></strong>
                                </span>
                            </div>
                        </div>
                        <div class="col-3 col-xl-3 col-lg-3  text-end">
                            <div class="cont_sessao text-center" >
                                <strong>Bem Vindo | <?= $_SESSION['nome_usuario'] ?></strong></br>
                                <a href="">Ver Perfil</a> | <a href="sair.php">Sair </a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </nav>
    </header>
    <main>