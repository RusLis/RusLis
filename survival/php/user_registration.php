<?php

// checkIfUserExist();
$pranesimas="";
$PlayerUID="";
$PlayerName="";
$PlayerSurname="";
$PlayerBirth="";
$ifRowExist="";

function checkIfUserExist () {

    global $regEmail;
    global $regName;
    global $regLname;
    global $regPhone;
    global $regNotes;
    global $pranesimas;
    global $regDate;
    $isUserRegistered ="";
    $ifRowExist ="";    
    
    // Find latest Event ID
    $latestEventID = "SELECT MAX(id) FROM events";
    $latestEventIDresult = mysqli_query(getConnectionPursuit(),$latestEventID);
    while($latestEventIDrow = mysqli_fetch_row($latestEventIDresult)){; //Paverciam
        $id = $latestEventIDrow[0];
    }  // End of Latest event ID

    
    //Check if EMAIL allready registered in event
    $RegisteredEmailCheck = "SELECT * FROM registration WHERE email = '$regEmail'";
    $RegisteredResultFilter = mysqli_query(getConnectionPursuit(),$RegisteredEmailCheck);
    
    while($RegisteredresultRow = mysqli_fetch_row($RegisteredResultFilter)){
        $isUserRegistered = $RegisteredresultRow;
    }
    print_r($isUserRegistered);
    if ($isUserRegistered){  // Check if user already registered
        
        $pranesimas =  "Šis vartotojas jau registravosi šiam renginiui";
        return $pranesimas;
    
    } else {
    
    $pranesimas = "Dėkojame kad registravotės";

        // Check if EMAIL exists in ALL_PLAYERS DB
    $EmailCheck = "SELECT * FROM dalyviai WHERE email = '$regEmail'";
    $resultFilter = mysqli_query(getConnectionPursuit(),$EmailCheck);
                
        while($resultRow = mysqli_fetch_row($resultFilter)){; //Paverciam i masyva
        $PlayerUID = $resultRow[0];
        $PlayerName = $resultRow[1];
        $PlayerSurname = $resultRow[2];
        $PlayerBirth = $resultRow[3];
        $ifRowExist = $resultRow;
        }

        // print_r($resultFilter);

            if ($ifRowExist){ //Check if user exist in DB but not registered
                ECHO "Egzistuoja vartotojas duombazei, bet pridejom i registracija";
                addExistPlayerToRegistration($PlayerName,$PlayerSurname,$PlayerBirth,$PlayerUID,$id);
                              
            } else {
                ECHO "Neegzistuoja duombazei";
                addPLayerToDB ($regName,$regLname,$regEmail,$regPhone);
                addNewPlayerToRegistration ($id);
                // AddPlayerToRegistration($PlayerName,$PlayerSurname,$PlayerBirth,$PlayerUID,$id);
         

            }
            return $pranesimas;
            } // END OF EMAIL IN REGISTERED EVENT
    
}
    
// checkIfUserExist();

function updateH1(){
    global $pranesimas;
    echo $pranesimas;
    };

function addExistPlayerToRegistration ($PlayerName,$PlayerSurname,$PlayerBirth,$PlayerUID,$id){
    global $regEmail;
    global $regName;
    global $regLname;
    global $regPhone;
    global $regNotes;
    $addRegistration = "INSERT INTO registration VALUES ('$PlayerName','$PlayerSurname','$PlayerBirth','$regPhone','$regEmail','$PlayerUID','','$id')";
    $addRegistrationOnly = mysqli_query(getConnectionPursuit(),$addRegistration);
};

function addPLayerToDB ($regName,$regLname,$regEmail,$regPhone){
    global $regEmail;
    global $regName;
    global $regLname;
    global $regPhone;
    global $regDate;
    $addPlayer = "INSERT INTO dalyviai VALUES ('','$regName','$regLname','$regDate','','','','$regEmail','$regPhone')";
    $addPlayerintoDB = mysqli_query(getConnectionPursuit(),$addPlayer);

};

function addNewPlayerToRegistration ($id){
    global $regEmail;
    global $regName;
    global $regLname;
    global $regPhone;
    global $regNotes;
    global $PlayerUID;

    $EmailCheck = "SELECT * FROM dalyviai WHERE email = '$regEmail'";
    $resultFilter = mysqli_query(getConnectionPursuit(),$EmailCheck);
                
        while($resultRow = mysqli_fetch_row($resultFilter)){; //Paverciam i masyva
        $PlayerUID = $resultRow[0];
        $PlayerName = $resultRow[1];
        $PlayerSurname = $resultRow[2];
        $PlayerBirth = $resultRow[3];
        $ifRowExist = $resultRow;
        }


    $addRegistration = "INSERT INTO registration VALUES ('$PlayerName','$PlayerSurname','$PlayerBirth','$regPhone','$regEmail','$PlayerUID','','$id')";
    $addRegistrationOnly = mysqli_query(getConnectionPursuit(),$addRegistration);
};

function editPlayerForm (){
    
    $UID = ($_GET['uid']);
    $UIDCheck = "SELECT * FROM dalyviai WHERE uid = '$UID'";
    $resultFilter = mysqli_query(getConnectionPursuit(),$UIDCheck);
                
        while($resultRow = mysqli_fetch_row($resultFilter)){; //Paverciam i masyva
            
            // print_r($resultRow);
    echo ('    
            <form action="player_edited.php" method="POST">
  <div class="form-group">
    <label for="formGroupExampleInput">Vardas</label>
    <input type="text" class="form-control" id="formGroupExampleInput" value = "'.$resultRow[1].'" name="name"  >
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Pavardė</label>
    <input type="text" class="form-control" value = "'.$resultRow[2].'" name="lname" >
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Gimimo data</label>
    <input type="text" class="form-control" value = "'.$resultRow[3].'" name="birth">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">GPS-ID</label>
    <input type="text" class="form-control" value = "'.$resultRow[4].'" name="gps" >
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Taškai</label>
    <input type="text" class="form-control" value = "'.$resultRow[5].'" name="points" >
  </div>
  <div class="form-group">
  <div class="form-group">
    <label for="formGroupExampleInput2">Email</label>
    <input type="text" class="form-control" value = "'.$resultRow[7].'" name="email">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Telefonas</label>
    <input type="text" class="form-control" value = "'.$resultRow[8].'"" name="phone">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">ID</label>
    <input type="text" class="form-control" value = "'.$resultRow[0].'" readonly name = "uid">
  </div>
  <div class="text-right">
    <a href="player_edited.php?uid='.$UID.'"><button class="btn btn-danger" type="submit">KEISTI</button></a>
    <a href="#" onclick="history.back();return false"><button class="btn btn-success">ATŠAUKTI</button></a>
    
</div>
</form>

');
        }}


function updatePlayerData (){
    $name = $_POST['name'];
    $lname = $_POST["lname"]; 
    $gimimo_data = $_POST["birth"]; 
    $gps_id =$_POST["gps"];
    $points =$_POST["points"]; 
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $uid = $_POST["uid"];

    // print $name;

    $playerUpdate = "UPDATE dalyviai SET vardas = '$name', lname = '$lname', gimimo_data = '$gimimo_data', gps_id = '$gps_id', points = '$points', email = '$email', phone = '$phone' WHERE uid = $uid";
    print ($playerUpdate);
    // print $playerUpdate;
    // print_r ($_POST);
                                        
    $resultFilter = mysqli_query(getConnectionPursuit(),$playerUpdate);
}





?>