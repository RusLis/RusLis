<?php

define('DB_NAME','survival');
define('DB_LOGIN','survival');
define('DB_PASS','UzpleisaSukukyti');
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
    $manosql = "SELECT * FROM dalyviai WHERE runner='no' ORDER BY points DESC LIMIT 10";
    $result = mysqli_query(getConnectionPursuit(),$manosql);   //pirma prisijungiam, po to selectinam
    // print_r ($result);
    $i = 1;
    
    while($resultRow = mysqli_fetch_row($result)){; //Paverciam i masyva
        // echo mb_detect_encoding($resultRow[2], "auto");
        // echo "<br>";
    
    if(mysqli_num_rows($result) > 0){    // Tikrinam ar eilucius skaicius rezultate nera 0
        // return $resultRow;
        
    // $lastCharacter = mb_substr($resultRow[2],-1,1,"utf-8");
    // $pavardeLength = strlen($resultRow[2]);
    // for ($i=1;$i<($pavardeLength-1);$i++){
    //     $resultRow[2] = mb_convert_encoding($resultRow[2], "UTF-8", "auto");
    //     $resultRow[2] = (substr_replace($resultRow[2],"*",$i));
    //     // $resultRow[2] = $resultRow[2]. substr($resultRow,-1);
    // }   
    // $resultRow[2] = $resultRow[2].$lastCharacter;
    // echo mb_detect_encoding($resultRow[2], "auto");
    // // $resultRow[2] = mb_convert_encoding($resultRow[2], "UTF-8");
    
    

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