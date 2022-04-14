$('#form-contato').submit(function(){
  // Aqui estamos declarando as variáveis que serão verificadas no formulário
  var assunto = $('#assunto');
  var mensagem = $('#mensagem');
  var erro = $('.alert');
  var campo = $('#campo-erro');

  // removendo o elemento da tela sempre que tentar submeter o formulario
  erro.addClass('d-none');
  $('.is-invalid').removeClass('is-invalid');

  // valida o campo assunto
  if (assunto.val() == '') {
    erro.removeClass('d-none');
    campo.html('assunto'); // nome do campo que não foi preenchido!
    assunto.focus();
    assunto.addClass('is-invalid');
    return false;
  }  
  // valida o campo mensagem
  if (mensagem.val() == '') {
    erro.removeClass('d-none');
    campo.html('mensagem'); // nome do campo que não foi preenchido!
    mensagem.focus();
    mensagem.addClass('is-invalid');
    return false;
  }  
  
  // se chegar aqui pode enviar os dados!
  return true;
});