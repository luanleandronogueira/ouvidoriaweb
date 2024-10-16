// funcões js para

function consulta_senhas() {
  const senha_usuario = document.getElementById("senha_usuario");
  const confirmar_senha_usuario = document.getElementById("confirmar_senha_usuario");
  const button_submit = document.getElementById("button_submit");
  const mensagem_senha = document.getElementById("mensagem_senha");

  if (senha_usuario.value !== confirmar_senha_usuario.value) {
    mensagem_senha.classList.remove("text-success");
    senha_usuario.classList.remove("border-success");
    confirmar_senha_usuario.classList.remove("border-success");

    mensagem_senha.textContent = "As senhas estão diferentes";
    mensagem_senha.classList.add("text-danger");
    senha_usuario.classList.add("border-danger");
    confirmar_senha_usuario.classList.add("border-danger");
    button_submit.disabled = true;
  } else {
    mensagem_senha.classList.remove("text-danger");
    senha_usuario.classList.remove("border-danger");
    confirmar_senha_usuario.classList.remove("border-danger");

    mensagem_senha.textContent = "As senhas estão iguais";
    mensagem_senha.classList.add("text-success");
    senha_usuario.classList.add("border-success");
    confirmar_senha_usuario.classList.add("border-success");
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