<?php
 include("check.php"); 
?>

<html>
   <head>
      <meta charset="utf-8">
      <!-- Material Design Lite -->
      <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
      <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
      <link rel="stylesheet" href="../css/backend.css">
      <!-- Material Design icon font -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   </head>
   <body>
      <?php
         include_once('../get_all_players.php');
         include_once('list_events.php');
         ?>
    <a href="logout.php">LOGOUT</a>
      <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
         <div class="mdl-tabs__tab-bar">
            <a href="#starks-panel" class="mdl-tabs__tab is-active">Renginiai</a>
            <a href="#lannisters-panel" class="mdl-tabs__tab">Dalyviai</a>
            <a href="#targaryens-panel" class="mdl-tabs__tab">Paieška</a>
            <a href="#GPS-panel" class="mdl-tabs__tab">GPS</a>
         </div>
         <div class="mdl-grid">
            <div class="mdl-tabs__panel is-active" id="starks-panel">
               <!-- <div class="mdl-layout-spacer"></div> -->
               <div class="mdl-cell mdl-cell--1-offset mdl-cell--8-col">
                    <?php
                     eventsTable();
                    ?>
                    <p></p>
                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored">
                    <i class="material-icons">add</i>
                    </button>
               </div>
            </div>
            <!-- <div class="mdl-layout-spacer"></div> -->
         </div>
         <div class="mdl-tabs__panel" id="lannisters-panel">
            <div class="mdl-grid">
               <!-- <div class="mdl-cell mdl-cell--12-col"> -->
               <?php
                  printAllplayers();
                  ?>
               <!-- </div> -->
            </div>
         </div>
         <div class="mdl-tabs__panel" id="targaryens-panel">
            <!-- <div class="mdl-cell mdl-cell--1-col"> -->
            <!-- <div class="mdl-cell mdl-cell--11-col"> -->
            <?php
               include_once ('search.php')
               ?>
            <!-- </div> -->
         </div>
      </div>
      <div class="mdl-tabs__panel is-active" id="GPS-panel">
      </div>
      </div>
   </body>
</html>