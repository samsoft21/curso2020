(function() {
    $(".guardar").click(function() {
        // e.preventDefault()

        var nombre = $("#nombre").val()
        var cant = $("#cant").val()
        var precio = $("#precio").val()


        $.ajax({
            type: "POST",
            url: "php/guardar_p.php",
            data: { producto: nombre, cantidad: cant, valor: precio },
            dataType: "Json",
        }).done(function(resp) {
            if (resp == 2) {
                alert("Registro almacenado correctamente")
                $("#cuerpo").html('')
                $("#cuerpo").load('vistas/tabla.php')

            }
            if (resp == 1) {

                alert("Error en alamcenamiento de registro..!")
            }
        })
    })


    $(".cancela").click(function() {
        $("#cuerpo").html('')
        $("#cuerpo").load('vistas/tabla.php')
    })

})();