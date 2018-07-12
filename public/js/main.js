$('.toggle').click(function(){
    $('.formulario').animate({
        height: "toggle",
        'padding-top': 'toggle',
        'padding-bottom': 'toggle',
        opacity: 'toggle'
    }, "slow");
    
    if(document.getElementById("p1").innerHTML == "Particular"){
    	document.getElementById("p1").innerHTML = "Empresa";
    }else{
    	document.getElementById("p1").innerHTML = "Particular";
    }
});