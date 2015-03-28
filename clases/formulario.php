<?php include './clases/Coneccion.php';?>
<html>
    <head>
    	<meta charset="utf_8">
    	<title>Formulario de Captura de datos</title>
    </head>
    <body>
    	<form action="manejadorAlumno.php?accion=save" method="post">
    		<tr>
    			<td>
    				carnet:
    			</td>
    			<td>
    				<input type="text" name="carnet">
    			</td>
    		</tr>
    		<tr>
    			<td>
    				nombre:
    			</td>
    			<td>
    				<input type="text" name="nombre">
    			</td>
    		</tr>
    		<tr>
    		    <td>
    		        apellido:
    		    </td>
    		    <td>
    		        <input type="text" name="apellido">
    		    </td>
    		</tr>
    		<tr>
    		    <td>
    		       fecha de nacimiento:
    		    </td>
    		    <td>
    		        <input type="text" name="fecha de nacimiento">
    		    </td>
    		</tr>
    		<tr>
    		    <td>
    		       direccion:
    		    </td>
    		    <td>
    		        <input type="text" name="direccion">
    		    </td>  
    		</tr>
    		<tr>
    			<td>
    				seccion:
    		    </td>
    		    <td>
    		    	<select name='seccion'>
    		    		<option value=""></option>
                        <?php
                        $sql = "SELECT id,nombre FROM seccion;";
                        $datos = consultaD($con, $sql);
                        foreach ($datos as $value) {
                            print "<option value='";
                            print $value['id'];
                            print "'>";
                            print $value['nombre'];
                            print "</option>";
                        }
                ?>
                    </select>
    		    		
                </td>
            </tr>
    	</form>	
    </body>
</html>	