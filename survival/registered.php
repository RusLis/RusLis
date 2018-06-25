<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- PAGE settings -->
  <title>Survival Games / Išlikimo Žaidynės</title>
  <meta name="description" content="Pramoginiai išgyvenimo žaidimai kompanijos ir įmonėms.">
  <meta name="keywords" content="Pramogos įmonėms, pramogos, žaidimai, kariniai žaidimai">
  <!-- CSS dependencies -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
  <link rel="stylesheet" href="css/neon.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <!-- Script: Make my navbar transparent when the document is scrolled to top -->
</head>
<body>
<?php
        
    include_once('php/db.php');
    if (isset($_POST['InputEmail'])){
      $regEmail = ($_POST['InputEmail']);
      $regName = ($_POST['InputName']);
      $regLname = ($_POST['InputLname']);
      $regPhone = ($_POST['InputPhone']);
      $regDate = ($_POST['InputDate']);
      $regNotes = ($_POST['InputNotes']);
      echo ($regDate);
    };
   
    // print($regPhone);
    include_once ('php/user_registration.php');
    checkIfUserExist();
    // checkIfUserExist();

    
?>

<div class="d-flex section-fade-in-out py-5 align-items-center cover animate-in-down" style="background-image: url('img/orange.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-12 mt-5 align-items-center">
          <h1 class="display-4"><?php global $pranesimas; echo $pranesimas ?></h1>
          <p class="lead"></p>
          <a href="index.php" class="btn btn-lg mt-4 btn-primary shadowed">Grižti į puslapį</a>
          <!-- <i class="d-block fa fa-angle-down pt-5 fa-3x"></i> -->
        </div>
      </div>
    </div>
  </div>
</body>
</html>