<?php

$sdn = "mysql:host=localhost,dbname=BUCURA_UPDATED";
$dbusername = "root";
$dbpassword = "";

try {
    $pdo = new PDO( $sdn,$dbusername,$dbpassword );
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);}
 catch (PDOException $e) { 
    echo "Connection failed: " . $e->getMessage ();

   
}
