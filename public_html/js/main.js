/**
 * Created by ronaldo.silva on 18/08/2017.
 */

$(function(){
        //equivalente ao load de nossa página


        //caso queira que a janela modal3(aula26) não tenha o efeito que escurece a
        //parte de trás e que não seja fechada com apertando 'esc'
      /*$("#modal03").modal({backdrop:false, keyboard:false});*/

        //caso queira que a janela modal03(aula26) abra, assim que, a página abra.
        $("#modal03").modal("show");

        //caso queira que a janela modal03(aula26) feche sozinha depois de 3 segundos
       /*setTimeout(function(){
            $("#modal03").modal("hide");
        }, 3000);*/


        //Para aula 28
        $(".ttp").tooltip({
            //animation:false,//sem animação(aparece rápido)
            //delay:{show:1000,hide:5000},//Mostra em 1 segundo e some depois de 5 segundos
            //title:"Título padrão",//Mostra o título que esta escrito aki se não estive escrito lá na tag button.
            //trigger:'click'//só aparece o tooltip se clicar
        });
        //Para aula 28
        $(".ppv").popover({
            title:"Título do popover",
            trigger:'hover focus'//funciona com passa o mouse em cima, e não tiver esse comando só funciona clicando
        });

        //Para aula 29
        $("#btnjs").button();
        //Para aula 29
        $("#troca-estado").click(function(){
            var btn = $(this);
            btn.button("loading");

            setTimeout(function(){
                btn.button("reset");
            },3000);
        });

    });
















