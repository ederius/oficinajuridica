$(document).on("ready", function() {

//  ######################## MOSTRAR CAMPOS DE RESgisTRO persona  #######################################333
    $(".nueva_persona").live("click", function () {
        $(".personas11").fadeOut(1000);
        $(".ingresar_persona").fadeIn(1000);
    });
    $(".viejas_persona").live("click", function () {
        $(".ingresar_persona").fadeOut(1000);
        $(".personas").load('selectpersonas_apelacion.php');
    });
//  ######################## MOSTRAR CAMPOS DE persona   #######################################333

    // <!-------------------------------------------------- Guardar nueva empresa ---------------------------->

// <!-------------------------------------------------- Guardar nueva persona ---------------------------->
    $(".guardar_persona").on("click",function(){
        var cedula_demandante  = $(".campo_cc").val();
        var nombre_demandante  = $(".campo_nombre").val();
        var apellido_demandante= $(".campo_apellido").val();

        datos='cedula='+cedula_demandante+'&nombres='+nombre_demandante+'&apellidos='+apellido_demandante;
        $.ajax({
            type: "POST",
            url: "registro_demandante.php",
            data: datos,

            success: function(data) {

                $('.resultado_consulta').fadeIn(1000).html(data).fadeOut(9000);
                $(".campo_cc").val("");
                $(".campo_nombre").val("");
                $(".campo_apellido").val("");




            }
        });

    });


// <!-------------------------------------------------- Guardar nueva persona ---------------------------->




//  ######################## MOSTRAR CAMPOS DE RESgisTRO cargo  #######################################333
    $(".nuevo_cargo").live("click", function () {
        $(".cargo1").fadeOut(1000);
        $(".ingresar_cargo").fadeIn(1000);
    });
    $(".viejos_cargos").live("click", function () {
        $(".ingresar_cargo").fadeOut(1000);
        $(".cargo").load('select_cargos.php');
    });
//  ######################## MOSTRAR CAMPOS DE cargo   #######################################333

// <!-------------------------------------------------- Guardar nuevo cargo ---------------------------->
    $(".guardar_cargo").on("click",function(){
        var cargo  = $(".campo_cargo").val();


        datos='cargo='+cargo;
        $.ajax({
            type: "POST",
            url: "registrar_cargo.php",
            data: datos,

            success: function(data) {

                $('.resultado_cargo').fadeIn(1000).html(data).fadeOut(9000);
                $(".campo_cargo").val("");

            }
        });

    });


// <!-------------------------------------------------- Guardar nuevo cargo ---------------------------->





//  ######################## MOSTRAR CAMPOS DE RESgisTRO remitente  #######################################333
    $(".nuevo_remitente").live("click", function () {
        $(".remitente1").fadeOut(1000);
        $(".ingresar_remitente").fadeIn(1000);
    });
    $(".viejos_remitente").live("click", function () {
        $(".ingresar_remitente").fadeOut(1000);
        $(".remitente").load('select_remitente.php');
    });
//  ######################## MOSTRAR CAMPOS DE remitente   #######################################333

    // <!-------------------------------------------------- Guardar nueva remitente ---------------------------->
// <!-------------------------------------------------- Guardar nuevo remitente ---------------------------->
    $(".guardar_remitente").on("click",function(){
        var cedula_demandante  = $(".campo_cc_remitente").val();
        var nombre_demandante  = $(".campo_nombre_remitente").val();
        var apellido_demandante= $(".campo_apellido_remitente").val();

        datos='cedula='+cedula_demandante+'&nombres='+nombre_demandante+'&apellidos='+apellido_demandante;
        $.ajax({
            type: "POST",
            url: "registro_demandante.php",
            data: datos,

            success: function(data) {

                $('.resultado_remitente').fadeIn(1000).html(data).fadeOut(9000);
                $(".campo_cc_remitente").val("");
                $(".campo_nombre_remitente").val("");
                $(".campo_apellido_remitente").val("");




            }
        });

    });


// <!-------------------------------------------------- Guardar nuevo remitente ---------------------------->

//  ######################## MOSTRAR CAMPOS DE RESgisTRO cargo  #######################################333
    $(".nuevo_cargo2").live("click", function () {
        $(".cargo21").fadeOut(1000);
        $(".ingresar_cargo2").fadeIn(1000);
    });
    $(".viejos_cargos2").live("click", function () {
        $(".ingresar_cargo2").fadeOut(1000);
        $(".cargo2").load('select_cargo2.php');
    });
//  ######################## MOSTRAR CAMPOS DE cargo   #######################################333

// <!-------------------------------------------------- Guardar nuevo cargo ---------------------------->
    $(".guardar_cargo2").on("click",function(){
        var cargo  = $(".campo_cargo2").val();


        datos='cargo='+cargo;
        $.ajax({
            type: "POST",
            url: "registrar_cargo.php",
            data: datos,

            success: function(data) {

                $('.resultado_cargo2').fadeIn(1000).html(data).fadeOut(9000);
                $(".campo_cargo2").val("");

            }
        });

    });


// <!-------------------------------------------------- Guardar nuevo cargo ---------------------------->


});

