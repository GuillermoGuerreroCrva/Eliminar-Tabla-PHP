<?php
    $conn = pg_connect(""); 

    date_default_timezone_set('America/Mexico_City');

    $fechaActual= date("Y-m-d");
    $diasRestados = 9;
    $fechaA=date("Y-m-d",strtotime($fechaActual."-".$diasRestados." days"));

    $myDate= new DateTime($fechaA);
    $longDate = $myDate->format('_'.'Y_m_d');

    $tableName="tabla_control";
    $tableDay=$tableName.$longDate;

    $db_esquema="monterrey.";
    $tablaFinal=$db_esquema.$tableDay;
    $query = "DROP TABLE " . $tablaFinal;
     if (pg_query($conn, $query)) {
    } 
?>