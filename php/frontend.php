<?php
require_once('sesion.php');
require('sql.php');
 $db=new Sql();

?>


<!DOCTYPE html>
<html lang="en">

  <head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.gif" />
    <meta name="description" content="">
    <meta name="Eder Diaz Toro" content="Aplicativo">
    <link rel="icon" href="favicon.ico">

    <title>Distrito Juridico</title>

    <!-- Bootstrap core CSS -->
        <script src="../js/jquery-1.8.2.min.js" type="text/javascript"></script>
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <link href="../css/styles.css" rel="stylesheet" type="text/css">
<!---------------------DATAPICKER---------------------------------------------------------------->

<link rel="stylesheet" href="../css/jquery.ui.datepicker.css">
<link rel="stylesheet" href="../css/jquery-ui-1.9.2.custom.css">
  <script src="../js/jquery.ui.core.js"></script>
  <script src="../js/jquery.ui.widget.js"></script>
  <script src="../js/jquery.ui.datepicker.js"></script>
<!---------------------DATAPICKER---------------------------------------------------------------->



<!-------------------------------------------------- Archivos ---------------------------->
<script src="../js/vistas_previas.js"></script>
<script src="../js/registro_usuario.js"></script>
<script src="../js/registro_demanda.js"></script>
<script src="../js/detalles_demanda.js"></script>
<script src="../js/editar_demanda.js"></script>
<script src="../js/eliminar_demanda.js"></script>
<script src="../js/captura_comentario.js"></script>
<script src="../js/capturar_comentario_tutela.js"></script>
<script src="../js/contar_caracteres.js"></script>
<script src="../js/registro_tutela.js"></script>
<script src="../js/detalles_tutela.js"></script>
<script src="../js/editar_tutela.js"></script>
<script src="../js/eliminar_tutela.js"></script>
<script src="../js/registro_conciliacion.js"></script>
<script src="../js/detalles_conciliacion.js"></script>
<script src="../js/captura_comentario_conciliacion.js"></script>
<script src="../js/editar_conciliacion.js"></script>
<script src="../js/eliminar_conciliacion.js"></script>
<script src="../js/registro_derechos.js"></script>
<script src="../js/detalles_derechos.js"></script>
<script src="../js/captura_comentario_derecho.js"></script>
<script src="../js/editar_derechos.js"></script>
<script src="../js/eliminar_derecho.js"></script>
<script src="../js/busqueda.js"></script>
<script src="../js/registro_avances.js"></script>
<script src="../js/detalles_avances.js"></script>
<script src="../js/editar_avances.js"></script>
<script src="../js/captura_comentario_avances.js"></script>
<script src="../js/eliminar_avances.js"></script>
<script src="../js/registro_polizas.js"></script>
<script src="../js/detalles_polizas.js"></script>
<script src="../js/captura_comentario_polizas.js"></script>
<script src="../js/editar_polizas.js"></script>
<script src="../js/eliminar_polizas.js"></script>
<script src="../js/privilegios.js"></script>
<script src="../js/usuarios.js"></script>

  
<!-------------------------------------------------- Archivos ---------------------------->




<!-------------------------------------------------- Detener comportamiento de form ---------------------------->
<script type="text/javascript">
  
  function anular_form()
  {

    return false;
  }
</script>
<!-------------------------------------------------- Detener comportamiento de form ---------------------------->




<!---------------------------SCRIPT DATEPICKER------------------------------------------------>
      <script>
          $.datepicker.regional['es'] = {
              closeText: 'Cerrar',
              prevText: '<Ant',
              nextText: 'Sig>',
              currentText: 'Hoy',
              monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
              monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
              dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
              dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
              dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
              weekHeader: 'Sm',
              dateFormat: "dd/mm/yy",
              firstDay: 1,
              isRTL: false,
              showMonthAfterYear: false,
              yearSuffix: ''
          };
          $.datepicker.setDefaults($.datepicker.regional['es']);
          $(function () {
              $(".calendario").datepicker();
          });
      </script>
  <!----------------------------SCRIPT DATEPICKER---------------------------------------------->

    <!----------------------------     PRIVILEGIOS  ---------------------------------------------->

<script type="text/javascript">


var roll = "<?php echo $_SESSION['roll'] ?>" ;
</script>

    <!----------------------------     PRIVILEGIOS  ---------------------------------------------->






  </head>

  <body data-spy="scroll" data-target=".navbar-example">
    <!-- Split button -->
<div class="collapse navbar-collapse ">
      <ul class="nav navbar-nav nav-pills navbar-left">
        
       

        <li class="dropdown menudemandas "  >
         <a href="#" class="dropdown-toggle " data-toggle="dropdown" >Demandas<span class=" caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li id="verdemandas" class="verdemandas"><a  id="ver_demandas" href="#">Revisar Demanda</a></li>
            <li id="registrardemandas" class="registrardemandas"><a  id="click_demanda" href="#">Registrar Demanda</a></li>
           
            <li class="divider"></li>
        
          </ul>
        </li>



        <li class="dropdown menututelas" >
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tutelas  <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li class="vertutelas"> <a id="ver_tutelas" href="#">Revisar Tutela</a></li>
            <li class="registrartutelas"><a id="click_tutela" href="#">Registrar Tutela</a></li>
            
            <li class="divider"></li>

          </ul>
        </li>

          <li class="dropdown menuconciliaciones">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Conciliaci&oacute;nes<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li class="verconciliaciones"><a id="ver_conciliaciones" href="#">Revisar Conciliaci&oacute;n</a></li>
            <li class="registrarconciliaciones"><a id="click_conciliacion"  href="#">Registrar Conciliaci&oacute;n</a></li>
        
            <li class="divider"></li>
        
          </ul>
        </li>

        <li class="dropdown menuderechos">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">D. de Petici&oacute;n<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li class="verderechos"><a id="ver_derechos" href="#">Revisar Derecho de Petici&oacute;n</a></li>
            <li class="registrarderechos"><a id="click_derechos" href="#">Registrar Derecho de Petici&oacute;n</a></li>
            
            <li class="divider"></li>
          
          </ul>
          </li>


           <li class="dropdown menuavances">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Avances<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li class="veravances"><a id="ver_avances" href="#">Revisar Avances</a></li>
            <li class="registraravances"><a id="Click_avances" href="#">Registrar Avance</a></li>
            
            <li class="divider"></li>
             </ul>
          </li>


            <li class="dropdown menupolizas">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">P&oacute;lizas<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li class="verpolizas"><a id="ver_polizas" href="#">Revisar P&oacute;lizas</a></li>
            <li class="registrarpolizas"><a id="Click_polizas" href="#">Registrar P&oacute;lizas</a></li>
            
            <li class="divider"></li>
             </ul>
          </li>


              <li class="dropdown menuinformes">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Informes<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li class="verinfodemandas"><a id="" href="informe_demanda.php">Demandas</a></li>
            <li class="verinfotutelas"><a id="" href="informe_tutela.php">Tutelas</a></li>
             <li class="verinfoconciliaciones"><a id="" href="informe_conciliacion.php">Conciliaciones</a></li>
              <li class="verinfoderechos"><a id="" href="informe_derechos.php">Derechos de Petici&oacute;n</a></li>
            <li class="divider"></li>
          
           </ul>
          </li>


           <li class="dropdown menuplantillas">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Generador<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li class="verplanconciliaciones"><a id="" href="plantilla.php" target="_blank">Plantilla de Conciliaci&oacute;n</a></li>
            <li class="verplanresolucion"><a id="" href="plantilla_resolucion.php" target="_blank">Plantilla de Resoluci&oacute;n</a></li>
            <li class="verplanapelacion"><a id="" href="plantilla_apelacion.php" target="_blank">Plantilla de Apelaci&oacute;n</a></li>

              <li class="divider"></li>
          
           </ul>
          </li>
         




         </ul>


      <ul class="nav navbar-nav nav-pills navbar-right">
     <li class="dropdown" >
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"> </span> <?php echo " " .$_SESSION['usuario']. " " ?> <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            

              <li class="configuracion" ><a id="configuracion" href="#" style="text-align: left;">
                      <span class="glyphicon glyphicon-wrench"></span> Configuracion
                  </a>
              </li>

              <li class="divider"></li>

              <li><a  id="acercade" href="#" style="text-align: left;">
                      <span class="glyphicon glyphicon-search"></span> Acerca de
                  </a>
              </li>

              <li class="divider"></li>

              <li><a href="logout.php" style="text-align: left;">
                      <span class="glyphicon glyphicon-share"></span> Salir
                  </a>
              </li>


          </ul>
        </li>

      </ul>
     
</div>
     <!-- Split button -->
<!-- Split button -->
    <div class="container">

      <div class="header">



      <div class="jumbotron">
        <h2> <img src="../imagenes/uniguajira.gif" width="220" height="135">Departamento Jur&iacute;dico Uniguajira</h2>
        <p class="lead"></p>

      </div>

</div>


        <!---------------------------- MODAL  USUARIOs ------------------------------------------------------>
        <!-- Modal -->
        <div class="modal fade" id="usuarios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> Configuración de Usuario</h4>

                    </div>
                    <div id="body-header"></div>



                </div>
            </div>
        </div>


<!---------------------------- MODAL REGISTRO DE USUARIO ------------------------------------------------------>
     <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-floppy-disk"></span> Registro de Usuario</h4>
      </div><form class="form-horizontal" role="form" onsubmit="return anular_form()">
      <div class="modal-body">
        
  <div class="form-group">
     <div class="col-sm-10">
      <input type="text" class="form-control" id="nombreCompleto" placeholder="Nombre Completo" required>
    </div>
  </div>

  <div class="form-group">
     <div class="col-sm-10">
      <input type="text" class="form-control" id="nombre" placeholder="Usuario" required>
    </div>
  </div>

    <div class="form-group">
       <div class="col-sm-10">
      <input type="password" name="" class="form-control" id="contrasena" placeholder="Contrase&ntilde;a" required>
    </div>
  </div>
  
  <div class="form-group">
     <div class="col-sm-10">
      <input type="email" class="form-control" id="email" placeholder="Email" required>
    </div>
  </div>



        <select name="roll" id="roll" class="form-control" required placeholder="Seleccionar roll">
            <option  value=""  >Seleccionar Roll de Usuario</option>
            <option  value="Asesor Demandas" >Asesor de Demandas</option>
            <option  value="Asesor Tutelas" >Asesor de Tutelas</option>
            <option  value="Asesor Conciliaciones" >Asesor de Conciliaciones</option>
            <option  value="Asesor Derechos" >Asesor de Derechos de petici&oacute;n</option>
            <option value="Secretaria" >Secretaria</option>

        </select>
 



      </div>
      <div class="modal-footer">
      <div id="resultado"></div>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" id="registrar" class="btn btn-warning">Registrar</button>
      </div></form>
    </div>
  </div>
</div>
<!---------------------------- MODAL REGISTRO DE USUARIO ------------------------------------------------------>


        <!---------------------------- MODAL Editar DE USUARIO ------------------------------------------------------>
        <!-- Modal -->
        <div class="modal fade" id="ModalEditaru" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-pencil"></span> Editar Usuario</h4>
                    </div>
                    <form class="form-horizontal formularioEditarUsuario" role="form" onsubmit="return anular_form()">
                        <div class="modal-body BodyModalEditarUsuario">


                        </div>
                        </form>
                        <div class="modal-footer">
                            <div id="resultado_editaru"></div>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="submit" id="registrarEditaru" class="btn btn-warning">
                                <span class="glyphicon glyphicon-send" aria-hidden="true"></span> Actualizar</button>
                        </div></form>
                </div>
            </div>
        </div>
        <!---------------------------- MODAL EDITAR DE USUARIO ------------------------------------------------------>





        <!--------------------------------------------modal de alerta para eliminar USUARIO -------------------------------------------------------->

        <div class="modal fade" id="ModalEliminaru">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title"><span class="glyphicon glyphicon-warning-sign"></span> Advertencia</h4>
                    </div>
                    <div class="modal-body">
                        <p>Si acepta se borrara toda la informaci&oacute;n ferente a al Asesor seleccionado</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-warning" id="seleccion_eliminaru" >Eliminar</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!--------------------------------------------modal de alerta para eliminar USUARIO -------------------------------------------------------->
















        <!--------------------------------------------MOSTRAR -------------------------------------------------------->
    <div class="navbar-example">  
    <ul class="nav nav-tabs" role="tablist">
    
      <div class="row marketing" id="mostrar_previo" style="display:;">

        
  </div>
    
    </ul>
   </div>  



  <!--------------------------------------------MOSTRAR -------------------------------------------------------->












<!--------------------------------------------modal de alerta para eliminar demanda -------------------------------------------------------->

<div class="modal fade" id="Modal_Eliminar">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Advertencia</h4>
      </div>
      <div class="modal-body">
        <p>Si acepta se borrara toda la informaci&oacute;n ferente a la demanda seleccionada</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-warning" id="seleccion_eliminar" >Eliminar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--------------------------------------------modal de alerta para eliminar demanda -------------------------------------------------------->


<!--------------------------------------------MOSTRAR -------------------------------------------------------->

<!---------------------------------------------MODAL DETALLES DE DEMANDA --------------------------------------> 
<div class="modal fade bs-example-modal-lg" id="Modal_Detalle_demanda" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-inbox"> </span>  Detalles de Demandas</h4>
      </div><form class="form-horizontal" role="form" onsubmit="return anular_form()" >
      <div class="modal-body">
        
         <div id="body_detalles_demanda"></div>
      
                 

      </div>
     
      <div class="modal-footer">
      <div class="comentarios">
      <h4 class="titulo_comentario"> # COMENTARIOS </h4>
        <div class="contenido_comentarios">
               <div class="mostrar_comentarios" id="demanda_comentarios">


               </div>

               <div class="crear_comentarios">
               <h4 class="subtitulo_comentario"> Deja un comentario </h4>
              <img src="../imagenes/imagen4.gif" class="img-circle imagen_user2" width="65px" height="65px">

              <textarea  id="comentario" class="comentario" title="Comentario" maxlength="800" >
                </textarea>
           
              <div class="caracteres" class="caracteres">  </div>
                <button type="button" class="btn btn-primary publicar_comentario" id="publicar_comentario" ><span class="glyphicon glyphicon-inbox">  </span>  Publicar</button>
                </div>
        </div>


      </div>
       
      </div></form>
    </div>
  </div>
</div>


<!---------------------------------------------MODAL DETALLES DE DEMANDA ----------------------------------------> 


  


      



<!-------------------------- MODAL INSERTAR DEMANDA-------------------------------------------------->


             <!-- Modal -->
<div class="modal fade bs-example-modal-lg" id="myModalDemanda" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"> <span class="glyphicon glyphicon-pencil"> </span>  Registro de Nueva Demanda</h4>
      </div><form class="form-horizontal" role="form" onsubmit="return anular_form()" id="form_registrar_demanda">
      <div class="modal-body">
<div id="col-izquierda">
<h5 class="subtitulos">Primera Instancia </h5>
<br>
  <div class="form-group">
     <div class="col-sm-10">
      <input name="radicado" type="text" class="form-control" id="radicado" placeholder="Radicado" required>
    </div>
  </div>
  
  <div class="form-group">
     <div class="col-sm-10">
     <select name="accion" id="accion" class="form-control" required > 
            <option value="">Seleccione Acci&oacute;n</option>
            
            
            <?php
            $consulta=mysql_query(" SELECT * FROM dmo_accion ");
                        
           while($f=mysql_fetch_array($consulta))
            {
              echo "<option value=".$f['id_accion'].">".$f['nombre']."</option>";
          }
          ?>   
            </select>
      
    </div>
  </div>

  <div class="form-group">
   
    <div class="col-sm-10">
      <input type="text" name="notificacion" class="form-control calendario" id="notificacion" placeholder="notificaci&oacute;n" required>
    </div>
  </div>

 <div  id="demandantes">
   <div class="form-group" id="demandantes1">
     <div class="col-sm-10 select_demandante">
     <select name="demandante" id="demandante" class="form-control demandante" required > 
            <option value="">Seleccione Demandante</option>
            
       
                <?php
                  $consulta=mysql_query(" SELECT * FROM persona ");
                              
                 while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_persona'].">".$f['nombre']." ".$f['apellido']." </option>";
                     }
                ?>

           
             
            </select>

      
    </div>
    <button type="button" class="btn btn-warning btn-xs nuevo_demandante" id="nuevo_demandante"><span class="glyphicon glyphicon-plus"></span></button>
  </div>
   </div>

  <div class="form-group" id="ingresar_demandante" style="display:none">
     <div class="col-sm-10" >
     <input  id="cedula_demandante"type="text" class="form-control" placeholder="Cedula " required>
      <input  id="nombre_demandante"type="text" class="form-control" placeholder="Nombres " required>
      <input  id="apellido_demandante"type="text" class="form-control" placeholder="Apellidos " required>
      <input  id="direccion_demandante"type="text" class="form-control" placeholder="Direcci&oacute;n" required>
      <input  id="telefono_demandante"type="text" class="form-control" placeholder="Tel&eacute;fono" required>
      <input  id="fechanacimiento_demandante"type="text" class="form-control calendario" placeholder="Fecha de nacimiento" required>
      <input  id="email_demandante"type="text" class="form-control" placeholder="E-mail" required>
      <select  id="sexo_demandante" class="form-control" required>
      <option value=""> Sexo</option>
      <option value="Masculino"> Masculino</option>
      <option value="Femenino"> Femenino</option>
        
      </select>
    </div>
     <button type="button" class="btn btn-warning btn-xs viejos_demandante" id="viejos_demandante"><span class="glyphicon glyphicon-minus"></span></button>
     <button type="button" class="btn btn-warning btn-xs" id="guardar_demandante"><span class="glyphicon glyphicon-ok-circle"></span></button>
    <div id="resultado_consulta"></div>

  </div>

  
   <div class="form-group" >
     <div class="col-sm-10">
     <select name="demandado" id="demandado" class="form-control" placeholder="Demandado" required > 
            <option value="">Seleccione Demandado</option>
            
            
            <?php
            $consulta=mysql_query(" SELECT * FROM dmo_demandado ");
                        
           while($a=mysql_fetch_array($consulta))
              {
              echo "<option value=".$a['id_demandado'].">".$a['nombre']."</option>";
              }
          ?>   
            </select>

    </div>
   </div>


 <div class="form-group" >
     <div class="col-sm-10">
     <select name="juzgado" id="juzgado" class="form-control" placeholder="Juzgado" required > 
            <option value="">Seleccione Juzgado</option>
            
            
            <?php
            $consulta=mysql_query(" SELECT * FROM dmo_juzgado ");
                        
           while($f=mysql_fetch_array($consulta))
            {
              echo "<option value=".$f['id_juzgado'].">".$f['nombre']."</option>";
      }
          ?>   
            </select>

    </div>
   </div>


<div class="form-group">
   
    <div class="col-sm-10">
      <input type="text" name="audiencia" class="form-control calendario" id="audiencia" placeholder="Fecha de la Audiencia" required>
    </div>
  </div>


    <div class="form-group">
   
    <div class="col-sm-10">
    <div class="input-group">
      <div class="input-group-addon"><span class="glyphicon glyphicon-usd btn-warning btn-xs"></span></div>
      <input type="text" name="cuantia" class="form-control" id="cuantia" placeholder="Cuantia" required>
    </div>
     </div>
  </div>

 



</div>


<div id="col-derecha">
<br><br />

 <div class="form-group">
     <div class="col-sm-10">
      <input name="pretensiones"type="text" class="form-control" id="pretensiones" placeholder="Pretenciones" required>
    </div>
  </div>



<div class="form-group" >
     <div class="col-sm-10">
     <select name="asesor" id="asesor" class="form-control" placeholder="asesor" required > 
            <option value="">Seleccione Asesor</option>
            
            
            <?php
            $consulta=mysql_query(" SELECT * FROM administradores where roll='Asesor Demandas' ");
                        
           while($f=mysql_fetch_array($consulta))
            {
              echo "<option value=".$f['idusuario'].">".$f['nombre_usuario']."</option>";
      }
          ?>   
            </select>

    </div>
   </div>

  <div class="form-group">
   
    <div class="col-sm-10">
      <input type="text" name="contestacion" class="form-control calendario" id="contestacion" placeholder="Contestaci&oacute;n" required>
    </div>
  </div>



  <div class="form-group">
     <div class="col-sm-10">
      <input type="text" name="pruebas" class="form-control" id="pruebas" placeholder="Pruebas" required>
    </div>
  </div>
  
  <div class="form-group">
     <div class="col-sm-10">
      <input type="text" name="alegatos"class="form-control" id="alegatos" placeholder="Alegatos" required>
    </div>
  </div>


  <div class="form-group" >
     <div class="col-sm-10">
     <select name="proceso" id="proceso" class="form-control" placeholder="Proceso" required > 
            <option value="">Seleccione Proceso</option>
            
            
            <?php
            $consulta=mysql_query(" SELECT * FROM dmo_proceso  ");
                        
           while($f=mysql_fetch_array($consulta))
            {
              echo "<option value=".$f['id_proceso'].">".$f['nombre']."</option>";
      }
          ?>   
            </select>

    </div>
   </div>

   
 <div class="form-group">
   
    <div class="col-sm-10">
    <h5>Tamaño max. de Archivo 20 M</h5>
      <input type="file" name="file" class="form-control" id="file" placeholder="Seleccionar Archivo" required>
   </div>
  </div>

  <div class="form-group">
   
    <div class="col-sm-10">
    <textarea name="observaciones" class="form-control" id="observaciones" placeholder="Observaciones..."></textarea>
    </div>
  </div>
        
      </div>   

      </div>
      <div class="modal-footer">
      <div id="resultado_demanda"></div>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" id="guardar_demanda1" class="btn btn-warning">Registrar <spam class="glyphicon glyphicon-floppy-disk"></spam> </button>
      </div></form>
    </div>
  </div>
</div>

<!-------------------------- MODAL INSERTAR DEMANDA-------------------------------------------------->



<!---------------------------------------------MODAL EDITAR DE DEMANDA --------------------------------------> 
<div class="modal fade bs-example-modal-lg" id="Modal_editar_demanda" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-inbox"> </span>  Editar Demandas</h4>
      </div><form class="form-horizontal" role="form"  onsubmit="return anular_form()" id="form_editar">
      <div class="modal-body">
        
         <div id="body_editar_demanda">
                   



         </div>
      
      </div>
     
      <div class="modal-footer">
      <div id="resultado_editar"></div>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" id="guardar_edicion" class="btn btn-warning">Registrar</button>
      </div></form>
    </div>
  </div>
</div>


<!---------------------------------------------MODAL EDITAR DE DEMANDA - ------------------------------------> 






<!---------------------------- MODAL REGISTRO DE TUTELA ------------------------------------------------------>
     <!-- Modal -->
<div class="modal fade" id="myModal_registrar_tutela" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"> <span class="glyphicon glyphicon-pencil"> </span>Registro de Tutela</h4>
      </div><form class="form-horizontal" id="form_tutela" role="form" onsubmit="return anular_form()">
      <div class="modal-body">
        
  <div class="form-group">
     <div class="col-sm-10">
      <input type="text" name="radicado1"class="form-control" id="radicado1" placeholder="Radicado" required>
    </div>
  </div>

<div class="form-group" id="accionante">
     <div class="col-sm-10">
     <select name="accionante1" id="accionante1" class="form-control" required > 
            <option value="">Seleccione Accionante</option>
            
            <div id="select_demandate">
                <?php
                  $consulta=mysql_query(" SELECT * FROM persona ");
                              
                 while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_persona'].">".$f['nombre']." ".$f['apellido']." </option>";
                     }
                ?>

            </div>
             
            </select>

      
    </div>
    <button type="button" class="btn btn-warning btn-xs nuevo_tutela" ><span class="glyphicon glyphicon-plus"></span></button>
  </div>

  <div class="form-group" id="ingresar_tutela" style="display:none">
     <div class="col-sm-10" >
      <input  id="cedula_tutela"type="text" class="form-control" placeholder="Cedula " required>
      <input  id="nombre_tutela"type="text" class="form-control" placeholder="Nombres " required>
      <input  id="apellido_tutela"type="text" class="form-control" placeholder="Apellidos " required>
      <input  id="direccion_tutela"type="text" class="form-control" placeholder="Direcci&oacute;n" required>
      <input  id="telefono_tutela"type="text" class="form-control" placeholder="Tel&eacute;fono" required>
      <input  id="fechanacimiento_tutela"type="text" class="form-control calendario" placeholder="Fecha de nacimiento" required>
      <input  id="email_tutela"type="text" class="form-control" placeholder="E-mail" required>
      
      <select  id="sexo_tutela"  class="form-control" required>
      <option value=""> Sexo</option>
      <option value="Masculino"> Masculino</option>
      <option value="Femenino"> Femenino</option>
        
      </select>

    </div>
     <button type="button" class="btn btn-warning btn-xs " id="viejos_tutela"><span class="glyphicon glyphicon-minus"></span></button>
     <button type="button" class="btn btn-warning btn-xs " id="guardar_tutela"><span class="glyphicon glyphicon-ok-circle"></span></button>
    <div id="resultado_consulta_tutela"></div>

  </div>


  <div class="form-group" id="accionante">
     <div class="col-sm-10">
     <select name="accionado1" id="accionado1" class="form-control" required > 
            <option value="">Seleccione Accionado</option>
            
           
                <?php
                  $consulta=mysql_query(" SELECT * FROM convocado ");
                              
                 while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_convocado'].">".$f['nombre']." </option>";
                     }
                ?>

                         
            </select>

      
    </div>
  </div>


<div class="form-group" >
     <div class="col-sm-10">
     <select name="asesor1" id="asesor1" class="form-control" placeholder="asesor" required > 
            <option value="">Seleccione Asesor</option>
            
            
            <?php
            $consulta=mysql_query(" SELECT * FROM administradores where roll='Asesor Tutelas' ");
                        
           while($f=mysql_fetch_array($consulta))
            {
              echo "<option value=".$f['idusuario'].">".$f['nombre_usuario']."</option>";
      }
          ?>   
            </select>

    </div>
   </div>

   <div class="form-group">
     <div class="col-sm-10">
      <input type="text"name="pretensiones1" class="form-control" id="pretensiones1" placeholder="Pretensiones" required>
    </div>
  </div>

   <div class="form-group">
     <div class="col-sm-10">
      <input type="text"name="contestacion1" class="form-control calendario" id="contestacion1" placeholder="Contestaci&oacute;n" required>
    </div>
  </div>

   
 <div class="form-group">
   
    <div class="col-sm-10">
    <h5>Tamaño max. de Archivo 20 M</h5>
      <input type="file" name="file1" class="form-control" id="file1" placeholder="Seleccionar Archivo" required>
   </div>
  </div>

      </div>
      <div class="modal-footer">
      <div id="resultado_tutela1"></div>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" id="guardar_tutela1" class="btn btn-warning">Guardar</button>
      </div></form>
    </div>
  </div>
</div>
<!---------------------------- MODAL REGISTRO DE TUTELA ------------------------------------------------------>




<!---------------------------------------------MODAL DETALLES DE TUTELA --------------------------------------> 
<div class="modal fade bs-example-modal-lg" id="Modal_Detalle_Tutela" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-inbox"> </span>  Detalles de Tutela</h4>
      </div><form class="form-horizontal" role="form" onsubmit="return anular_form()" >
      <div class="modal-body">
        
         <div id="body_detalles_tutela"></div>
      
                 

      </div>
     
      <div class="modal-footer">  
      <div class="comentarios">
      <h4 class="titulo_comentario"> # COMENTARIOS </h4>
        <div class="contenido_comentarios">
               <div class="mostrar_comentarios" id="tutelas">


               </div>

               <div class="crear_comentarios">
               <h4 class="subtitulo_comentario"> Deja un comentario </h4>
              <img src="../imagenes/imagen4.gif" class="img-circle imagen_user2" width="65px" height="65px">

              <textarea  id="comentario_tutela" class="comentario"  title="Comentario" maxlength="800" >
                </textarea>
           
              <div id="caracteres" class="caracteres">  </div>
                <button type="button" class="btn btn-primary publicar_comentario" id="publicar_comentario_tutela" ><span class="glyphicon glyphicon-inbox">  </span>  Publicar</button>
                </div>
        </div>


      </div>
       
      </div></form>
    </div>
  </div>
</div>


<!---------------------------------------------MODAL DETALLES DE TUTELA ----------------------------------------> 






<!---------------------------------------------MODAL EDITAR DE TUTELA --------------------------------------> 
<div class="modal fade bs-example-modal-lg" id="Modal_editar_tutela" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-inbox"> </span>  Editar Tutelas</h4>
      </div><form class="form-horizontal" role="form"  onsubmit="return anular_form()" id="form_editar_tutela">
      <div class="modal-body">
        
         <div id="body_editar_tutela">
                   



         </div>
      
      </div>
     
      <div class="modal-footer">
      <div id="resultado_editar_tutela"></div>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" id="guardar_edicion_tutela" class="btn btn-warning">Registrar</button>
      </div></form>
    </div>
  </div>
</div>


<!---------------------------------------------MODAL EDITAR DE TUTELA - ------------------------------------> 


<!--------------------------------------------modal de alerta para eliminar Tutela -------------------------------------------------------->

<div class="modal fade" id="Modal_Eliminar_Tutela">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Advertencia</h4>
      </div>
      <div class="modal-body">
        <p>Si acepta se borrara toda la informaci&oacute;n ferente a la Tutela seleccionada</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-warning" id="eliminar_tutela2" >Eliminar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<!---------------------------------------------modal de alerta para eliminar Tutela - ------------------------------------> 






<!---------------------------- MODAL REGISTRO DE CONCILIACION ------------------------------------------------------>
     <!-- Modal -->
<div class="modal fade" id="Modal_registrar_conciliacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"> <span class="glyphicon glyphicon-pencil"> </span> Registro de Conciliaci&oacute;n</h4>
      </div><form class="form-horizontal" id="form_conciliacion" role="form" onsubmit="return anular_form()">
      <div class="modal-body">
     
   
  <div class="form-group">
     <div class="col-sm-10">
      <input type="text" name="radicado_c"class="form-control" id="radicado_c" placeholder="Radicado" required>
    </div>
  </div>


  <div class="form-group">
     <div class="col-sm-10">
      <input type="text" name="f_peticion"class="form-control calendario" id="f_peticion" placeholder="Fecha de Petici&oacute;n" required>
    </div>
  </div>

<div class="form-group" id="div_convocante">
     <div class="col-sm-10">
     <select name="convocante" id="convocante" class="form-control" required > 
            <option value="">Seleccione Convocante</option>
            
            <div id="select_convocante">
                <?php
                  $consulta=mysql_query(" SELECT * FROM persona ");
                              
                 while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_persona'].">".$f['nombre']." ".$f['apellido']." </option>";
                     }
                ?>

            </div>
             
            </select>

      
    </div>
    <button type="button" class="btn btn-warning btn-xs nuevo_convocante" ><span class="glyphicon glyphicon-plus"></span></button>
  </div>

  <div class="form-group" id="ingresar_convocante" style="display:none">
     <div class="col-sm-10" >
      <input  id="cedula_conciliacion"type="text" class="form-control" placeholder="Cedula " required>
      <input  id="nombre_conciliacion"type="text" class="form-control" placeholder="Nombres " required>
      <input  id="apellido_conciliacion"type="text" class="form-control" placeholder="Apellidos " required>
      <input  id="direccion_conciliacion"type="text" class="form-control" placeholder="Direcci&oacute;n" required>
      <input  id="telefono_conciliacion"type="text" class="form-control" placeholder="Tel&eacute;fono" required>
      <input  id="fechanacimiento_conciliacion"type="text" class="form-control calendario" placeholder="Fecha de nacimiento" required>
      <input  id="email_conciliacion"type="text" class="form-control" placeholder="E-mail" required>
      
      <select  id="sexo_conciliacion" class="form-control">
      <option value=""> Sexo</option>
      <option value="Masculino"> Masculino</option>
      <option value="Femenino"> Femenino</option>
        
      </select>

    </div>
     <button type="button" class="btn btn-warning btn-xs " id="viejos_conciliantes"><span class="glyphicon glyphicon-minus"></span></button>
     <button type="button" class="btn btn-warning btn-xs " id="guardar_convocante"><span class="glyphicon glyphicon-ok-circle"></span></button>
    <div id="resultado_consulta_conciliacion"></div>

  </div>


  <div class="form-group" id="convocado1">
     <div class="col-sm-10">
     <select name="convocado" id="convocado" class="form-control" required > 
            <option value="">Seleccione convocado</option>
            
           
                <?php
                  $consulta=mysql_query(" SELECT * FROM convocado ");
                              
                 while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_convocado'].">".$f['nombre']." </option>";
                     }
                ?>

                         
            </select>

      
    </div>
  </div>



<div class="form-group">
     <div class="col-sm-10">
      <input type="text"name="notificacion_c" class="form-control calendario" id="notificacion_c" placeholder="Notificaci&oacute;n" required>
    </div>
  </div>


     <div class="form-group">
   
    <div class="col-sm-10">
    <div class="input-group">
      <div class="input-group-addon"><span class="glyphicon glyphicon-usd btn-warning btn-xs"></span></div>
      <input type="text" name="cuantia_c" class="form-control" id="cuantia_c" placeholder="Cuantia" required>
    </div>
     </div>
  </div>


   <div class="form-group">
     <div class="col-sm-10">
      <input type="text"name="pretensiones_c" class="form-control" id="pretensiones_c" placeholder="Pretensiones" required>
    </div>
  </div>

  <div class="form-group">
     <div class="col-sm-10">
      <input type="text"name="f_comite" class="form-control calendario" id="f_comite" placeholder="Fecha del comite de conciliaci&oacute;n" required>
    </div>
  </div>

  <div class="form-group">
     <div class="col-sm-10">
      <input type="text"name="audiencia_c" class="form-control calendario" id="audiencia_c" placeholder="Audiencia" required>
    </div>
  </div>



   
 <div class="form-group">
   
    <div class="col-sm-10">
     <h5>Tamaño max. de Archivo 20 M</h5>
      <input type="file" name="file_c" class="form-control" id="file_C" placeholder="Seleccionar Archivo" required>
   </div>
  </div>

      </div>
      <div class="modal-footer">
      <div id="resultado_conciliacion"></div>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" id="guardar_conciliacion" class="btn btn-warning">Guardar</button>
      </div></form>
    </div>
  </div>
</div>
<!---------------------------- MODAL REGISTRO DE CONCILIACION ------------------------------------------------------>



<!---------------------------------------------MODAL DETALLES DE CONCILIACION --------------------------------------> 
<div class="modal fade bs-example-modal-lg" id="Modal_Detalle_conciliacion" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-inbox"> </span>  Detalles de Conciliaci&oacute;n</h4>
      </div><form class="form-horizontal" role="form" onsubmit="return anular_form()" >
      <div class="modal-body">
        
         <div id="body_detalles_conciliacion"></div>
      
                 

      </div>
     
      <div class="modal-footer">
      <div class="comentarios">
      <h4 class="titulo_comentario"> # COMENTARIOS </h4>
        <div class="contenido_comentarios">
               <div class="mostrar_comentarios" id="mostrar_comentario_conciliacion">


               </div>

               <div class="crear_comentarios">
               <h4 class="subtitulo_comentario"> Deja un comentario </h4>
              <img src="../imagenes/imagen4.gif" class="img-circle imagen_user2" width="65px" height="65px">

              <textarea  id="comentario_conciliacion" class="comentario" title="Comentario" maxlength="800" >
                </textarea>
           
              <div class="caracteres" class="caracteres">  </div>
                <button type="button" class="btn btn-primary publicar_comentario" id="publicar_comentario_conciliacion" ><span class="glyphicon glyphicon-inbox">  </span>  Publicar</button>
                </div>
        </div>


      </div>
       
      </div></form>
    </div>
  </div>
</div>


<!---------------------------------------------MODAL DETALLES DE CONCILIACION ----------------------------------------> 






<!---------------------------------------------MODAL EDITAR DE CONCILIACION --------------------------------------> 
<div class="modal fade bs-example-modal-lg" id="Modal_editar_conciliacion" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-inbox"> </span>  Editar Conciliaci&oacute;n</h4>
      </div><form class="form-horizontal" role="form"  onsubmit="return anular_form()" id="form_editar_conciliacion">
      <div class="modal-body">
        
         <div id="body_editar_conciliacion">
                   



         </div>
      
      </div>
     
      <div class="modal-footer">
      <div id="resultado_editar_conciliacion"></div>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" id="guardar_edicion_conciliacion" class="btn btn-warning">Registrar</button>
      </div></form>
    </div>
  </div>
</div>


<!---------------------------------------------MODAL EDITAR DE CONCILIACION - ------------------------------------> 




<!--------------------------------------------modal de alerta para eliminar CONCILIACION -------------------------------------------------------->

<div class="modal fade" id="Modal_Eliminar_conciliacion">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Advertencia</h4>
      </div>
      <div class="modal-body">
        <p>Si acepta se borrara toda la informaci&oacute;n ferente a la conciliacion seleccionada</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-warning" id="eliminar_conciliacion2" >Eliminar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<!---------------------------------------------modal de alerta para eliminar CONCILIACION - ------------------------------------> 







<!---------------------------------------------modal de alerta para eliminar Tutela - ------------------------------------> 






<!---------------------------- MODAL REGISTRO DE DERECHOS ------------------------------------------------------>
     <!-- Modal -->
<div class="modal fade" id="Modal_registrar_derecho" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">  <span class="glyphicon glyphicon-pencil"> </span> Registro de Derecho de Petici&oacute;n</h4>
      </div><form class="form-horizontal" id="form_derecho" role="form" onsubmit="return anular_form()">
      <div class="modal-body">
     
   
  <div class="form-group">
     <div class="col-sm-10">
      <input type="text" name="f_recibido"class="form-control calendario" id="f_recibido" placeholder="Fecha de Recibimiento" required>
    </div>
  </div>


 

<div class="form-group" id="div_peticionario">
     <div class="col-sm-10">
     <select name="peticionario" id="peticionario" class="form-control" required > 
            <option value="">Seleccione Nombre de Peticionario</option>
            
            <div id="select_peticionario">
                <?php
                  $consulta=mysql_query(" SELECT * FROM persona ");
                              
                 while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_persona'].">".$f['nombre']." ".$f['apellido']." </option>";
                     }
                ?>

            </div>
             
            </select>

      
    </div>
    <button type="button" class="btn btn-warning btn-xs nuevo_peticionario" ><span class="glyphicon glyphicon-plus"></span></button>
  </div>

  <div class="form-group" id="ingresar_peticionario" style="display:none">
     <div class="col-sm-10" >
      <input  id="nombre_derecho"type="text" class="form-control" placeholder="Nombres " required>
      <input  id="apellido_derecho"type="text" class="form-control" placeholder="Apellidos " required>
      <input  id="direccion_derecho"type="text" class="form-control" placeholder="Direcci&oacute;n" required>
      <input  id="telefono_derecho"type="text" class="form-control" placeholder="Tel&eacute;fono" required>
      <input  id="fechanacimiento_derecho"type="text" class="form-control calendario" placeholder="Fecha de nacimiento" required>
      <input  id="email_derecho"type="text" class="form-control" placeholder="E-mail" required>
      
      <select  id="sexo_derecho">
      <option value=""> Sexo</option>
      <option value="Masculino"> Masculino</option>
      <option value="Femenino"> Femenino</option>
        
      </select>

    </div>
     <button type="button" class="btn btn-warning btn-xs " id="viejos_peticionario"><span class="glyphicon glyphicon-minus"></span></button>
     <button type="button" class="btn btn-warning btn-xs " id="guardar_peticionario"><span class="glyphicon glyphicon-ok-circle"></span></button>
    <div id="resultado_consulta_peticionario"></div>

  </div>

 <div class="form-group">
     <div class="col-sm-10">
      <input type="text" name="apoderado"class="form-control" id="apoderado" placeholder="Apoderado" required>
    </div>
  </div>


<div class="form-group" >
     <div class="col-sm-10">
     <select name="asesor_d" id="asesor_d" class="form-control" placeholder="asesor" required > 
            <option value="">Seleccione Asesor</option>
            
            
            <?php
            $consulta=mysql_query(" SELECT * FROM administradores where roll='Asesor Derechos' ");
                        
           while($f=mysql_fetch_array($consulta))
            {
              echo "<option value=".$f['idusuario'].">".$f['nombre_usuario']."</option>";
      }
          ?>   
            </select>

    </div>
   </div>

<!---------------------------- CLASESSSSSSSSSSSSSSSSSSSSS--------------------------------------------------------->
<div class="clase">
    <div class="form-group clase1" >
     <div class="col-sm-10">
     <select name="clase" id="clase" class="form-control" required > 
            <option value="">Seleccione Clase</option>
            
           
                <?php
                  $consulta=mysql_query(" SELECT * FROM dmo_clase ");
                              
                 while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_clase'].">".$f['nombre']." </option>";
                     }
                ?>

                         
            </select>

      
    </div>
        <button type="button" class="btn btn-warning btn-xs nueva_clase" ><span class="glyphicon glyphicon-plus"></span></button>
    </div>
    </div>
          <div class="form-group" id="ingresar_clase" style="display:none">
              <div class="col-sm-10" >
                 <input  id="nombre_clase" type="text" class="form-control" placeholder="Nombre de la Clase " required>
               </div>
              <button type="button" class="btn btn-warning btn-xs " id="viejas_clases"><span class="glyphicon glyphicon-minus"></span></button>
              <button type="button" class="btn btn-warning btn-xs " id="guardar_clase"><span class="glyphicon glyphicon-ok-circle"></span></button>
              <div id="resultado_consulta_clase"></div>

          </div>

 <!---------------------------- CLASESSSSSSSSSSSSSSSSSSSSS--------------------------------------------------------->
          <!---------------------------- PETICION  --------------------------------------------------------->
<div class="peticion">
  <div class="form-group peticion1" >
     <div class="col-sm-10">
     <select name="peticion" id="peticion" class="form-control" required > 
            <option value="">Seleccione Petici&oacute;n</option>
            
           
                <?php
                  $consulta=mysql_query(" SELECT * FROM dmo_peticion ");
                              
                 while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_peticion'].">".$f['nombre']." </option>";
                     }
                ?>

                         
            </select>
  </div>
      <button type="button" class="btn btn-warning btn-xs nueva_peticion" ><span class="glyphicon glyphicon-plus"></span></button>
  </div>
      </div>
            <div class="form-group" id="ingresar_peticion" style="display:none">
                <div class="col-sm-10" >
                    <input  id="nombre_peticion" type="text" class="form-control" placeholder="Nombre de la Petici&oacute;n " required>
                </div>
                <button type="button" class="btn btn-warning btn-xs " id="viejas_peticiones"><span class="glyphicon glyphicon-minus"></span></button>
                <button type="button" class="btn btn-warning btn-xs " id="guardar_peticion"><span class="glyphicon glyphicon-ok-circle"></span></button>
                <div id="resultado_consulta_peticion"></div>

            </div>
            <!---------------------------- PETIICION--------------------------------------------------------->

   <div class="form-group" >
     <div class="col-sm-10">
     <select name="estado" id="estado" class="form-control" required > 
            <option value="">Seleccione Estado</option>
            
           
                <?php
                  $consulta=mysql_query(" SELECT * FROM dmo_estado ");
                              
                 while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_estado'].">".$f['nombre']." </option>";
                     }
                ?>

                         
            </select>

      
    </div>
  </div>




 



<div class="form-group">
     <div class="col-sm-10">
      <input type="text"name="vencimientotermino" class="form-control calendario" id="vencimientotermino" placeholder="Vencimiento de Termino" required>
    </div>
  </div>


  <div class="form-group">
     <div class="col-sm-10">
      <input type="text"name="respuesta" class="form-control calendario" id="respuesta" placeholder="Respuesta" required>
    </div>
  </div>

  


 <div class="form-group">
   
    <div class="col-sm-10">
     <h5>Tamaño max. de Archivo 20 M</h5>
      <input type="file" name="file_d" class="form-control" id="file_d" placeholder="Seleccionar Archivo" required>
   </div>
  </div>

      </div>
      <div class="modal-footer">
      <div id="resultado_derecho"></div>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" id="guardar_derecho" class="btn btn-warning">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!---------------------------- MODAL REGISTRO DE DERECHOS ------------------------------------------------------>



<!---------------------------------------------MODAL DETALLES DE derechos --------------------------------------> 
<div class="modal fade bs-example-modal-lg" id="Modal_Detalle_derechos" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-inbox"> </span>  Detalles Derechos de Petici&oacute;n</h4>
      </div><form class="form-horizontal" role="form" onsubmit="return anular_form()" >
      <div class="modal-body">
        
         <div id="body_detalles_derechos"></div>
      
                 

      </div>
     
      <div class="modal-footer">
      <div class="comentarios">
      <h4 class="titulo_comentario"> # COMENTARIOS </h4>
        <div class="contenido_comentarios">
               <div class="mostrar_comentarios" id="mostrar_derechos">


               </div>

               <div class="crear_comentarios">
               <h4 class="subtitulo_comentario"> Deja un comentario </h4>
              <img src="../imagenes/imagen4.gif" class="img-circle imagen_user2" width="65px" height="65px">

              <textarea  id="comentario_derechos" class="comentario" title="Comentario" maxlength="800" >
                </textarea>
           
              <div class="caracteres" class="caracteres">  </div>
                <button type="button" class="btn btn-primary publicar_comentario" id="publicar_comentario_derechos" ><span class="glyphicon glyphicon-inbox">  </span>  Publicar</button>
                </div>
        </div>


      </div>
       
      </div></form>
    </div>
  </div>
</div>


<!---------------------------------------------MODAL DETALLES DE derechos ----------------------------------------> 







<!---------------------------------------------MODAL EDITAR DE DERECHOS --------------------------------------> 
<div class="modal fade bs-example-modal-lg" id="Modal_editar_derechos" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-inbox"> </span>  Editar Derechos de Petici&oacute;n</h4>
      </div>
      <form class="form-horizontal" role="form"  onsubmit="return anular_form()" id="form_editar_derechos">
      <div class="modal-body">
        
         <div id="body_editar_derechos">
                   



         </div>
      
      </div>
     
      <div class="modal-footer">
      <div id="resultado_editar_derecho"></div>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" id="guardar_edicion_derechos" class="btn btn-warning">Registrar</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!---------------------------------------------MODAL EDITAR DE DERECHOS - ------------------------------------> 



<!--------------------------------------------modal de alerta para eliminar DERECHO -------------------------------------------------------->

<div class="modal fade" id="Modal_Eliminar_derecho">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Advertencia</h4>
      </div>
      <div class="modal-body">
        <p>Si acepta se borrara toda la informaci&oacute;n referente al Derecho de Petici&oacute;n seleccionado</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-warning" id="eliminar_derecho2" >Eliminar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<!---------------------------------------------modal de alerta para eliminar DERECHO - ------------------------------------> 




<!---------------------------- MODAL REGISTRO DE AVANCES ------------------------------------------------------>
     <!-- Modal -->
<div class="modal fade" id="Modal_registrar_avancestramite" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">  <span class="glyphicon glyphicon-pencil"> </span> Registro de Avances de Tramites</h4>
      </div><form class="form-horizontal" id="form_avanc" role="form" onsubmit="return anular_form()">
      <div class="modal-body">
     
   
  <div class="form-group">
     <div class="col-sm-10">
      <input type="text" name="fentrada_a"class="form-control calendario" id="fentrada_a" placeholder="Fecha de Entrada" required>
    </div>
  </div>


<div class="form-group" >    
  <div class="col-sm-10">      <select name="dependencia_a" id="dependencia_a" class="form-control" placeholder="Dependencia" required >    
            <option value="">Seleccione Dependencia</option>       
                      <?php
                      header("Content-Type: text/html;charset=utf-8");
                  $consulta=mysql_query(" SELECT * FROM dependencias ");
                              
                 while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_dependencias'].">".$f['nombre']." </option>";
                     }
                ?>

            
            
           
            </select>

    </div>
   </div>


<div class="form-group">   
   <div class="col-sm-10"> <input type="text"name="beneficiario_a" class="form-control" id="beneficiario_a" placeholder="Beneficiario" required>
        </div> 
          </div>



 
 <div class="form-group">
   
    <div class="col-sm-10">
     <h5>Tamaño max. de Archivo 20 M</h5>
      <input type="file" name="file_a" class="form-control" id="file_a" placeholder="Seleccionar Archivo" required>
   </div>
  </div>

      </div>
      <div class="modal-footer">
      <div id="resultado_avancestramite"></div>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" id="guardar_avancetramite" class="btn btn-warning">Guardar</button>
      </div></form>
    </div>
  </div>
</div>
<!---------------------------- MODAL REGISTRO DE AVANCES ------------------------------------------------------>




<!---------------------------------------------MODAL DETALLES DE AVANCES --------------------------------------> 
<div class="modal fade bs-example-modal-lg" id="Modal_Detalle_avances" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-inbox"> </span>  Detalles De Avances de Tramites</h4>
      </div><form class="form-horizontal" role="form" onsubmit="return anular_form()" >
      <div class="modal-body">
        
         <div id="body_detalles_avances"></div>
      
                 

      </div>
     
      <div class="modal-footer">
      <div class="comentarios">
      <h4 class="titulo_comentario"> # COMENTARIOS </h4>
        <div class="contenido_comentarios">
               <div class="mostrar_comentarios" id="mostrar_avances1">


               </div>

               <div class="crear_comentarios">
               <h4 class="subtitulo_comentario"> Deja un comentario </h4>
              <img src="../imagenes/imagen4.gif" class="img-circle imagen_user2" width="65px" height="65px">

              <textarea  id="comentario_avances" class="comentario" title="Comentario" maxlength="800" >
                </textarea>
           
              <div class="caracteres" class="caracteres">  </div>
                <button type="button" class="btn btn-primary publicar_comentario" id="publicar_comentario_avances" ><span class="glyphicon glyphicon-inbox">  </span>  Publicar</button>
                </div>
        </div>


      </div>
       
      </div></form>
    </div>
  </div>
</div>


<!---------------------------------------------MODAL DETALLES DE AVANCES ----------------------------------------> 




<!---------------------------------------------MODAL EDITAR ANACES TRAMITE --------------------------------------> 
<div class="modal fade bs-example-modal-lg" id="Modal_editar_avances" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-inbox"> </span>  Avances De Tramites</h4>
      </div><form class="form-horizontal" role="form"  onsubmit="return anular_form()" id="form_editar_avances">
      <div class="modal-body">
        
         <div id="body_editar_avances">
                   



         </div>
      
      </div>
     
      <div class="modal-footer">
      <div id="resultado_editar_avances"></div>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" id="guardar_edicion_avances" class="btn btn-warning">Registrar</button>
      </div></form>
    </div>
  </div>
</div>


<!---------------------------------------------MODAL EDITAR ANACES TRAMITE - ------------------------------------> 

<!--------------------------------------------modal de alerta para eliminar AVANCE -------------------------------------------------------->

<div class="modal fade" id="Modal_Eliminar_avances">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Advertencia</h4>
      </div>
      <div class="modal-body">
        <p>Si acepta se borrara toda la informaci&oacute;n referente a el avance del tramite seleccionado</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-warning" id="eliminar_avances" >Eliminar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<!---------------------------------------------modal de alerta para eliminar AVANCE - ------------------------------------> 








<!---------------------------- MODAL REGISTRO DE POLIZAS ------------------------------------------------------>



     <!-- Modal -->
<div class="modal fade" id="Modal_registrar_polizas" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">  <span class="glyphicon glyphicon-pencil"> </span> Registro de Pol&iacute;zas</h4>
      </div><form class="form-horizontal" id="form_polizas" role="form" onsubmit="return anular_form()">
      <div class="modal-body">
     
   <div id="col-izquierda">


  <div class="form-group">
     <div class="col-sm-10">
      <input type="text" name="id_poliza"class="form-control" id="id_poliza" placeholder="N° de Poliza" required>
    </div>
  </div>


  <div class="form-group">
     <div class="col-sm-10">
      <input type="text" name="f_expedicion"class="form-control calendario" id="f_expedicion" placeholder="Fecha de Expedici&oacute;n" required>
    </div>
  </div>

    <div class="form-group">
     <div class="col-sm-10">
      <input type="text" name="vigencia_desde"class="form-control calendario" id="vigencia_desde" placeholder="Vigencia desde" required>
    </div>
  </div>


    <div class="form-group">
     <div class="col-sm-10">
      <input type="text" name="vigencia_hasta"class="form-control calendario" id="vigencia_hasta" placeholder="Vigencia Hasta" required>
    </div>
  </div>


     <div class="form-group">
     <div class="col-sm-10">
      <input type="text" name="numero_contrato"class="form-control" id="numero_contrato" placeholder="N° de Contrato" required>
    </div>
  </div>



       <div class="form-group">
     <div class="col-sm-10">
      <input type="text" name="objeto_contrato"class="form-control" id="objeto_contrato" placeholder="Objeto del Contrato" required>
    </div>
  </div>



       <div class="form-group">
     <div class="col-sm-10">
      <input type="text" name="valor_asegurado"class="form-control" id="valor_asegurado" placeholder="Valor Asegurado" required>
    </div>
  </div>







</div>





   <div id="col-derecha">
   

 <div  id="entidades">
   <div class="form-group" id="entidad1">
     <div class="col-sm-10 select_entidad">
     <select name="entidad" id="entidad" class="form-control demandante" required > 
            <option value="">Seleccione Entidad</option>
            
       
                <?php
                  $consulta=mysql_query(" SELECT * FROM plz_entidadaseguradora ");
                              
                 while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_entidad'].">".$f['nombre']." </option>";
                     }
                ?>

           
             
            </select>

      
    </div>
    <button type="button" class="btn btn-warning btn-xs nueva_entidad" ><span class="glyphicon glyphicon-plus"></span></button>
  </div>
   </div>



  <div class="form-group" id="ingresar_entidad" style="display:none">
     <div class="col-sm-10" >
      <input  id="nombre_entidad"type="text" class="form-control" placeholder="Entidad Aseguradora" required>
     
    </div>
     <button type="button" class="btn btn-warning btn-xs viejas_entidades" ><span class="glyphicon glyphicon-minus"></span></button>
     <button type="button" class="btn btn-warning btn-xs" id="guardar_entidad"><span class="glyphicon glyphicon-ok-circle"></span></button>
    <div id="resultado_poliza"></div>

  </div>







 <div  id="riesgosasegurados">
   <div class="form-group" id="riesgos1">
     <div class="col-sm-10 select_riesgos">
     <select name="riesgos" id="riesgos" class="form-control demandante" required > 
            <option value="">Seleccione Riesgo Asegurado</option>
            
       
                <?php
                  $consulta=mysql_query(" SELECT * FROM plz_riesgoasegurado ");
                              
                 while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_riesgoasegurado'].">".$f['nombre']." </option>";
                     }
                ?>

           
             
            </select>

      
    </div>
    <button type="button" class="btn btn-warning btn-xs nuevo_riesgo" ><span class="glyphicon glyphicon-plus"></span></button>
  </div>
   </div>



  <div class="form-group" id="ingresar_riesgoasegurado" style="display:none">
     <div class="col-sm-10" >
      <input  id="riesgo" type="text" class="form-control" placeholder="Riesgo" required>
    
      <input  id="Fecha" type="text" class="form-control calendario" placeholder="Fecha" required>
      <input  id="URL" type="text" class="form-control" placeholder="URL" required>
     
    </div>
     <button type="button" class="btn btn-warning btn-xs viejos_riesgosasegurados" ><span class="glyphicon glyphicon-minus"></span></button>
     <button type="button" class="btn btn-warning btn-xs" id="guardar_riesgosasegurados"><span class="glyphicon glyphicon-ok-circle"></span></button>
    <div id="resultado_riesgosasegurados"></div>

  </div>






 <div  id="asegurados">
   <div class="form-group" id="asegurado1">
     <div class="col-sm-10 select_asegurados">
     <select name="asegurado" id="asegurado" class="form-control demandante" required > 
            <option value="">Seleccione Asegurado</option>
            
       
                <?php
                  $consulta=mysql_query(" SELECT * FROM plz_asegurado ");
                              
                 while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_asegurado'].">".$f['nombre']." </option>";
                     }
                ?>

           
             
            </select>

      
    </div>
    <button type="button" class="btn btn-warning btn-xs nuevo_asegurado" ><span class="glyphicon glyphicon-plus"></span></button>
  </div>
   </div>



  <div class="form-group" id="ingresar_asegurado" style="display:none">
     <div class="col-sm-10" >
      <input  id="asegurado_nuevo" type="text" class="form-control" placeholder="Asegurado" required>
    
    
    </div>
     <button type="button" class="btn btn-warning btn-xs viejos_asegurados" ><span class="glyphicon glyphicon-minus"></span></button>
     <button type="button" class="btn btn-warning btn-xs" id="guardar_asegurado"><span class="glyphicon glyphicon-ok-circle"></span></button>
    <div id="resultado_asegurado"></div>

  </div>







 <div  id="tomadores">
   <div class="form-group" id="tomador1">
     <div class="col-sm-10 select_tomador">
     <select name="tomador" id="tomador" class="form-control demandante" required > <option value="">Seleccione Tomador</option>
            
       
                <?php
                  $consulta=mysql_query(" SELECT * FROM plz_tomador ");
                              
                 while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_tomador'].">".$f['nombre']." </option>";
                     }
                ?>

           
             
            </select>

      
    </div>
    <button type="button" class="btn btn-warning btn-xs nuevo_tomador" ><span class="glyphicon glyphicon-plus"></span></button>
  </div>
   </div>



  <div class="form-group" id="ingresar_tomador" style="display:none">
     <div class="col-sm-10" >
      <input  id="tomadorNuevo" type="text" class="form-control" placeholder="Tomador" required>
        <select name="dependencia_t" id="dependencia_t" class="form-control demandante" required > 
            <option value="">Seleccione Dependencia</option>
            
       
                <?php
                  $consulta=mysql_query(" SELECT * FROM dependencias ");
                              
                 while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_dependencias'].">".$f['nombre']." </option>";
                     }
                ?>

           
             
            </select>
    
            <select name="cargo" id="cargo" class="form-control demandante" required > 
            <option value="">Seleccione Cargo</option>
            
       
                <?php
                  $consulta=mysql_query(" SELECT * FROM plz_cargos ");
                              
                 while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_cargos'].">".$f['nombre']." </option>";
                     }
                ?>

           
             
            </select>
    
    </div>
     <button type="button" class="btn btn-warning btn-xs viejos_tomadores" ><span class="glyphicon glyphicon-minus"></span></button>
     <button type="button" class="btn btn-warning btn-xs" id="guardar_tomador"><span class="glyphicon glyphicon-ok-circle"></span></button>
    <div id="resultado_tomador"></div>

  </div>












 <div  id="supervisores">
   <div class="form-group" id="supervisor1">
     <div class="col-sm-10 select_supervisor">
     <select name="supervisor" id="supervisor" class="form-control demandante" required > 
            <option value="">Seleccione Supervisor</option>
            
       
                <?php
                  $consulta=mysql_query(" SELECT * FROM plz_supervisor ");
                              
                 while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_supervisor'].">".$f['nombre']." </option>";
                     }
                ?>

           
             
            </select>

      
    </div>
    <button type="button" class="btn btn-warning btn-xs nuevo_supervisor" ><span class="glyphicon glyphicon-plus"></span></button>
  </div>
   </div>



  <div class="form-group" id="ingresar_supervisor" style="display:none">
     <div class="col-sm-10" >
      <input  id="supervisor_nuevo" type="text" class="form-control" placeholder="Supervisor" required>
        <select name="dependencias_s" id="dependencias_s" class="form-control demandante" required > 
            <option value="">Seleccione Dependencia</option>
            
       
                <?php
                  $consulta=mysql_query(" SELECT * FROM dependencias ");
                              
                 while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_dependencias'].">".$f['nombre']." </option>";
                     }
                ?>

           
             
            </select>
    
            <select name="cargo_s" id="cargo_s" class="form-control demandante" required > 
            <option value="">Seleccione Cargo</option>
            
       
                <?php
                  $consulta=mysql_query(" SELECT * FROM plz_cargos ");
                              
                 while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_cargos'].">".$f['nombre']." </option>";
                     }
                ?>

           
             
            </select>
    
    </div>
     <button type="button" class="btn btn-warning btn-xs viejos_supervisores" ><span class="glyphicon glyphicon-minus"></span></button>
     <button type="button" class="btn btn-warning btn-xs" id="guardar_supervisor"><span class="glyphicon glyphicon-ok-circle"></span></button>
    <div id="resultado_supervisor"></div>

  </div>








 <div class="form-group" >
     <div class="col-sm-10 ">
     <select name="tipo_amparo" id="tipo_amparo" class="form-control " required > 
            <option value="">Seleccione tipo de amparo</option>
            
       
                <?php
                  $consulta=mysql_query(" SELECT * FROM plz_tipodeamparo ");
                              
                 while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_tipodeamparo'].">".$f['nombre']." </option>";
                     }
                ?>

           
             
            </select>

      
    </div>
     </div>


 
 <div class="form-group">
   
    <div class="col-sm-10">
     <h5>Tamaño max. de Archivo 20 M</h5>
      <input type="file" name="file_po" class="form-control" id="file_po" placeholder="Seleccionar Archivo" required>
   </div>
  </div>





</div>



      </div>
      <div class="modal-footer">
      <div id="resultado_polizas"></div>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" id="guardar_polizas" class="btn btn-warning">Guardar</button>
      </div></form>
    </div>
  </div>
</div>
<!---------------------------- MODAL REGISTRO DE POLIZAS ------------------------------------------------------>






<!---------------------------------------------MODAL DETALLES DE POLIZAS --------------------------------------> 
<div class="modal fade bs-example-modal-lg" id="Modal_Detalle_polizas" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-inbox"> </span>  Detalles de Polizas</h4>
      </div><form class="form-horizontal" role="form" onsubmit="return anular_form()" >
      <div class="modal-body">
        
         <div id="body_detalles_polizas"></div>
      
                 

      </div>
     
      <div class="modal-footer">
      <div class="comentarios">
      <h4 class="titulo_comentario"> # COMENTARIOS </h4>
        <div class="contenido_comentarios">
               <div class="mostrar_comentarios" id="mostrar_polizas1">


               </div>

               <div class="crear_comentarios">
               <h4 class="subtitulo_comentario"> Deja un comentario </h4>
              <img src="../imagenes/imagen4.gif" class="img-circle imagen_user2" width="65px" height="65px">

              <textarea  id="comentarios_polizas" class="comentario" title="Comentario" maxlength="800" >
                </textarea>
           
              <div class="caracteres" class="caracteres">  </div>
                <button type="button" class="btn btn-primary publicar_comentario" id="publicar_comentario_polizas" ><span class="glyphicon glyphicon-inbox">  </span>  Publicar</button>
                </div>
        </div>


      </div>
       
      </div></form>
    </div>
  </div>
</div>


<!---------------------------------------------MODAL DETALLES DE POLIZAS ----------------------------------------> 




<!---------------------------------------------MODAL EDITAR POLIZAS --------------------------------------> 
<div class="modal fade bs-example-modal-lg" id="Modal_editar_polizas" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-inbox"> </span> Editar Polizas </h4>
      </div><form class="form-horizontal" role="form"  onsubmit="return anular_form()" id="form_editar_polizas">
      <div class="modal-body">
        
         <div id="body_editar_polizas">
                   



         </div>
      
      </div>
     
      <div class="modal-footer">
      <div id="resultado_editar_polizas"></div>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" id="guardar_edicion_polizas" class="btn btn-warning">Registrar</button>
      </div></form>
    </div>
  </div>
</div>



<!---------------------------------------------MODAL EDITAR POLIZAS --------------------------------------> 



<!--------------------------------------------modal de alerta para eliminar POLIZA -------------------------------------------------------->

<div class="modal fade" id="Modal_Eliminar_polizas">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Advertencia</h4>
      </div>
      <div class="modal-body">
        <p>Si acepta se borrara toda la informaci&oacute;n referente a la poliza seleccionada</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-warning" id="eliminar_polizas" >Eliminar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<!---------------------------------------------modal de alerta para eliminar POLIZA - ------------------------------------> 







   
      </div> <!-- /container -->

      <div class="footer">
             Km 5 Vía Maicao | PBX(5): 728 2729 | 018000955499  | webmaster@uniguajira.edu.co | Riohacha - La Guajira - Colombia | Copyright 2014

      </div>
         
  </body>





</html>
