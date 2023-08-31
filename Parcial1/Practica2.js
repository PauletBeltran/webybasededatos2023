$(document).ready(function (){
    $("#boton1").click(function (e){
        alert("Evento click boton 1")
    });

    $("#div1").on("dblclick", function(){
        alert("Evento doble click")
    });

    $("#input1").focus(function (o){
        console.log("Metodo focus al dar click en el input")
    });

    $("#texto1").hover(function (){
        $("#texto1").css("background-color", "#9D42FD");
    }, function (){
        $("#texto1").css("background-color", "#E5D4F7");
    });

    $("#input2").keydown(function (){
        console.log("key down")
        $("#input2").css("background-color", "#yellow");
    })
});