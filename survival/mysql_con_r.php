<?php

define('DB_NAME','survival');
define('DB_LOGIN','survival');
define('DB_PASS','UzpleisaSukukyti');
DEFINE('DB_HOST','localhost');
$db_connect = mysqli_connect(DB_HOST,DB_LOGIN,DB_PASS,DB_NAME);
mysqli_set_charset($db_connect,"utf8");

function getConnection (){
    global $db_connect; // pasiimam global reiksme 
    if($db_connect){
        // echo "Pavyko prisijungti </br>";
        return $db_connect;
    } else {
        echo "Connection failed </br>" . mysqli_connect_error() . "<br>";
        return NULL;
    }
}
echo (' <table class="table">');
// $players = getPlayerData(); // Darysim kad gryztu masyvas   
// print_r($players);
// $gydytojas1 = 2;

echo ('
    <thead>
        <tr class="">
            <th class="">#</th>
            <th>Vardas</th>
            <th>Pavardė</th>
            <th>Taškai</th>
        </tr>
    </thead>
    <tbody>');

    $players = getPlayerData();

function getPlayerData () {
    $manosql = "SELECT * FROM dalyviai WHERE runner='yes' ORDER BY points DESC";
    $result = mysqli_query(getConnection(),$manosql);   //pirma prisijungiam, po to selectinam
    // print_r ($result);
    $i = 1;
    
    while($resultRow = mysqli_fetch_row($result)){; //Paverciam i masyva
    
    if(mysqli_num_rows($result) > 0){    // Tikrinam ar eilucius skaicius rezultate nera 0
        // return $resultRow;
        
        echo ('
        <tr>
            <td>'.$i.'</td>
            <td>'.$resultRow[1].'</td>
            <td>'.$resultRow[2].'</td>
            <td>'.$resultRow[5].'</td>
        </tr>');
        $i++;
    } else {
        echo "ERROR";
    }

    
}



}

echo('
    </tbody>
</table>');
mysqli_close($db_connect);



?>