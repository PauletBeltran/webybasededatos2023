$(document).ready(function () {
    //alert("Funciona tu jotakueri");
    $("#boton1").on("click", function () {
        //console.log("funciona kLiK")
        $("#saludo").html("KuaTrO bEibEs")
    });

    $("#saludo").hover(function () {
        $(this).css("background-color", "pink");
        $(this).css("font-size", "60px");
    }, function () {
        $(this).css("background-color", "white");
        $(this).css("font-size", "20px");
    }
    );

    $("#boton2").click(function (e) {
        $("#foto1").fadeToggle("slow");
    });
});