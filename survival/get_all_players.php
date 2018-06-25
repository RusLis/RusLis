<?php
// define('DB_NAME','survival');
// define('DB_LOGIN','survival');
// define('DB_PASS','UzpleisaSukukyti');
// DEFINE('DB_HOST','localhost');
// $db_connect = mysqli_connect(DB_HOST,DB_LOGIN,DB_PASS,DB_NAME);
// mysqli_set_charset($db_connect,"utf8");

// function getConnectionPursuit (){
//     global $db_connect; // pasiimam global reiksme 
//     if($db_connect){
//         // echo "Pavyko prisijungti </br>";
//         return $db_connect;
//     } else {
//         echo "Connection failed </br>" . mysqli_connect_error() . "<br>";
//         return NULL;
//     }
// }

include_once('php/db.php');


function printAllplayers(){

echo ("

        <table class='mdl-data-table mdl-js-data-table mdl-shadow--2dp all-table'>");
echo ('

    <thead>
        <tr class="">
            <th class="">#</th>
            <th class="mdl-data-table__cell--non-numeric">Vardas</th>
            <th class="mdl-data-table__cell--non-numeric">Pavardė</th>
            <th class="mdl-data-table__cell--non-numeric">Gimimo data</th>
            <th class="mdl-data-table__cell--non-numeric">GPS_ID</th>
            <th class="mdl-data-table__cell--non-numeric">Points</th>
            <th class="mdl-data-table__cell--non-numeric">Runner</th>
            <th class="mdl-data-table__cell--non-numeric">Email</th>
            <th class="mdl-data-table__cell--non-numeric">Phone</th>
            <th class="mdl-data-table__cell--non-numeric">Redaguoti</th>
        </tr>
    </thead>
    <tbody>');

    getPlayersData();
echo('
    </tbody>
</table>
');

}




function getPlayersData () {
    $manosql = "SELECT uid,vardas,lname,gimimo_data,gps_id,points,runner,email,phone FROM dalyviai ORDER BY vardas ASC";
    $result = mysqli_query(getConnectionPursuit(),$manosql);   //pirma prisijungiam, po to selectinam
    // print_r ($result);
    $i = 1;
    
    while($resultRow = mysqli_fetch_row($result)){; //Paverciam i masyva
        // echo mb_detect_encoding($resultRow[2], "auto");
        // echo "<br>";
    
    if(mysqli_num_rows($result) > 0){    // Tikrinam ar eilucius skaicius rezultate nera 0
  

        echo ('
        <tr>
            <td>'.$i.'</td>
            <td class="mdl-data-table__cell--non-numeric">'.$resultRow[1].'</td>
            <td class="mdl-data-table__cell--non-numeric">'.$resultRow[2].'</td>
            <td class="mdl-data-table__cell--non-numeric">'.$resultRow[3].'</td>
            <td>'.$resultRow[4].'</td>
            <td class="mdl-data-table__cell--non-numeric">'.$resultRow[5].'</td>
            <td class="mdl-data-table__cell--non-numeric">'.$resultRow[6].'</td>
            <td class="mdl-data-table__cell--non-numeric">'.$resultRow[7].'</td>
            <td class="mdl-data-table__cell--non-numeric">'.$resultRow[8].'</td>
            <td class="mdl-data-table__cell--non-numeric"><a href="edit_player.php?uid='.$resultRow[0].'"><i class="material-icons md-24">edit</i></a>'.'</td></tr>');
        $i++;
        
    } else {
        echo "ERROR";
    }


    
}


}

// echo ("</div></div>");

?>