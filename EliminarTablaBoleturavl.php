<?php
    $conn = pg_connect("host=187.160.239.37 port=5432 dbname=feria user=postgres password=Eisa2022."); 

    date_default_timezone_set('America/Mexico_City');

    $fechaActual= date("Y-m-d");
    $diasRestados = 9;
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