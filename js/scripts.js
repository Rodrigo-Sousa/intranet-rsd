/* Quando o usuário clicar no botão, alterar entre mostrar e ocultar */  
  function filterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("minha-pesquisa");
    filter = input.value.toUpperCase();
    div = document.getElementById("meu-dropdown");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
      txtValue = a[i].textContent || a[i].innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        a[i].style.display = "";
      } else {
        a[i].style.display = "none";
      }
    }
  }
// Evento com botão
var botao = document.getElementById('btn-form');

// atrelando evento ao botão - Evento Listener (com dois parâmetros - o segundo é o que irá acontecer com o evento eu eu peguei)

botao.addEventListener('click', function(){
    // Dar foco no elemento do menu que contem o id dropdownNovaMarca
    document.getElementById('dropdown-form-padroes').focus();

})
var botao = document.getElementById('btn-pasta');

// atrelando evento ao botão - Evento Listener (com dois parâmetros - o segundo é o que irá acontecer com o evento eu eu peguei)

botao.addEventListener('click', function(){
    // Dar foco no elemento do menu que contem o id dropdownNovaMarca
    document.getElementById('dropdown-pasta-empresa').focus();

})

// atrelando evento ao botão - Evento Listener (com dois parâmetros - o segundo é o que irá acontecer com o evento eu eu peguei)

botao.addEventListener('click', function(){
    // Dar foco no elemento do menu que contem o id dropdownNovaMarca
    document.getElementById('dropdown-nova-marca').focus();

})