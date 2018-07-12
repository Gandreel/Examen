$('.toggle').click(function(){
    $('.formulario').animate({
        height: "toggle",
        'padding-top': 'toggle',
        'padding-bottom': 'toggle',
        opacity: 'toggle'
    }, "slow");
    
    if(document.getElementById("p1").innerHTML == "No Presionar"){
    	document.getElementById("p1").innerHTML = "Vuelve Atras";
    }else{
    	document.getElementById("p1").innerHTML = "No Presionar";
    }
});