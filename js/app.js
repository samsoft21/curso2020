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
                limpiar()

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

    $(".btn_editar").click(function(e) {
        var codigo = e.currentTarget.dataset.id
        $("#cuerpo").html('')
        $("#cuerpo").load("vistas/editar.php?id=" + codigo)
    })

    $(".guardarEditar").click(function() {
        var codi = $("#codi").val()
        var nombre = $("#nombre").val()
        var cant = $("#cant").val()
        var precio = $("#precio").val()
        $.ajax({
            type: "POST",
            url: "php/guardar_e.php",
            data: { codi: codi, producto: nombre, cantidad: cant, valor: precio },
            dataType: "Json",
        }).done(function(resp) {
            if (resp == 2) {
                alert("Registro Edito correctamente")
                $("#cuerpo").html('')
                $("#cuerpo").load('vistas/tabla.php')
            }
            if (resp == 1) {
                alert("Error en la edicion de registro..!")
            }
        })
    })





    $(".btn_elimininar").click(function(e) {
        var codi = e.currentTarget.dataset.id
        alert(codi)

    })


    $(".btn_imprimir").click(function(e) {
        var codi = e.currentTarget.dataset.id
        window.open("reporte/rep_cliente.php?id=" + codi, "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=50, left=60, width=1200, height=600")
    })

    $("#cant").keypress(function(e) {
        if (!soloNumeros(e)) {
            e.preventDefault();
        }

    })

    $("#nombre").keypress(function(e) {
        if (sololetras(e)) {
            e.preventDefault();
        }

    })
    $('#precio').on('input', function() {
        this.value = this.value.match(/^\d+\.?\d{0,2}/);
    });

    function soloNumeros(e) {
        var key = e.charCode;
        console.log(key);
        return key >= 48 && key <= 57;
    }

    function sololetras(e) {
        var key = e.charCode;
        console.log(key);
        return key >= 48 && key <= 57;
    }

    function limpiar() {
        $("#nombre").val('')
        $("#cant").val('')
        $("#precio").val('')
        $("#nombre").focus()
    }
})();