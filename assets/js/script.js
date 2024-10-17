// funcões js para

function consulta_senhas() {
  const senha_usuario = document.getElementById("senha_usuario").value;
  const senha_usuario1 = document.getElementById("senha_usuario");
  const confirmar_senha_usuario1 = document.getElementById("confirmar_senha_usuario");
  const confirmar_senha_usuario = document.getElementById("confirmar_senha_usuario").value;
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
    var Soma = 0
    var Resto
  
    var strCPF = String(cpf).replace(/[^\d]/g, '')
    
    if (strCPF.length !== 11)
       return false
    
    if ([
      '00000000000',
      '11111111111',
      '22222222222',
      '33333333333',
      '44444444444',
      '55555555555',
      '66666666666',
      '77777777777',
      '88888888888',
      '99999999999',
      ].indexOf(strCPF) !== -1)
      return false
  
    for (i=1; i<=9; i++)
      Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
  
    Resto = (Soma * 10) % 11
  
    if ((Resto == 10) || (Resto == 11)) 
      Resto = 0
  
    if (Resto != parseInt(strCPF.substring(9, 10)) )
      return false
  
    Soma = 0
  
    for (i = 1; i <= 10; i++)
      Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i)
  
    Resto = (Soma * 10) % 11
  
    if ((Resto == 10) || (Resto == 11)) 
      Resto = 0
  
    if (Resto != parseInt(strCPF.substring(10, 11) ) )
      return false
  
    return true
  }

  function verificaEstilo(campo, valido) {
    campo.classList.remove('valido', 'invalido');
    campo.classList.add(valido ? 'valido' : 'invalido');
  }


  function consulta_cpf(){

    const usuario_cpf = document.getElementById('cpf_usuario').value
    if(usuario_cpf.length > 0){

      const cpf_validado = document.getElementById('cpf_validado')
      const API = 'provedores/ConsultaCPF.php?cpf_usuario=' + usuario_cpf
  
      fetch(API)
        .then(response => {
          // console.log('Response', response)
          return response.json()
        }).then(dados => {
          //  console.log('Dados', dados)
          if(dados == 0) {
            // console.log('Funcionou', dados)
            cpf_validado.classList.remove('text-danger')
  
            cpf_validado.textContent = 'CPF está disponível para cadastro';
            cpf_validado.classList.add('text-success')
            usuario_cpf.classList.add('border-success')
            cpf_campo.innerHTML = '</br>';
            
          } else {
  
            cpf_validado.textContent = 'CPF já cadastrado!';
            cpf_validado.classList.add('text-danger')
            usuario_cpf.classList.add('border-danger')
            cpf_campo.innerHTML = '<br>';
  
          }
        }).catch(error => {
          console.log(error)
      })

    } else {
      cpf_validado.classList.remove('text-danger')
      cpf_validado.classList.remove('text-success')

    }
  }

  // function contarCaracteres() {
  //   let campo = document.getElementById('meuCampo');
  //   let contador = document.getElementById('contador');
  //   contador.textContent = `Você digitou ${campo.value.length} caracteres.`;
  // }