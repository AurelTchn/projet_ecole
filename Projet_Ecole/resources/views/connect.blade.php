<?php

$server = "localhost:5506";
$login = "root";
$pass = "";

try{
    $connexion = new PDO("mysql:host=$server;dbname=Webschool",$login,$pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
}
catch(PDOException $e){
    
    /* phpinfo(); */

    echo 'Erreur de connexion :'.$e->getMessage();
}



?>