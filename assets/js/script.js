// funcões js para

function consulta_senhas() {
  const senha_usuario = document.getElementById("senha_usuario").value;
  const senha_usuario1 = document.getElementById("senha_usuario");
  const confirmar_senha_usuario1 = document.getElementById(
    "confirmar_senha_usuario"
  );
  const confirmar_senha_usuario = document.getElementById(
    "confirmar_senha_usuario"
  ).value;
  const button_submit = document.getElementById("button_submit");
  const mensagem_senha = document.getElementById("mensagem_senha");

  if (senha_usuario !== confirmar_senha_usuario) {
    mensagem_senha.classList.remove("text-success");
    senha_usuario1.classList.remove("border-success");
    confirmar_senha_usuario1.classList.remove("border-success");

    mensagem_senha.textContent = "As senhas estão diferentes";
    mensagem_senha.classList.add("text-danger");
    senha_usuario1.classList.add("border-danger");
    confirmar_senha_usuario1.classList.add("border-danger");
    button_submit.disabled = true;
  } else {
    mensagem_senha.classList.remove("text-danger");
    senha_usuario1.classList.remove("border-danger");
    confirmar_senha_usuario1.classList.remove("border-danger");

    mensagem_senha.textContent = "As senhas estão iguais";
    mensagem_senha.classList.add("text-success");
    senha_usuario1.classList.add("border-success");
    confirmar_senha_usuario1.classList.add("border-success");
    button_submit.disabled = false;
  }
}

function validaCPF(cpf) {
  var Soma = 0;
  var Resto;

  var strCPF = String(cpf).replace(/[^\d]/g, "");

  if (strCPF.length !== 11) return false;

  if (
    [
      "00000000000",
      "11111111111",
      "22222222222",
      "33333333333",
      "44444444444",
      "55555555555",
      "66666666666",
      "77777777777",
      "88888888888",
      "99999999999",
    ].indexOf(strCPF) !== -1
  )
    return false;

  for (i = 1; i <= 9; i++)
    Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (11 - i);

  Resto = (Soma * 10) % 11;

  if (Resto == 10 || Resto == 11) Resto = 0;

  if (Resto != parseInt(strCPF.substring(9, 10))) return false;

  Soma = 0;

  for (i = 1; i <= 10; i++)
    Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (12 - i);

  Resto = (Soma * 10) % 11;

  if (Resto == 10 || Resto == 11) Resto = 0;

  if (Resto != parseInt(strCPF.substring(10, 11))) return false;

  return true;
}

function verificaEstilo(campo, valido) {
  campo.classList.remove("valido", "invalido");
  campo.classList.add(valido ? "valido" : "invalido");
}

function consulta_cpf() {
  const cpf_sem_formatacao = document.getElementById("cpf_usuario").value;

  // Remove todos os caracteres que não são números
  const usuario_cpf = cpf_sem_formatacao.replace(/\D/g, "");

  if (usuario_cpf.length > 0) {
    const cpf_validado = document.getElementById("cpf_validado");
    const API = "provedores/ConsultaCPF.php?cpf_usuario=" + usuario_cpf;

    fetch(API)
      .then((response) => {
        // console.log('Response', response)
        return response.json();
      })
      .then((dados) => {
        //  console.log('Dados', dados)
        if (dados == 0) {
          // console.log('Funcionou', dados)
          cpf_validado.classList.remove("text-danger");

          cpf_validado.textContent = "CPF está disponível para cadastro";
          cpf_validado.classList.add("text-success");
          usuario_cpf.classList.add("border-success");
          cpf_campo.innerHTML = "</br>";
        } else {
          cpf_validado.textContent = "CPF já cadastrado!";
          cpf_validado.classList.add("text-danger");
          usuario_cpf.classList.add("border-danger");
          cpf_campo.innerHTML = "<br>";
        }
      })
      .catch((error) => {
        console.log(error);
      });
  } else {
    cpf_validado.classList.remove("text-danger");
    cpf_validado.classList.remove("text-success");
  }
}

function contador_caracteres(){
    const campo = document.getElementById('conteudo_manifestacao')
    const contador = document.getElementById('contador')

    campo.addEventListener('input', () =>{
      contador.textContent = campo.value.length
    });
}

// function contarCaracteres() {
//   let campo = document.getElementById('meuCampo');
//   let contador = document.getElementById('contador');
//   contador.textContent = `Você digitou ${campo.value.length} caracteres.`;
// }

function consulta_email(){
  // document.getElementById('email_usuario').value.addEventListener('blur', consulta_email);
  const email_usuario = document.getElementById('email_usuario').value
  const email_usuario_input = document.getElementById('email_usuario')
  const btnCodigo = document.getElementById('btnCodigo')
  const email_invalido = document.getElementById('email_invalido')

  var API = 'provedores/ConsultaEmail.php?email_usuario=' + email_usuario

  fetch(API)
    .then((response) => {
      console.log('Response', response)
      return response.json();
      }).then((dados) => {
        if (dados === 0) {
          //remove efeitos positivos
          btnCodigo.classList.add("d-none")
          email_usuario_input.classList.remove("border-success")

          // adiciona efeitos negativos
          email_usuario_input.classList.add("border-danger");
          email_invalido.classList.remove("d-none")
        
        } else if(dados === 1) {
          //remove efeitos positivos
          email_invalido.classList.add("d-none")
          email_usuario_input.classList.remove("border-danger")

          // adiciona efeitos negativos
          btnCodigo.classList.remove("d-none")
          email_usuario_input.classList.add("border-success");
          
        } else {
          //remove efeitos positivos
          btnCodigo.classList.add("d-none")
          email_usuario_input.classList.remove("border-success")

          // adiciona efeitos negativos
          email_usuario_input.classList.add("border-danger");
          email_invalido.classList.remove("d-none")

        }
      }).catch((error) => {
        console.log(error);
      });
}

function salva_cookie(){
  const email_usuario = document.getElementById('email_usuario').value
  // função para salvar dados no Cookie
  const data = new Date;
  data.setTime(data.getTime() + (10 * 60 * 1000)) // 10 minutos em milissegundos
  const tempo_expiracao = "expires = "+ data.toUTCString();
  // definir um cookie
  document.cookie = "email_usuario=" + email_usuario + ";" + tempo_expiracao + "; path=/";
}

function ler_cookie(){
    const email = document.cookie
    // continuar criando a função
    console.log(email)

}

function insere_cookie(){
    const cookies = document.cookie.split(';');
    cookie_value = cookies[1].split('=') 
    document.getElementById('email_usuario').value = cookie_value[1];
}

function insere_cookie_email_recuperacao(){
  const cookies = document.cookie.split(';');
  cookie_value = cookies[1].split('=') 
  document.getElementById('email_usuario').value = cookie_value[1];
}

window.addEventListener('load', function(){
  ler_cookie();
})

function verifica_codigo(){
  const codigo_recuperacao = document.getElementById('codigo_verificacao').value
  const email_usuario_value = email_usuario.value
  const div_codigo = document.getElementById('div_codigo')
  const div_recuperacao = document.getElementById('div_recuperacao')

  var API = 'provedores/ConsultaCodigoVerificacao.php?email_usuario=' + email_usuario_value + '&&codigo=' + codigo_recuperacao

  fetch(API)
    .then((response) => {
      console.log('Response', response)
      return response.json();
      }).then((dados) => {
        if (dados == 'autorizado') {
          //remove efeitos positivos
          div_codigo.classList.add("d-none")
          console.log(dados)
          div_recuperacao.classList.remove('d-none')
      
        } else {
          //remove efeitos positivos
          div_codigo.classList.remove("d-none")
          //btnCodigo.classList.add("d-none")
          console.log(dados)
          div_recuperacao.classList.add('d-none')
          console.log('sem resposta')
        }
      }).catch((error) => {
        console.log(error);
      });
}