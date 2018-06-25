<!DOCTYPE html>

<html>



<head>

   <title>Live Search using AJAX</title>

   <!-- Including jQuery is required. -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>



   <script type="text/javascript" src="../js/search.js"></script>



</head>



<body>


   
<div class="mdl-grid">
  <div class="mdl-cell mdl-cell--2-col"></div>
  <div class="mdl-cell mdl-cell--10-col">
    <form action="#">
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
      <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
        <i class="material-icons">search</i>
      </label>
      <div class="mdl-textfield__expandable-holder">
        <input class="mdl-textfield__input" type="text" id="search">
        <!-- <label class="mdl-textfield__label" for="sample-expandable">Expandable Input</label> -->
      </div>
    </div>
    </form>
  </div>
  <div class="mdl-cell mdl-cell--2-col"></div>
</div>

<div class="mdl-grid">
<div class="mdl-cell mdl-cell--2-col"></div>
<div class="mdl-cell mdl-cell--10-col">
  <div id="display"></div>
</div>
<div class="mdl-cell mdl-cell--2-col"></div>





</body>



</html>