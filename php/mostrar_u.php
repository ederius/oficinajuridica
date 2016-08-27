

<table class="table" >
    <thead style="text-align: center">
    <tr>
        <td>
            Id
        </td>
        <td>
            Nombres
        </td>
        <td>
            Usuario
        </td>
        <td>
            E-Mail
        </td>
        <td>
            Contraseña
        </td>
        <td>
            Roll
        </td>
    </tr>
    </thead>

    <tbody>
    <?php
    require 'sql.php';
    $db=new Sql();
    $usus=$db->mostrarUsuarios();

    while($usuario =mysql_fetch_array($usus)){
        echo "<tr>
                                <td>
                                    ".$usuario['idusuario']."
                                </td>
                                <td>
                                     ".$usuario['nombre_completo']."
                                </td>
                                <td>
                                     ".$usuario['nombre_usuario']."
                                </td>
                                <td>
                                     ".$usuario['email']."
                                </td>
                                <td>
                                    ".$usuario['contrasena']."
                                </td>
                                <td>
                                   ".$usuario['roll']."
                                </td>
                                <td class='agregaru'>
                                    <a href='#'><span class='glyphicon glyphicon-plus' aria-hidden='true'></span></a>
                                </td>
                                <td class='editaru'>
                                    <a href='#'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a>
                                </td>
                                <td class='eliminaru'>
                                   <a href='#'> <span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a>
                                </td>




                               </tr>

                            ";
    }
    ?>
    </tbody>
</table>
