$('#dmenu').hover(function(){
    $('#navbarDropdownMenuLink').trigger('click')
//console.log('hover');
})
$('#dmenu2').hover(function(){
    $('#navbarDropdownMenuLink2').trigger('click')
//console.log('hover');
})
$('#dmenu3').hover(function(){
    $('#navbarDropdownMenuLink3').trigger('click')
//console.log('hover');
})

function calcularEdad() {
    
    fecha = $(this).val();
    var hoy = new Date();
    var cumpleanos = new Date(fecha);
    var edad = hoy.getFullYear() - cumpleanos.getFullYear();
    var m = hoy.getMonth() - cumpleanos.getMonth();

    if (m < 0 || (m === 0 && hoy.getDate() < cumpleanos.getDate())) {
        edad--;
    }
    $('#edadN').val(edad);
}

$(".img-mostrar").mouseenter(function(){
    $(".tex-mostrar").show();
});

$(".img-mostrar").mouseleave(function(){
    $(".tex-mostrar").hide();
})

$(".img-mostrar2").mouseenter(function(){
    $(".tex-mostrar2").show();
});

$(".img-mostrar2").mouseleave(function(){
    $(".tex-mostrar2").hide();
})

$(".img-mostrar3").mouseenter(function(){
    $(".tex-mostrar3").show();
});

$(".img-mostrar3").mouseleave(function(){
    $(".tex-mostrar3").hide();
})

$(".img-mostrar4").mouseenter(function(){
    $(".tex-mostrar4").show();
});

$(".img-mostrar4").mouseleave(function(){
    $(".tex-mostrar4").hide();
})

$(".img-mostrar5").mouseenter(function(){
    $(".tex-mostrar5").show();
});

$(".img-mostrar5").mouseleave(function(){
    $(".tex-mostrar5").hide();
})

$(".img-mostrar6").mouseenter(function(){
    $(".tex-mostrar6").show();
});

$(".img-mostrar6").mouseleave(function(){
    $(".tex-mostrar6").hide();
})

$("#muestra1").mouseenter(function(){
    $(".tex-mostrar6").show();
})