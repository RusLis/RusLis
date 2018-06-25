<?php

//Including Database configuration file.
$i=1;
include "db.php";
if (isset($_POST['search'])) {
$Name = $_POST['search'];
$Query = "SELECT * FROM dalyviai WHERE vardas LIKE '%$Name%' || phone LIKE '%$Name%' LIMIT 5";
$ExecQuery = MySQLi_query($db_connect, $Query);

echo ("
        <table class='mdl-data-table mdl-js-data-table mdl-shadow--2dp'>");
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

    // getPlayersData();
// echo('
//     </tbody>
// </table>');


while ($Result = MySQLi_fetch_array($ExecQuery)) {
    // print_r($Result);

    echo ('
        <tr>
        

            <td>'.$i.'</td>
            <td class="mdl-data-table__cell--non-numeric">'.$Result['vardas'].'</td>
            <td class="mdl-data-table__cell--non-numeric">'.$Result['lname'].'</td>
            <td class="mdl-data-table__cell--non-numeric">'.$Result['gimimo_data'].'</td>
            <td>'.$Result['gps_id'].'</td>
            <td class="mdl-data-table__cell--non-numeric">'.$Result['points'].'</td>
            <td class="mdl-data-table__cell--non-numeric">'.$Result['runner'].'</td>
            <td class="mdl-data-table__cell--non-numeric">'.$Result['email'].'</td>
            <td class="mdl-data-table__cell--non-numeric">'.$Result['phone'].'</td>
            <td class="mdl-data-table__cell--non-numeric"><a href="edit_player.php?uid='.$Result['uid'].'"><i class="material-icons md-24">edit</i></a>'.'</td></tr>');
        $i++;

}



}
echo('
    </tbody>
</table>');


?>

</ul>















