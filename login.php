<?php

include 'controladores/ControllerLogin.php';
?>
<section>
    <div class="container">
        <div class="row">
            <!-- Tela de Login -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mt-1 login_1">
                <center>
                    <h3>Ouvidoria Web</h3>
                </center>
                <form class="mt-3" action="" method="">
                    <div>
                        <div class="mb-3 text-center">
                            <label for="login_usuario" class="form-label"><strong>Insira seu Usuário</strong></label>
                            <input type="login_usuario" name="login_usuario" class="form-control" id="login_usuario" aria-describedby="login_usuario">
                        </div>
                        <div class="mb-3 text-center">
                            <label for="senha_usuario" class="form-label"><strong>Senha:</strong></label>
                            <input type="password" name="senha_usuario" class="form-control" id="senha_usuario">
                        </div>
                        <div class="text-center">
                            <a href="recuperar_senha.php">Esqueci à Senha</a> | <a href="criar_usuario.php">Criar um Usuário</a>
                        </div>
                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-primary justify-center">Entrar</button>
                        </div>
                        <!-- <hr> -->
                        <div class="text-center mt-3">
                            <span>Entrar com à conta Google</span></br>
                            <a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTN5ffnsOXJgZzREaRaiSFb5-kln2v48bf9IA&s" width="75px" alt=""></a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mt-1 login_2">

            </div>
        </div>


    </div>



</section>
<?php include_once 'controladores/Footer.php' ?>