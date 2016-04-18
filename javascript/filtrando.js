$(document).ready(function(){
    $("#form1").hide();
    $("#form2").hide();
    $("#form3").hide();
    $("#form4").hide();
    function categSelecionada(){
        var categoria = $("#categ").val();
        if(categoria == 'Busca pelo nome'){
            $("#form1").show("fast");
            $("#form2").hide();
            $("#form3").hide();
            $("#form4").hide();
           
        }else if(categoria == 'Busca pela quantidade'){
            $("#form2").show("fast");
            $("#form1").hide();
            $("#form3").hide();
            $("#form4").hide();
           
        }else if(categoria == 'Busca pelo id'){
            $("#form3").show("fast");
            $("#form1").hide();
            $("#form2").hide();
            $("#form4").hide();
        }else if(categoria == 'Busca pelos últimos ids'){
            $("#form4").show("fast");
            $("#form1").hide();
            $("#form3").hide();
            $("#form2").hide();
            
        }
       
    }
    $("select").change(categSelecionada);
    categSelecionada();
    
});
$(document).ready(function(){
    $("button").click(function(){
        $("p").hide();
    });
});



