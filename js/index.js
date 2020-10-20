(function() {

    $("#cuerpo").load('vistas/tabla.php')

    $(".btnnuevo").click(function() {

        $("#cuerpo").html('')
        $("#cuerpo").load('vistas/registro.php')


    })






})();

// e.preventDefault()

//  var f = $(this);
//         var formData = new FormData(document.getElementById("form_registro"));
//         formData.append("dato", "valor");

//  $.ajax({
//             type: "POST",
//             url: "php/guarda_reg.php",
//             data: formData,
//             dataType: "Json",