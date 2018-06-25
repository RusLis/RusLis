<?php

define('DB_NAME','survival');
define('DB_LOGIN','root');
define('DB_PASS','root');
DEFINE('DB_HOST','localhost');
$db_connect = mysqli_connect(DB_HOST,DB_LOGIN,DB_PASS,DB_NAME);
mysqli_set_charset($db_connect,"utf8");

function getConnectionPursuit (){
    global $db_connect; // pasiimam global reiksme 
    if($db_connect){
        // echo "Pavyko prisijungti </br>";
        return $db_connect;
    } else {
        echo "Connection failed </br>" . mysqli_connect_error() . "<br>";
        return NULL;
    }
}

?>