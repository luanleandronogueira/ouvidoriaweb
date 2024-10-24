<footer class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-xl-3 col-xxl-3 col-sm-12 col-md-12 logo_footer">
                <img src="assets/images/ouvidoria_web_branco.png" width="280px" alt="Ouvidoria Web">
            </div>
            <div class="col-3 col-lg-3 col-xl-3 col-xxl-3 col-sm-12 col-md-12 logo_footer">
                <h5>Usuário</h5>
                <ul>
                    <li><a href="">Meu Perfil</a></li>
                    <li><a href="">Minhas Solicitações</a></li>
                    <li><a href="">Registrar uma Solicitação</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-xl-3 col-xxl-3 col-sm-12 col-md-12 logo_footer">
                <h5>Informações</h5>
                <ul>
                    <li><a href="">Perguntas Frequentes</a></li>
                    <li><a href="">Políticas de Privacidade</a></li>
                    <li><a href="">Lei Geral de Proteção de Dados</a></li>
                    <li><a href="">Mapa do Site</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-xl-3 col-xxl-3 col-sm-12 col-md-12 logo_footer">
            <h5>Ajuda</h5>
                <ul>
                    <li><a href="">Suporte</a></li>
                    <li><a href="">Trabalhe Conosco</a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                </ul>
            </div>
        </div>
    </div>
    <hr>
    <div>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, eaque itaque? Tempore totam possimus veniam sapiente iure animi placeat repudiandae. Quis error alias minima. Amet unde sequi fuga! Illum, perspiciatis.
    </div>
</footer>
</main>
<script src="assets/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script>
    $(document).ready(function() {
        $('.date').mask('00/00/0000');
        $('.time').mask('00:00:00');
        $('.date_time').mask('00/00/0000 00:00:00');
        $('.cep').mask('00000-000');
        $('.phone').mask('0000-0000');
        $('.phone_with_ddd').mask('(00) 0000-0000');
        $('.phone_us').mask('(000) 000-0000');
        $('.mixed').mask('AAA 000-S0S');
        $('.cpf').mask('000.000.000-00', {
            reverse: true
        });
        $('.cnpj').mask('00.000.000/0000-00', {
            reverse: true
        });
        $('.money').mask('000.000.000.000.000,00', {
            reverse: true
        });
        $('.money2').mask("#.##0,00", {
            reverse: true
        });
        $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
            translation: {
                'Z': {
                    pattern: /[0-9]/,
                    optional: true
                }
            }
        });
        $('.ip_address').mask('099.099.099.099');
        $('.percent').mask('##0,00%', {
            reverse: true
        });
        $('.clear-if-not-match').mask("00/00/0000", {
            clearIfNotMatch: true
        });
        $('.placeholder').mask("00/00/0000", {
            placeholder: "__/__/____"
        });
        $('.fallback').mask("00r00r0000", {
            translation: {
                'r': {
                    pattern: /[\/]/,
                    fallback: '/'
                },
                placeholder: "__/__/____"
            }
        });
        $('.selectonfocus').mask("00/00/0000", {
            selectOnFocus: true
        });
    });
</script>
</body>

</html>