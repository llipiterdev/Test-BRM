$(function() {
    var precio = $("#precio").val();
    $("#cantidad").keyup(function () { 
        var cant = $("#cantidad").val();
        $("#total").text(precio * cant);

     });
});