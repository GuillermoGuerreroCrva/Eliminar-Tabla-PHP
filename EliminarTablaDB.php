<?php
    $conn = pg_connect(""); 

    date_default_timezone_set('America/Mexico_City');

    $fechaActual= date("Y-m-d");
    $diasRestados = 10;
    $fechaA=date("Y-m-d",strtotime($fechaActual."-".$diasRestados." days"));

    $myDate= new DateTime($fechaA);
    $longDate = $myDate->format('_'.'Y_m_d');

    $tableName="boleturavl";
    $tableDay=$tableName.$longDate;

    $db_esquema="monterrey.";
    $tablaFinal=$db_esquema.$tableDay;
    $query = "DROP TABLE " . $tablaFinal;
     if (pg_query($conn, $query)) {
    } 
?>