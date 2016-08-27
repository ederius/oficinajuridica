/**
 * Created by Eder on 30/04/2015.
 */
$(document).on("ready", function () {
    // <!--------------------------------------------------Mostrar Modal configurar usuarios---------------------------->
    $("#configuracion").live("click",function(){
        $('#usuarios').modal();
        $("#body-header").load("mostrar_u.php");

    });
// <!--------------------------------------------------Mostrar Modal configurar usuarios---------------------------->

    // <!--------------------------------------------------Mostrar Modal configurar usuarios---------------------------->
    $(".agregaru").live("click",function(){
        $('#myModal').modal();
        $("#body-header").load("mostrar_u.php");


    });
// <!--------------------------------------------------Mostrar Modal configurar usuarios---------------------------->


//<!----------------------------------------------  Cargar contenido en el Modal cuand dan click----------------------->


    $(".editaru").live("click", function(){


        $(this).parent("tr").each(function (index) {

            $(this).children("td").eq(0).each(function (index2)
            {
                switch (index) {
                    case 0:
                        id_usuario = $(this).text();


                        break;

                }

            });
        });


        Data='idusuario='+id_usuario;
        $.ajax({
            type: "POST",
            url: "editar_u.php",
            data: Data,

            success: function(data) {
                $('#ModalEditaru').modal();
                $('.BodyModalEditarUsuario').fadeIn(1000).html(data);

                }
        });


    });

//<!----------------------------------------------  Cargar contenido en el Modal cuand dan click----------------------->


//<!----------------------------------------------  GUARDAR EDITAR USUARIO----------------------->

    $("#registrarEditaru").live("click", function(){

        var Data1= $(".formularioEditarUsuario").serialize();
        $.ajax({

            type: "POST",
            url: "actualizar_usuario.php",
            data: Data1,

            success: function(data) {
                $('#resultado_editaru').fadeIn(1000).html(data).fadeOut(9000);
                $("#body-header").load("mostrar_u.php");

            }
        });
    });

//<!----------------------------------------------  GUARDAR EDITAR USUARIO----------------------->


//<!----------------------------------------------  Cargar contenido en el Modal cuand dan click----------------------->


    $(".eliminaru").live("click", function(){
        $(this).parent("tr").each(function (index) {
            $(this).children("td").eq(0).each(function (index2)
            {
                switch (index) {
                    case 0:
                        id_usuario = $(this).text();
                        $('#ModalEliminaru').modal();
                        break;
                }
            });
        });

        $("#seleccion_eliminaru").live("click", function(){
        Data='idusuario='+id_usuario;
        $.ajax({
            type: "POST",
            url: "eliminar_u.php",
            data: Data,

            success: function(data) {
                $('#ModalEliminaru').modal('hide');
                $("#body-header").load("mostrar_u.php");




            }
        });
    });
    });

//<!----------------------------------------------  Cargar contenido en el Modal cuand dan click----------------------->







});

