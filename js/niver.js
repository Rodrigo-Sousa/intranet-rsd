/*Criando o evento clique contido na div niver-area.*/
$('.filter-btn').on('click', function(){
    //identificar o id ao ser clicado
    let type = $(this).attr('id');
    //selecionando as caixas que temos no nosso projeto
    let boxes = $('.niver-box');

    //inserindo a lógica para tirar a classe  active dos outros botões, ao ser clicado.

    $('.main-btn').removeClass('active');
    //botão que foi clicado, adiciona a classe ativo
    $(this).addClass('active');

    //Detectando qual o id, e apresentando a seleção das box correspondentes.
    //type é o id do botão
    if(type == 'jan-btn'){
      //chamando o tipo da classe correspondente
        eachBoxes('janeiro', boxes)
    }
    else if(type == 'fev-btn'){
        eachBoxes('fevereiro', boxes)
    }else if(type =='mar-btn'){
        eachBoxes('marco', boxes)
    }else if(type == 'abr-btn'){
        eachBoxes('abril', boxes)
    }else if(type == 'mai-btn'){
        eachBoxes('maio', boxes)
    }else if(type == 'jun-btn'){
        eachBoxes('junho', boxes)
    }else if(type == 'jul-btn'){
        eachBoxes('julho', boxes)
    }else if(type == 'ago-btn'){
        eachBoxes('agosto', boxes)
    }
    else if(type == 'set-btn'){
        eachBoxes('setembro', boxes)
    }
    else if(type == 'out-btn'){
    eachBoxes('outubro', boxes)
    }
    else if(type == 'nov-btn'){
        eachBoxes('novembro', boxes)
    }
    else if(type == 'dez-btn'){
        eachBoxes('dezembro', boxes)
    }
    else{
        eachBoxes('all', boxes) 
    }

});

//função externa, para não ficar repetindo tando no código, pois a ação é a mesma.
function eachBoxes(type, boxes){

    if(type == 'all'){
        //se for all, mostre todas, mostarndo via evendo do toadas as que estão disponíveis
        $(boxes).fadeIn();
    }
    //se tiver um tipo especifico, que não seja all, passar por cada um dos boxes
    else{
        $(boxes).each(function(){
            //verificando se o tipo que foi clicado, é ou não a classe correspondente a ele.
            if(!$(this).hasClass(type)){
                //vou esconter de uma maneira lenta
                $(this).fadeOut('slow');
            }
            else{
                //se tiver, mostre a caixa.
                $(this).fadeIn();
            }
        })
    }
}
