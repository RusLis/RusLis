<?php

echo (' <table class="table">');
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

    getPlayerData();
echo('
    </tbody>
</table>');

// mysqli_close($db_connect);


function getPlayerData () {
    $manosql = "SELECT * FROM dalyviai WHERE runner='no' ORDER BY points DESC LIMIT 10";
    $result = mysqli_query(getConnectionPursuit(),$manosql);   //pirma prisijungiam, po to selectinam
    // print_r ($result);
    $i = 1;
    
    while($resultRow = mysqli_fetch_row($result)){; //Paverciam i masyva
          
    if(mysqli_num_rows($result) > 0){    // Tikrinam ar eilucius skaicius rezultate nera 0
  
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


?>