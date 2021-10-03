<?php
require_once 'conectarse.php';

$tipo = $_REQUEST['tipo']; //indica a que función debemos llamar
/**
* En la siguiente sentencia de acuerdo al parámetro tipo recibido se va a la función correspondiente
* Si tipo es guardar: se envia a la función para guardar encuesta
*/
switch ($tipo){
    case 'guardar':
        /**
        * Esta función guardarEncuesta se utiliza para guardar la encuesta
        * @param $nombre es el nombre que ingreso el encuestado
        * @param $genero es el género que ingreso el encuestado
        * @param $hobby es el hobby que ingreso el encuestado
        * @param $tiempo_mensual_dedicado es el género que ingreso el encuestado
        */
        guardarEncuesta($_REQUEST['nombre'],$_REQUEST['genero'],$_REQUEST['hobby'],$_REQUEST['tiempo_mensual_dedicado']);
        break;
    case 'grafico_nombre':
        /**
        * Esta función se utiliza para obtener los datos para el gráfico de la primer pregunta (nombre)
        */
        datosGraficoNombre();
        break;
    case 'grafico_genero':
        /**
        * Esta función se utiliza para obtener los datos para el gráfico de la segunda pregunta (genero)
        */
        datosGraficoGenero();
        break;
    case 'grafico_hobby':
        /**
        * Esta función se utiliza para obtener los datos para el gráfico de la tercer pregunta (hobby)
        */
        datosGraficoHobby();
        break;
    case 'grafico_tiempo_dedicado':
        /**
        * Esta función se utiliza para obtener los datos para el gráfico de la cuarta pregunta (tiempo dedicado)
        */
        datosGraficoTiempoDedicado();
        break;
    case 'tabla_resumen':
        /**
        * Esta función se utiliza para obtener los datos para la tabla resumen
        */
        tablaResumen();
        break;
}


function guardarEncuesta($nombre,$genero,$hobby,$tiempo_mensual_dedicado){
    $bd = new baseDatos();
    $bd->Conectarse();
    $fecha = date('Y-m-d H:i:s');
    $query = "INSERT INTO encuesta_resultados (fecha,nombre,genero,hobby,tiempo_mensual_dedicado) VALUES ('$fecha','$nombre',$genero,$hobby,'$tiempo_mensual_dedicado')";
    
    if ($bd->select($query)){
        $datos = array(
            'result' => 'ok',
        );
    } else {
        $datos = array(
            'result' => 'no'
        );
    }
    $bd->cerrar();
    header('Content-type: application/json');
    echo json_encode($datos);
}

function datosGraficoNombre(){
    $bd = new baseDatos();
    $bd->Conectarse();

    $bd->select("SELECT * FROM encuesta_resultados");
    $cantidad = $bd->numero_filas();
    $query = "SELECT nombre,COUNT(nombre) as cantidad FROM encuesta_resultados GROUP BY nombre ORDER BY nombre ASC";
    $datos = array();

    if ($bd->select($query)){
        while ($nombres = $bd->registro()){
           $datos[] = ['nombre' => $nombres['nombre'],'cantidad' => $nombres['cantidad'],'total'=> $cantidad];
        }
    }
    header('Content-Type: application/json');
    echo json_encode($datos);

}

function datosGraficoGenero(){
    $bd = new baseDatos();
    $bd->Conectarse();
    
    $query = "SELECT genero,COUNT(genero) as cantidad FROM encuesta_resultados GROUP BY genero ";
    $datos = array();
    if ($bd->select($query)){
        while ($generos = $bd->registro()){
           if ($generos['genero'] == 0){
               $id = 'Mujer';
               $color = "#C2D2E9";
           }else{
               $id = 'Hombre';
               $color = "#5E83BA";
           }
           $datos[] = ['id' => $id,'value' => $generos['cantidad'],'color'=>$color,'genero'=>$id];
        }
    }
    header('Content-Type: application/json');
    echo json_encode($datos);
}

function datosGraficoHobby(){
    $bd = new baseDatos();
    $bd->Conectarse();
    
    $query = "SELECT hobby,COUNT(hobby) as cantidad FROM encuesta_resultados GROUP BY hobby ";
    $datos = array();
    if ($bd->select($query)){
        while ($hobby = $bd->registro()){
           switch ($hobby['hobby']){
               case 0:
                $id = 'Ninguno';
                $color = "#394E79";
               break;
               case 1:
                $id = 'Deporte';
                $color = "#9A8BA5";
               break;
               case 2:
                $id = 'Musical';
                $color = "#E3C5D5";
               break;
               case 3:
                $id = 'Cocina';
                $color = "#3DA0E3";
               break;
               case 4:
                $id = 'Literario';
                $color = "#7D8495";
               break;
               case 5:
                $id = 'Manualidades';
                $color = "#33B579";
               break;
               case 6:
                $id = 'Juegos';
                $color = "#EEB98E";
               break;
               case 7:
                $id = 'Modelismo';
                $color = "#5E83BA";
               break;
               case 8:
                $id = 'Baile';
                $color = "#81C4E8";
               break;
               case 9:
                $id = 'Cine';
                $color = "#74A2E7";
               break;
               case 10:
                $id = 'Otro';
                $color = "#7E6BAD";
               break;
           }
           $datos[] = ['id' => $id,'value' => $hobby['cantidad'],'color'=>$color,'hobby'=>$id];
        }
    }
    header('Content-Type: application/json');
    echo json_encode($datos);
}

function datosGraficoTiempoDedicado(){
    $bd = new baseDatos();
    $bd->Conectarse();

    $bd->select("SELECT AVG(tiempo_mensual_dedicado) AS promedio FROM encuesta_resultados ");
    $prom = $bd->registro();
    $promedio = $prom['promedio'];
    $query = "SELECT tiempo_mensual_dedicado as tiempo FROM encuesta_resultados";
    $datos = array();

    if ($bd->select($query)){
        while ($tiempo_mensual = $bd->registro()){
           $datos[] = ['tiempo' => $tiempo_mensual['tiempo'],'promedio'=> $promedio];
        }
    }
    header('Content-Type: application/json');
    echo json_encode($datos);

}

function tablaResumen(){
    $bd = new baseDatos();
    $bd->Conectarse();

    $query = "SELECT * FROM encuesta_resultados";
    $datos = array();

    if ($bd->select($query)){
        while ($resumen = $bd->registro()){
            if ($resumen['genero'] == 0){
               $genero = 'Mujer';
           }else{
               $genero = 'Hombre';
           }
           switch ($resumen['hobby']){
               case 0:
                $hobby = 'Ninguno';
               break;
               case 1:
                $hobby = 'Deporte';
               break;
               case 2:
                $hobby = 'Musical';
               break;
               case 3:
                $hobby = 'Cocina';
               break;
               case 4:
                $hobby = 'Literario';
               break;
               case 5:
                $hobby = 'Manualidades';
               break;
               case 6:
                $hobby = 'Juegos';
               break;
               case 7:
                $hobby = 'Modelismo';
               break;
               case 8:
                $hobby = 'Baile';
               break;
               case 9:
                $hobby = 'Cine';
               break;
               case 10:
                $hobby = 'Otro';
               break;
           }
           $datos[] = ['nombre' => $resumen['nombre'],'genero'=> $genero,'hobby'=>$hobby,'tiempo_mensual_dedicado'=>$resumen['tiempo_mensual_dedicado'],'id'=>$resumen['id']];
        }
    }
    
    header('Content-Type: application/json');
    echo json_encode($datos);

}
