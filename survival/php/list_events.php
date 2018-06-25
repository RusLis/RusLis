<?php


function EventsTable(){
echo (' <table <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">');
echo ('
    <thead>
        <tr class="">
            <th class="mdl-data-table__cell--non-numeric">#</th>
            <th class="mdl-data-table__cell--non-numeric">Data</th>
            <th class="mdl-data-table__cell--non-numeric">Pradžia</th>
            <th class="mdl-data-table__cell--non-numeric">Pabaiga</th>
            <th class="mdl-data-table__cell--non-numeric">Dalyviai<th>
        </tr>
    </thead>
    <tbody>');

    getEventsDetails();
echo('
    </tbody>
</table>');

}

// mysqli_close($db_connect);

function getEventsDetails () {
    $manosql = "SELECT * FROM events ORDER BY id ASC";
    $rowsCount = "SELECT COUNT(*) FROM events WHERE ";
    $result = mysqli_query(getConnectionPursuit(),$manosql);   //pirma prisijungiam, po to selectinam
    // print_r ($result);
    $i = 1;
    
    while($resultRow = mysqli_fetch_row($result)){; //Paverciam i masyva
        // print_r($resultRow);
          
    if(mysqli_num_rows($result) > 0){    // Tikrinam ar eilucius skaicius rezultate nera 0
        
        $rowsCount = "SELECT * FROM registration WHERE eventid = $resultRow[0]";
        $rowCountResult = mysqli_query(getConnectionPursuit(),$rowsCount);
        $rowsNumber = mysqli_num_rows($rowCountResult);
        
  
        echo ('
        <tr>
            <td class="mdl-data-table__cell--non-numeric">'.$resultRow[0].'</td>
            <td class="mdl-data-table__cell--non-numeric">'.$resultRow[1].'</td>
            <td class="mdl-data-table__cell--non-numeric">'.substr($resultRow[2],11,5).'</td>
            <td class="mdl-data-table__cell--non-numeric">'.substr($resultRow[3],11,5).'</td>
            <td class="mdl-data-table__cell--non-numeric">'.$rowsNumber.'<td>
        </tr>');
        $i++;
        
    } else {
        echo "ERROR";
    }
}
}


?>