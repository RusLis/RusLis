<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:image" content="http://ruslan.lt/kns_coding/img/orange.jpg" />
  <!-- PAGE settings -->
  <title>Survival Games / Išlikimo Žaidynės</title>
  <meta name="description" content="Pramoginiai išgyvenimo žaidimai kompanijos ir įmonėms.">
  <meta name="keywords" content="Pramogos įmonėms, pramogos, žaidimai, kariniai žaidimai">
  <!-- CSS dependencies -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <link rel="stylesheet" href="css/neon.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <!-- Script: Make my navbar transparent when the document is scrolled to top -->
  <script src="js/navbar-ontop.js"></script>
  <!-- Script: Animated entrance -->
  <script src="js/animate-in.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
  <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body class="text-center">
  <!-- Navbar -->
  <nav class="navbar-expand-md fixed-top navbar-dark bg-dark navbar navbar-ontop">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent"
        aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item mx-2">
            <a class="nav-link" href="#">Pradžia</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#ratings">Reitingai</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#schedule">Tvarkaraštis</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="layout.html">Layout</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="php/backend4.php">Crap ADMIN</a>
          </li>
        </ul>
        <a class="btn navbar-btn mx-2 btn-outline-primary" href="#register">Registracija</a>
      </div>
    </div>
  </nav>
  <!-- Cover -->
  <div class="d-flex section-fade-in-out py-5 align-items-center cover animate-in-down" style="background-image: url('img/orange.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-12 mt-5">
          <h1 class="display-4">Survival Games</h1>
          <p class="lead">Mesk iššukį sau pačiam</p>
          <a href="#register" class="btn btn-lg mt-4 btn-primary shadowed">Registruotis</a>
          <i class="d-block fa fa-angle-down pt-5 fa-3x"></i>
        </div>
      </div>
    </div>
  </div>
  <!-- Intro section -->
  <div class="py-5 section-fade-in-out" style="background-image: url('img/map.jpg');">
    <div class="container p-4 my-5">
      <div class="row">
        <div class="col-12">
          <h1 class="mb-3">Apie</h1>
          <p>Žaidynės pilnos įspudžių, adrenalino
            <br>
            <br>&nbsp;Kruopsčiai apgalvotas scenarijus, profesionali komanda panardins Jus į žaidimo atmosferą ir nepaleis iki
            paskutinės akimirkos. Įtampa, baimė, šuviai, sprogimai...tai tik maža dalis visų potyrių. Surinkit savo komandą
            ir pasiekite užsibrėžtą tikslą, arba žaiskite vienas ir išlikite nepastebimas viso žaidimo metų. Nesvarbu kuriuo
            keliu pasuksite, geros emocijos ir įspudžiai garantuoti</p>
          <a href="#schedule" class="btn btn-outline-primary btn-lg m-2">
            <strong>Datos</strong>
          </a>
          <a class="btn btn-primary btn-lg m-2 shadowed" href="#register">Registracija</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Ratings -->
  <div class="py-5 parallax" id="ratings">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1>Reitingų lentelė</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a href="" class="active nav-link" data-toggle="tab" data-target="#tabone">Persekiotojai</a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link" data-toggle="tab" data-target="#tabtwo">Bėgikai</a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link" data-toggle="tab" data-target="#tabthree">Bendras</a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade show active" id="tabone" role="tabpanel">
              <?php 
                include_once ('php/db.php');
                // include_once ('php/list_runners.php');
                include_once ('php/list_escapers.php');
                ?>

            </div>
            <div class="tab-pane fade" id="tabtwo" role="tabpanel">
              <?php
                // include_once ('php/db.php');
                include_once ('php/list_runners.php');
                
            ?>
              <p></p>
            </div>
            <div class="tab-pane fade" id="tabthree" role="tabpanel">
              <?php 
                // include_once ('php/db.php');
                // include_once ('php/list_runners.php');
                include_once ('php/all_players.php');
                ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal -->
  <div class="modal" id="exampleModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Registracija</h5>
          <button type="button" class="close" data-dismiss="modal">
            <span>×</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <!-- <label for="InputName">Vardas</label> -->
              <input type="text" class="form-control my-3" id="name" placeholder="Vardas" required oninvalid="this.setCustomValidity('Prašome įvesti vardą')">
              <input type="text" class="form-control my-3" id="lname" placeholder="Pavardė">
              <input type="text" class="form-control my-3" id="number" placeholder="Tel. numeris"> </div>
            <div class="form-group">
              <!-- <label for="InputEmail1">El.pašto adresas</label> -->
              <input type="email" class="form-control my-3" id="InputEmail1" placeholder="El.pašto adresas" required="required">
              <!-- <input type="checkbox" class="form-control" id="InputEmail1" placeholder="El.pašto adresas" required="required">  -->
            </div>
            <div class="form-group">
              <label for="Textarea">Ar reikės įrangos? / Pastabos</label>
              <textarea class="form-control" id="Textarea" rows="3" placeholder=""></textarea>
            </div>
            <button type="submit" class="btn btn-info my-4">Registruotis</button>

          </form>

        </div>
        <!-- <div class="modal-footer">
        <button type="submit" class="btn btn-info">Registruotis</button>
        </div> -->
      </div>
    </div>
  </div>


  <!-- Modal -->
  <div class="modal" id="registrationModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Registracija</h5>
          <button type="button" class="close" data-dismiss="modal">
            <span>×</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- <?php
          include_once('php/reg_confirm.php')
          ?> -->
        </div>
        <!-- <div class="modal-footer">
        <button type="submit" class="btn btn-info">Registruotis</button>
        </div> -->
      </div>
    </div>
  </div>




  <div class="py-5" id="gallery">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="mb-3">Galerija</h1>
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="img/carousel/DSC_0510.jpg" alt="Pasiruošimas">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/carousel/DSC_0634.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/carousel/DSC_0640.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
      <div class="row"></div>
    </div>
  </div>
  <!-- Schedule -->
  <div class="py-5 section-fade-in-out" id="schedule" style="background-image: url('img/carousel/DSC_0666.JPG');">
    <div class="container my-5">
      <div class="row">
        <div class="col-12">
          <h1>Tvarkaraštis</h1>
        </div>
      </div>
      <div class="row text-left">
        <div class="p-4 col-lg-6 col-md-6">
          <div class="card shadowed">
            <div class="card-block text-center card-primary p-2">
              <h2></h2>
              <p class="lead">Šeštadienis</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;10:00-11:00 –&nbsp;
                <b>Dalyvių atvykimas</b>
              </li>
              <li class="list-group-item">
                <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;11:00-12:00 –&nbsp;
                <b>Dienos plano aptarimas, pažintis su instruktoriais</b>
              </li>
              <li class="list-group-item">
                <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;12:00-13:00 –&nbsp;
                <b>Saugumo instruktažas, ekipuoties apžvalga</b>
              </li>
              <li class="list-group-item bg-secondary">
                <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;13:00-13:30 –&nbsp;
                <b>Pertrauka</b>
              </li>
              <li class="list-group-item">
                <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;13:30-16:00 –&nbsp;
                <b>Orientaciniai pratimai, teorija, praktika</b>
              </li>
              <li class="list-group-item">
                <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;16:00-18:00 –&nbsp;
                <b>Išgyvenimo mokymai, vakaronė</b>
              </li>
            </ul>
          </div>
        </div>
        <div class="p-4 col-lg-6 col-md-6">
          <div class="card shadowed">
            <div class="card-block text-center card-primary p-2">
              <h2></h2>
              <p class="lead">Sekmadienis</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;09:30-10:30 –&nbsp;
                <b>Pusryčiai</b>
              </li>
              <li class="list-group-item">
                <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;11:00-12:00 –&nbsp;
                <b>Dalyvių rikiuotė, užduočių delegavimas</b>
              </li>
              <li class="list-group-item">
                <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;12:00-14:00 –&nbsp;
                <b>Žaidimo pradžia</b>
              </li>
              <li class="list-group-item bg-secondary">
                <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;14:30-15:00 –&nbsp;
                <b class="">Pertrauka</b>
              </li>
              <li class="list-group-item">
                <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;15:00-17:00 –&nbsp;
                <b>Žaidimo antra dalis</b>
              </li>
              <li class="list-group-item">
                <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;17:00-18:00 –&nbsp;
                <b>Pabaiga, aptarimai, kėlionė namo</b>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- Partners logos -->
  <div class="py-5 section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="mb-4">Partneriai</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 col-6">
          <img class="center-block img-fluid d-block" src="img/logo_1.png"> </div>
        <div class="col-md-3 col-6">
          <img class="center-block img-fluid d-block" src="img/logo_4.png"> </div>
        <div class="col-md-3 col-6">
          <img class="center-block img-fluid d-block" src="img/logo_3.png"> </div>
        <div class="col-md-3 col-6">
          <img class="center-block img-fluid d-block" src="img/logo_2.png"> </div>
      </div>
    </div>
  </div>
  <!-- Call to action -->
  <div class="py-5 section section-fade-in-out">
    <div class="container">
      <div class="row">
        <div class="col-md-8 text-left">
          <h1 class="mb-3">Registracija</h1>
          <p>Registruojantis iš anksto busite priorito saraše. Dalyvavimo kaina bus paskelbta vėliau.&nbsp;
            <br>Taipogi užsiregistrave iš anksto dalyviai gaus eksliuzivinius pasiūlymus. </p>
        </div>
        <div class="col-md-4 align-self-center">
          <a href="#" class="btn btn-lg btn-dark shadowed">Registruotis</a>
        </div>
      </div>
    </div>
  </div>


  <div class="py-5 bg-primary text-white" id="register">
    <div class="container">
      <div class="row">
        <div class="col-12">
        <h1 class="text-center">Registracija</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 d-md-none d-lg-block">
          <img class="d-block img-fluid my-3" src="https://maps.googleapis.com/maps/api/staticmap?key=AIzaSyAWE85IS8maXpqS68YD7qFJP6heLz14i3w&amp;markers=Alexander+platz&amp;center=55.030872,23.776170&amp;zoom=13&amp;size=640x500&amp;sensor=false"> </div>
        <div class="col-lg-6 col-md-12 mt-3">
          <!-- <h1>Registracija</h1> -->
          <!-- <p>Užpildykite žemiau esančius laukus</p> -->
          <form action="registered.php" method="POST">
            <div class="form-group">
              <!-- <label>Vardas</label> -->
              <input name="InputName" type="text" class="form-control mb-2" id="InputName" placeholder="Vardas" required>
            </div>
            <div class="form-group">
              <input name="InputLname" type="text" class="form-control mb-2" id="InputLname" placeholder="Pavardė" >
            </div>
            <div class="form-group">
              <script>
              $( function() {
                $( "#datepicker" ).datepicker({
                  dateFormat: "yy-mm-dd",
                  changeMonth: true,
                  changeYear: true
                });
              } );
              </script>
              <input type="text" class="form-control mb-2" name="InputDate" placeholder="Gimimo data" id="datepicker">
            </div>
            <!-- <div id="datepicker"></div>
              <script>$( "#datepicker" ).datepicker();</script> -->
            <div class="form-group">
              <!-- <label>Tel.numeris</label> -->
              <input type="text" class="form-control mb-2" name="InputPhone" placeholder="Telefonas" pattern="[8][6]\d{7}" required >
            </div>
            <div class="form-group">
              <!-- <label for="InputEmail1">El.pašto adresas</label> -->
              <input type="email" class="form-control mb-2" name="InputEmail" id="InputEmail1" pattern="\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}"placeholder="El.pašto adresas" required>
            </div>
            <div class="form-group">
              <label for="Textarea">Pastebėjimai / Užklausa dėl įrangos nuomos</label>
              <textarea class="form-control" id="Textarea" name="InputNotes" rows="3" placeholder=""></textarea>
            </div>
            <!-- <div class="form-group">
              <label for="Textarea">Gimimo data</label>
              <textarea class="form-control UserDate" id="date" name="InputDate" rows="3" placeholder="Gimimo data"></textarea>
            </div> -->

            


            <button type="submit" class="btn btn-secondary mt-2">Patvirtinti</button>
          </form>
          <!-- <button type="submit" class="btn btn-secondary mt-4 data-toggle="modal" data-target="#registrationModal">Patvirtinti</button> -->
          
        </div>
      </div>
    </div>
  </div>

  <!-- <form action="php/reg_confirm.php" method="get">
    Name:  <input type="text" name="username" /><br />
    Email: <input type="text" name="email" /><br />
    <input type="submit" name="submit" value="Submit me!" />
</form> -->

  <!-- Footer -->
  <footer class="text-md-left text-center p-4">
    <div class="container">
      <div class="row">
        <div class="my-3 col-lg-4 col-md-6">
          <h3>Išlikimo diena</h3>
          <p class="text-muted">Liepos 1, 2018</p>
          <p class="my-3">
            <a href="https://goo.gl/maps/ayn28vkB5F92" target="blank" class="text-muted">MB "Svaigi Akimirka"
              <br>Kaunas, Naujatrobių kaimas</a>
          </p>
          <a class="btn btn-lg btn-primary shadowed" data-toggle="modal" data-target="#exampleModal">Registruotis dabar</a>
        </div>
        <div class="my-3 col-lg-4 col-md-6">
          <h3>Susisiekite</h3>
          <form action="php/mail.php" method="POST">
            <fieldset class="form-group my-3">
              <input type="email" class="form-control" id="Input Email" placeholder="El paštas" name="email" required> </fieldset>
            <fieldset class="form-group my-3">
              <input type="message" class="form-control" id="Input Message" placeholder="Žinutė" name="message" required> </fieldset>
            <button type="submit" class="btn btn-outline-primary">Siusti</button>
          </form>
        </div>
        <div class="col-lg-1"> </div>
        <div class="my-3 col-lg-3">
          <h3>Soc. tinklai</h3>
          <a href="https://www.facebook.com" target="blank">
            <i class="fa fa-facebook-square text-muted fa-3x m-2"></i>
          </a>
          <a href="https://www.instagram.com" target="blank">
            <i class="fa fa-3x fa-instagram text-muted m-2"></i>
          </a>
          <a href="https://twitter.com" target="blank">
            <i class="fa fa-3x fa-twitter m-2 text-muted"></i>
          </a>
          <a href="https://plus.google.com" target="blank">
            <i class="fa fa-3x fa-google-plus-official text-muted m-2"></i>
          </a>
          <a href="https://pinterest.com" target="blank">
            <i class="fa fa-3x text-muted fa-pinterest-p m-2"></i>
          </a>
          <a href="https://www.youtube.com" target="blank">
            <i class="fa fa-3x text-muted fa-youtube-play m-2"></i>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p class="text-muted">© Copyright 2018 Survival Games - Visos teisės saugomos. </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- JavaScript dependencies -->
  <!-- <script src="https://code.jquery.com/jquery-3.2.1.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <!-- Script: Smooth scrolling between anchors in a same page -->
  <script src="js/smooth-scroll.js"></script>
  
</body>

</html>