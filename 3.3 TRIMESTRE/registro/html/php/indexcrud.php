<?php
include_once ("../php/conexioncrud.php");
?>

<html>
<head>
        <title>JHOAN UNIFORMS</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../style/crudstyle.css">
</head>
<body>

   <div class="imagen">
    
    <a href="../html/principal1.html"><img src="../imagenes/Jhoan_Uniforms-removebg-preview.png"></a>
    <table>
            <div id="barrabuscar">
                <form method="POST">
               <input type="submit" value="Buscar" name="btnbuscar"><input type="text" name="txtbuscar" id="cajabuscar" placeholder="&#128270;Ingresar nombre de usuario">
</div>
              
</form>
</div>
<tr><th colspan="5"><h1>LISTADO USUARIOS</h1>
<th><a style="font-weight: normal; font-size: 14px;" onclick="abrirform()">Agregar</a></th></tr>

<tr>
<th>id</th>
<th>nombre</th>
<th>cedula</th>
<th>fecha</th>
<th>accion</th>
</tr>

<br></br>
<div></div>


<?php

if(isset($_POST['btnbuscar' ]))
{
$buscar = $_POST['txtbuscar'];
$queryusuarios = mysqli_query($conn, "SELECT id,nombre,cedula,fecha FROM devoluciones where nombre like '".$buscar."%'");

}
else
{
$queryusuarios = mysqli_query($conn, "SELECT * FROM devoluciones ORDER BY id asc");
} 
        $numerofila = 0;
        while($mostrar = mysqli_fetch_array($queryusuarios))
        {    $numerofila++;
                echo "<tr>";
                echo "<td>".$numerofila."</td>";
                echo "<td>".$mostrar['nombre']."</td>";
                echo "<td>".$mostrar['cedula']."</td>";
                echo "<td>".$mostrar['fecha']."</td>";
                
                echo "<td style='width:26%'><a href =\"editar.php?cod=$mostrar[id]\">Modificar</a> | <a href=\"eliminar.php?cod=$mostrar[id]\" onClick=\"return confirm('¿Estás seguro de eliminar a $mostrar[nombre]?')\">Eliminar</a></td>";           
            }
            ?>
                </table>
                 <script>
            function abrirform() {
              document.getElementById("formregistrar").style.display = "block";
              
            }
            
            function cancelarform() {
              document.getElementById("formregistrar").style.display = "none";
            }
            
            </script>
            <div class="caja_popup" id="formregistrar">
              <form action="../php/agregar.php" class="contenedor_popup" method="POST">
                    <table>
                    <tr><th colspan="2">Nuevo usuario</th></tr>
                        <tr> 
                            <td>Nombre</td>
                            <td><input type="text" name="txtnombre" required></td>
                        </tr>
                        <tr> 
                            <td>Cedula</td>
                            <td><input type="number" name="txtcedula" required></td>
                        </tr>
                        <tr> 
                            <td>fecha</td>
                            <td><input type="number" name="txtfecha" required></td>
                        </tr>
                        <tr> 	
                           <td colspan="2">
                               <button type="button" onclick="cancelarform()">Cancelar</button>
                               <input type="submit" name="btnregistrar" value="Registrar" onClick="javascript: return confirm('¿Deseas registrar a este usuario?');">
                        
                              
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            </body>
            </html>