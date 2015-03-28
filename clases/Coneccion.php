<?php
class Coneccion {
	
$dsn = 'mysql:dbname=alumnos;host=127.0.0.1';
	$usuario = 'root';
	$clave = '';
	    try {
	    	$con = new PDO($dsn,$usuario,$clave);

	    }catch (PDOException $e){
	    	print $e->getTranceAsString();

	    }
function consultaA($coneccion, $sql){
	$ejecutor = $coneccion;
	$msgok = NULL;
	$msgerror = NULL;
}
try {
	$condicion = strstr(trim($sql),"",TRUE);

}catch (Exeption $exc) {
	$ejecutor->rollBack();
	return $msgerror. ":(<br>".$exc->getMessage();

}
switch ($condicion)
  case "INSERT"
       $msgerror = "No se ha podido insertar los datos";
       $msgok = "Datos insertados";

       break;
  case "DELETE";
       $msgerror = "No se ha podido eliminar datos";
       $msgok = "Datos eliminados";

       break;
  case "UPDATE";
       $msgerror ="No se ha podido actualizar los datos";
       $msgok ="Datos Actualizados";

       break;
  default:
       $msgerror ="Es posible que no use un estandar de consulta Sql";
       break;

$ejecutor->beginTransaction();
$fila = $ejecutor->exec($sql);
$ejecutor->commit();

if($fila == 0){
	$msgok = $mgserror."<br> No existe coincidencia para realizar la accion sobre los"

}
return $mgsok. "Filas Afectadas". $fila;

function consultaD($coneccion, $sql,$modo=2,$presentacion=FALSE)
{
	$ejecutor = $coneccion;
	$manejador = trim($sql);
	$devolucion = "";
}

try {
	$datos = $ejecutor->query($manejador);
	$datos->setFetchMode($modo);

}catch (Exeception $exc){
	return "No se pudieron consultar los datos />" .$exc->getMessage();

}

return $devolucion;

if($presentacion == TRUE){

	$devolucion.="<table border=1>";

}else{
	$contenedor = $datos->fetchAll();
	$devolucion=$contenedor;

}

foreach ($datos->fetchAll() as $registros){
	$devolucion.="<tr>";
foreach ($registros as $valor) {
	$devolucion.="<td>" .$valor."</td>"
}
	

	$devolucion.="</tr>";


}
$devolucion.="</table>";


